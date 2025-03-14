<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Core\Models\Settings;
use Modules\Page\Models\Page;
use Modules\News\Models\NewsCategory;
use Modules\News\Models\Tag;
use Modules\News\Models\News;
use Modules\Review\Models\Review;
use Modules\Space\Models\Space;
use Modules\Tour\Models\Tour;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home_page_id = setting_item('home_page_id');
        if($home_page_id && $page = Page::where("id",$home_page_id)->where("status","publish")->first())
        {
            $this->setActiveMenu($page);
            $translation = $page->translateOrOrigin(app()->getLocale());
            $seo_meta = $page->getSeoMetaWithTranslation(app()->getLocale(), $translation);
            $seo_meta['full_url'] = url("/");
            $seo_meta['is_homepage'] = true;
            $data = [
                'row'=>$page,
                "seo_meta"=> $seo_meta
            ];
            return view('Page::frontend.detail',$data);
        }
        $model_News = News::where("status", "publish");
        $data = [
            'rows'=>$model_News->paginate(5),
            'model_category'    => NewsCategory::where("status", "publish"),
            'model_tag'         => Tag::query(),
            'model_news'        => News::where("status", "publish"),
            'breadcrumbs' => [
                ['name' => __('News'), 'url' => url("/news") ,'class' => 'active'],
            ],
            "seo_meta" => News::getSeoMetaForPageList()
        ];
        return view('News::frontend.index',$data);
    }

    public function test()
    {
        Artisan::call('cache:clear');
    }

    public function voucher_du_lich(){

        $seo_meta['full_url'] = url("/");
        $seo_meta['is_homepage'] = true;
        $data = [
            'row'=>"",
            'page_title' => __("Voucher du lịch"),
            "seo_meta"=> $seo_meta
        ];
        
        return view('News::frontend.voucher_du_lich',$data);
    }

    public function thue_xe(){
        $seo_meta['full_url'] = url("/");
        $seo_meta['is_homepage'] = true;
        $data = [
            'row'=>"",
            'page_title' => __("Cho thuê xe"),
            "seo_meta"=> $seo_meta
        ];
        
        return view('News::frontend.thue_xe',$data);
    }

    public function rental_location(){
        $seo_meta['full_url'] = url("/");
        $seo_meta['is_homepage'] = true;
        $data = [
            'row'=>"",
            'page_title' => __("CMS Rental Location"),
            "seo_meta"=> $seo_meta
        ];
        
        return view('News::frontend.cmsrental',$data);
    }

    public function register(){
        return view('News::frontend.register_partner');
    }

    public function cmscpanel(){
        //->where('status','publish')
        //$data_bravo_hotels=
        $dt_publish=DB::table('bravo_hotels')->where('status','publish')->where('update_user',Session::get('partner_id'))->orderBy("id","desc")->get();
        $dt_draft=DB::table('bravo_hotels')->where('status','!=','publish')->where('update_user',Session::get('partner_id'))->orderBy("id","desc")->get();

        return view('News::frontend.cmscpanel',compact('dt_publish','dt_draft'));
    }

    public function createHotel(){
        return view('News::frontend.partnerCreateHotell');
    }

    public function thong_tin_ca_nhan(){
        return view('News::frontend.partnerUserProfile');
    }

    public function dat_phong_khach_san($idhotel,$idroom){
        $data_hotel=DB::table('bravo_hotels')->where("id",$idhotel)->first();
        $data_room=DB::table('bravo_hotel_rooms')->where("id",$idroom)->first();

        return view('News::frontend.dat_phong_khach_san',compact('data_hotel','data_room'));
    }

    public function confirm_dat_phong_khach_san($idbook){
        return view('News::frontend.xac_nhan_thanh_toan');
    }

    public function editHotel($id){
        $data=DB::table('bravo_hotels')->where('id',$id)->first();
        $data_bravo_terms=DB::table('bravo_terms')->where('attr_id','4')->orderBy('id','asc')->get();
        $data_bravo_hotel_term=DB::table('bravo_hotel_term')->where('target_id',$id)->get();
        $banner_img=DB::table('media_files')->where('id',$data->image_id)->first();
        //$bravo_hotel_rooms=DB::table('bravo_hotel_rooms')->where('parent_id',$id)->get();
        $bravo_hotel_room_list_calendars_all=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$id)->orderBy("id","asc")->get();
        $bravo_hotel_room_calendars=array();
        $bravo_hotel_room_list_calendars=array();
        if(isset($_GET['room_id'])){ 
            $bravo_hotel_room_calendars=DB::table('bravo_hotel_room_calendars')->where('target_id',$id)->where('fk_list_id',$_GET['room_id'])->first(); 
            $bravo_hotel_room_list_calendars=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$id)->where('id',$_GET['room_id'])->orderBy("id","asc")->first();
        }
        else{ 
            $bravo_hotel_room_calendars=DB::table('bravo_hotel_room_calendars')->where('target_id',$id)->first(); 
            $bravo_hotel_room_list_calendars=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$id)->orderBy("id","asc")->first();
        }

        $checkin_day='';
        $checkout_day='';
        if(!empty($bravo_hotel_room_calendars)){
            $v1='';$v2='';$v3='';
            $p1='';$p2='';$p3='';
            $mang1 = explode('-',$bravo_hotel_room_calendars->fromDate);
            $j1=0;
            foreach($mang1 as $k => $v)
            {
                $j1++;
                if($j1==1){
                    $v2=$v;
                }else if($j1==2){
                    $v1=$v;
                }
                else if($j1==3){
                    $v3=$v;
                }
            }
    
            $mang2 = explode('-',$bravo_hotel_room_calendars->toDate);
            $j2=0;
            foreach($mang2 as $k => $v)
            {
                $j2++;
                if($j2==1){
                    $p2=$v;
                }else if($j2==2){
                    $p1=$v;
                }
                else if($j2==3){
                    $p3=$v;
                }
            }
    
            $checkin_day=$v1.'/'.$v2.'/'.$v3;
            $checkout_day=$p1.'/'.$p2.'/'.$p3;
        }else{
            $dt = Carbon::now();
            $dt->addDays(1);
            $checkin_day=Carbon::now()->month.'/'.Carbon::now()->day.'/'.Carbon::now()->year;
            $checkout_day=$dt->month.'/'.$dt->day.'/'.$dt->year;
        }
        


        $qqq='';
        if($_GET){
            if(array_key_exists("tab", $_GET)){
                $qqq=$_GET["tab"];
            }
        }
        
        
        /*$p = json_decode($data->policy);
        echo '<pre>';
        print_r($checkout_day);
        echo '</pre>';
        die();*/
        return view('News::frontend.partnerEditHotel',compact('data','qqq','banner_img','bravo_hotel_room_calendars','data_bravo_terms','bravo_hotel_room_list_calendars_all','data_bravo_hotel_term','bravo_hotel_room_list_calendars','checkin_day','checkout_day'));//'bravo_hotel_rooms',
        
    }

    public function public_hotel($id){
        $data=DB::table('bravo_hotels')->where('id',$id)->first();
        $data_bravo_terms=DB::table('bravo_terms')->where('attr_id','4')->orderBy('id','asc')->get();
        $data_bravo_hotel_term=DB::table('bravo_hotel_term')->where('target_id',$id)->get();
        $banner_img=DB::table('media_files')->where('id',$data->image_id)->first();
        //$bravo_hotel_rooms=DB::table('bravo_hotel_rooms')->where('parent_id',$id)->get();
        $bravo_hotel_room_list_calendars_all=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$id)->orderBy("id","asc")->get();
        $bravo_hotel_room_calendars=array();
        $bravo_hotel_room_list_calendars=array();
        if(isset($_GET['room_id'])){ 
            $bravo_hotel_room_calendars=DB::table('bravo_hotel_room_calendars')->where('target_id',$id)->where('fk_list_id',$_GET['room_id'])->first(); 
            $bravo_hotel_room_list_calendars=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$id)->where('id',$_GET['room_id'])->orderBy("id","asc")->first();
        }
        else{ 
            $bravo_hotel_room_calendars=DB::table('bravo_hotel_room_calendars')->where('target_id',$id)->first(); 
            $bravo_hotel_room_list_calendars=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$id)->orderBy("id","asc")->first();
        }

        $checkin_day='';
        $checkout_day='';
        if(!empty($bravo_hotel_room_calendars)){
            $v1='';$v2='';$v3='';
            $p1='';$p2='';$p3='';
            $mang1 = explode('-',$bravo_hotel_room_calendars->fromDate);
            $j1=0;
            foreach($mang1 as $k => $v)
            {
                $j1++;
                if($j1==1){
                    $v2=$v;
                }else if($j1==2){
                    $v1=$v;
                }
                else if($j1==3){
                    $v3=$v;
                }
            }
    
            $mang2 = explode('-',$bravo_hotel_room_calendars->toDate);
            $j2=0;
            foreach($mang2 as $k => $v)
            {
                $j2++;
                if($j2==1){
                    $p2=$v;
                }else if($j2==2){
                    $p1=$v;
                }
                else if($j2==3){
                    $p3=$v;
                }
            }
    
            $checkin_day=$v1.'/'.$v2.'/'.$v3;
            $checkout_day=$p1.'/'.$p2.'/'.$p3;
        }else{
            $dt = Carbon::now();
            $dt->addDays(1);
            $checkin_day=Carbon::now()->month.'/'.Carbon::now()->day.'/'.Carbon::now()->year;
            $checkout_day=$dt->month.'/'.$dt->day.'/'.$dt->year;
        }
        


        $qqq='';
        if($_GET){
            if(array_key_exists("tab", $_GET)){
                $qqq=$_GET["tab"];
            }
        }
        
        
        /*$p = json_decode($data->policy);
        echo '<pre>';
        print_r($checkout_day);
        echo '</pre>';
        die();*/
        return view('News::frontend.partnerPublicHotel',compact('data','qqq','banner_img','bravo_hotel_room_calendars','data_bravo_terms','bravo_hotel_room_list_calendars_all','data_bravo_hotel_term','bravo_hotel_room_list_calendars','checkin_day','checkout_day'));
    }

    public function reviewHotel($id){
        $data=DB::table('bravo_hotels')->where('id',$id)->first();
        $data_bravo_terms=DB::table('bravo_terms')->where('attr_id','4')->orderBy('id','asc')->get();
        $data_bravo_hotel_term=DB::table('bravo_hotel_term')->where('target_id',$id)->get();
        $banner_img=DB::table('media_files')->where('id',$data->image_id)->first();
        //$bravo_hotel_rooms=DB::table('bravo_hotel_rooms')->where('parent_id',$id)->get();
        $bravo_hotel_room_list_calendars_all=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$id)->orderBy("id","asc")->get();
        $bravo_hotel_room_calendars=array();
        $bravo_hotel_room_list_calendars=array();
        if(isset($_GET['room_id'])){ 
            $bravo_hotel_room_calendars=DB::table('bravo_hotel_room_calendars')->where('target_id',$id)->where('fk_list_id',$_GET['room_id'])->first(); 
            $bravo_hotel_room_list_calendars=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$id)->where('id',$_GET['room_id'])->orderBy("id","asc")->first();
        }
        else{ 
            $bravo_hotel_room_calendars=DB::table('bravo_hotel_room_calendars')->where('target_id',$id)->first(); 
            $bravo_hotel_room_list_calendars=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$id)->orderBy("id","asc")->first();
        }

        $checkin_day='';
        $checkout_day='';
        if(!empty($bravo_hotel_room_calendars)){
            $v1='';$v2='';$v3='';
            $p1='';$p2='';$p3='';
            $mang1 = explode('-',$bravo_hotel_room_calendars->fromDate);
            $j1=0;
            foreach($mang1 as $k => $v)
            {
                $j1++;
                if($j1==1){
                    $v2=$v;
                }else if($j1==2){
                    $v1=$v;
                }
                else if($j1==3){
                    $v3=$v;
                }
            }
    
            $mang2 = explode('-',$bravo_hotel_room_calendars->toDate);
            $j2=0;
            foreach($mang2 as $k => $v)
            {
                $j2++;
                if($j2==1){
                    $p2=$v;
                }else if($j2==2){
                    $p1=$v;
                }
                else if($j2==3){
                    $p3=$v;
                }
            }
    
            $checkin_day=$v1.'/'.$v2.'/'.$v3;
            $checkout_day=$p1.'/'.$p2.'/'.$p3;
        }else{
            $dt = Carbon::now();
            $dt->addDays(1);
            $checkin_day=Carbon::now()->month.'/'.Carbon::now()->day.'/'.Carbon::now()->year;
            $checkout_day=$dt->month.'/'.$dt->day.'/'.$dt->year;
        }
        


        $qqq='';
        if($_GET){
            if(array_key_exists("tab", $_GET)){
                $qqq=$_GET["tab"];
            }
        }
        
        
        /*$p = json_decode($data->policy);
        echo '<pre>';
        print_r($checkout_day);
        echo '</pre>';
        die();*/

        return view('News::frontend.partnerReviewHotel',compact('data','qqq','banner_img','bravo_hotel_room_calendars','data_bravo_terms','bravo_hotel_room_list_calendars_all','data_bravo_hotel_term','bravo_hotel_room_list_calendars','checkin_day','checkout_day'));//'bravo_hotel_rooms',
    }

    public function editRoom($idhotel,$idroom){
        /*$data=DB::table('bravo_hotel_rooms')->where('id',$idroom)->first();*/
        $data=DB::table('bravo_hotel_room_list_calendars')->where('id',$idroom)->first();
        $_IDHotel=$idhotel;
        return view('News::frontend.partnerEditRoom',compact('data','_IDHotel'));
    }

    public function set_email(){
        return view('News::frontend.partner_setemail');
    }

    public function partner_login(){
        return view('News::frontend.login_partner');
    }

    public function partnership(){

        $seo_meta['full_url'] = url("/");
        $seo_meta['is_homepage'] = true;
        $data = [
            'row'=>"",
            'page_title' => __("Hợp tác với chúng tôi - Đăng ký để phát triển kinh doanh của bạn"),
            "seo_meta"=> $seo_meta
        ];
        
        return view('News::frontend.partnership',$data);
    }

    public function confirm()
    {
        $seo_meta['full_url'] = url("/");
        $seo_meta['is_homepage'] = true;
        $data = [
            'row'=>"",
            'page_title' => __("Voucher du lịch - Thông tin phản hồi"),
            "seo_meta"=> $seo_meta
        ];
        return view('News::frontend.confirm',$data);
    }

    public function partnership_confirm(){
        return view('News::frontend.partner_confirm_register');
    }

    public function signin()
    {
        /*$aa=Hash::make('123456A@');
        echo '<pre>';
        print_r($aa);
        echo '</pre>';
        die();*/
        $seo_meta['full_url'] = url("/");
        $seo_meta['is_homepage'] = true;
        $data = [
            'row'=>"",
            'page_title' => __("Đăng nhập"),
            "seo_meta"=> $seo_meta
        ];
        return view('News::frontend.signin',$data);
    }
    
    public function loadRoom(Request $request){
        //$data=DB::table('bravo_hotel_room_calendars')->where('target_id',$request->idhotel)->first();
        //$bravo_hotel_room_list_calendars=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$request->idhotel)->orderBy("id","asc")->first();
        $data=array();
        //fk_list_id
        if($request->fk_list_id!=''){ 
            $data=DB::table('bravo_hotel_room_calendars')->where('target_id',$request->idhotel)->where('fk_list_id',$request->fk_list_id)->first(); 
        }
        else{ $data=DB::table('bravo_hotel_room_calendars')->where('target_id',$request->idhotel)->first(); }

        $pp='';
        if(!empty($data)){
            if(($data->content!=null) || ($data->content!='')){
                $arrContent = explode('z',$data->content);
                $j=0;
                foreach($arrContent as $k => $v)
                {
                    if($v!=''){
                        $j++;
                    }
                }
                $pp=$data->id.'i'.$data->fromDate.'i'.$data->toDate.'i'.$data->content.'i'.$j;
            }
        }
        
        echo $pp;
    }

    public function signup()
    {
        $seo_meta['full_url'] = url("/");
        $seo_meta['is_homepage'] = true;
        $data = [
            'row'=>"",
            'page_title' => __("Đăng ký"),
            "seo_meta"=> $seo_meta
        ];
        return view('News::frontend.signup',$data);
    }

    

    public function updateMigrate(){
        Artisan::call('cache:clear');
        Artisan::call('migrate', [
            '--force' => true,
        ]);
        echo $this->updateTo110();
        echo "<br>";
        echo $this->updateTo120();
        echo "<br>";
        echo $this->updateTo130();
        echo "<br>";
        echo $this->updateTo140();
        Artisan::call('cache:clear');
        //die();
    }

    /**
     * @todo Update From 1.0 to 1.1
     */
    public function updateTo110(){
        if(setting_item('update_to_110')){
            return "Updated Up 1.10";
        }
        Permission::findOrCreate('dashboard_vendor_access');
        $vendor = Role::findOrCreate('vendor');
        $vendor->givePermissionTo('media_upload');
        $vendor->givePermissionTo('tour_view');
        $vendor->givePermissionTo('tour_create');
        $vendor->givePermissionTo('tour_update');
        $vendor->givePermissionTo('tour_delete');
        $vendor->givePermissionTo('dashboard_vendor_access');
        $role = Role::findOrCreate('administrator');
        $role->givePermissionTo('dashboard_vendor_access');
        Settings::store('update_to_110',true);
        return "Migrate Up 1.10";
    }

    /**
     * @todo Update From 1.1.0 to 1.2.0
     */
    public function updateTo120(){

        if(setting_item('update_to_120')){
            return "Updated Up 1.20";
        }
        Permission::findOrCreate('space_view');
        Permission::findOrCreate('space_create');
        Permission::findOrCreate('space_update');
        Permission::findOrCreate('space_delete');
        Permission::findOrCreate('space_manage_others');
        Permission::findOrCreate('space_manage_attributes');
        // Vendor
        $vendor = Role::findOrCreate('vendor');
        $vendor->givePermissionTo('space_create');
        $vendor->givePermissionTo('space_view');
        $vendor->givePermissionTo('space_update');
        $vendor->givePermissionTo('space_delete');
        // Admin
        $role = Role::findOrCreate('administrator');
        $role->givePermissionTo('space_view');
        $role->givePermissionTo('space_create');
        $role->givePermissionTo('space_update');
        $role->givePermissionTo('space_delete');
        $role->givePermissionTo('space_manage_others');
        $role->givePermissionTo('space_manage_attributes');
        if(empty(setting_item('topbar_left_text'))){
            DB::table('core_settings')->insert(
                [
                    'name'  => 'topbar_left_text',
                    'val'   => '<div class="socials">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-google-plus"></i></a>
</div>
<span class="line"></span>
<a href="mailto:contact@bookingcore.com">contact@bookingcore.com</a>',
                    'group' => "general",
                ]
            );
        }
        Settings::store('update_to_120',true);
        return "Migrate Up 1.20";
    }

    public function updateTo130(){

        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'vendor_commission_amount')) {
                $table->integer('vendor_commission_amount')->nullable();
                $table->decimal('total_before_fees',10,2)->nullable();
            }
            if (!Schema::hasColumn('users', 'vendor_commission_type')) {
                $table->string('vendor_commission_type',30)->nullable();
            }
        });

       if(setting_item('update_to_130')){
           return "Updated Up 1.30";
       }

        $this->__updateReviewVendorId();

        // Fix null status user
        User::query()->whereRaw('status is NULL')->update([
            'status'=>'publish'
        ]);

        Settings::store('update_to_130',true);
        return "Migrate Up 1.30";
    }
    public function updateTo140(){

//        if(setting_item('update_to_140')){
//           return "Updated Up 1.40";
//        }

        Permission::findOrCreate('vendor_payout_view');
        Permission::findOrCreate('vendor_payout_manage');

        Permission::findOrCreate('hotel_view');
        Permission::findOrCreate('hotel_create');
        Permission::findOrCreate('hotel_update');
        Permission::findOrCreate('hotel_delete');
        Permission::findOrCreate('hotel_manage_others');
        Permission::findOrCreate('hotel_manage_attributes');

        // Admin
        $role = Role::findOrCreate('administrator');
        $role->givePermissionTo('vendor_payout_view');
        $role->givePermissionTo('vendor_payout_manage');
        $role->givePermissionTo('hotel_view');
        $role->givePermissionTo('hotel_create');
        $role->givePermissionTo('hotel_update');
        $role->givePermissionTo('hotel_delete');
        $role->givePermissionTo('hotel_manage_others');
        $role->givePermissionTo('hotel_manage_attributes');


        $vendor = Role::findOrCreate('vendor');
        $vendor->givePermissionTo('hotel_view');
        $vendor->givePermissionTo('hotel_create');
        $vendor->givePermissionTo('hotel_update');
        $vendor->givePermissionTo('hotel_delete');

        Settings::store('update_to_140',true);
        return "Migrate Up 1.40";
    }

    protected function __updateReviewVendorId(){
        $all = Review::query()->whereNull('vendor_id')->get();
        if(!empty($all))
        {
            foreach ($all as $item){
                switch ($item->object_model)
                {
                    case "tour":
                        $tour = Tour::find($item->object_id);
                        if($tour){
                            $item->vendor_id = $tour->create_user;
                            $item->save();
                        }
                        break;
                    case "space":
                        $tour = Space::find($item->object_id);
                        if($tour){
                            $item->vendor_id = $tour->create_user;
                            $item->save();
                        }
                        break;
                }
            }
        }
    }

    public function checkConnectDatabase(Request $request){
        $connection = $request->input('database_connection');
        config([
            'database' => [
                'default' => $connection."_check",
                'connections' => [
                    $connection."_check" => [
                        'driver' => $connection,
                        'host' => $request->input('database_hostname'),
                        'port' => $request->input('database_port'),
                        'database' => $request->input('database_name'),
                        'username' => $request->input('database_username'),
                        'password' => $request->input('database_password'),
                    ],
                ],
            ],
        ]);
        try {
            DB::connection()->getPdo();
            $check = DB::table('information_schema.tables')->where("table_schema","performance_schema")->get();
            if(empty($check) and $check->count() == 0){
                $this->sendSuccess(false , __("Access denied for user!. Please check your configuration."));
            }
            if(DB::connection()->getDatabaseName()){
                $this->sendSuccess(false , __("Yes! Successfully connected to the DB: ".DB::connection()->getDatabaseName()));
            }else{
                $this->sendSuccess(false , __("Could not find the database. Please check your configuration."));
            }
        } catch (\Exception $e) {
            $this->sendError( $e->getMessage() );
        }
    }
}
