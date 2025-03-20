<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Mail;
use App\Models\Menus;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class HomeController extends Controller
{
	public function index(){
		$cho_nghi_ban_chay_nhat=DB::table('bravo_hotels')->take(4)->orderBy('id','desc')->get();
		$cam_hung_cho_moi_chuyen_di=DB::table('news')->take(5)->orderBy('id','desc')->get();
		return view('home',compact('cho_nghi_ban_chay_nhat','cam_hung_cho_moi_chuyen_di'));
	}
	
	public function partnership(){
		//return view('partnership');
		return view('pages.partnership');
	}
	
	public function voucher_du_lich(){
		return view('pages.voucher_du_lich');
	}
	
	public function cmscpanel(){
		$dt_publish=DB::table('bravo_hotels')->where('status','publish')->where('update_user',Session::get('partner_id'))->orderBy("id","desc")->get();
		$dt_draft=DB::table('bravo_hotels')->where('status','!=','publish')->where('update_user',Session::get('partner_id'))->orderBy("id","desc")->get();
		
		return view('pages.cmscpanel',compact('dt_publish','dt_draft'));
	}
	
	public function khach_san_categories($slug){
		$location=DB::table('location')->where('status','A')->where('slug',$slug)->orderBy("id","desc")->first();
		$all_ks=DB::table('bravo_hotels')->where('location_id',$location->id)->where('status','publish')->orderBy("id","desc")->get();
		
		return view('pages.khach_san',compact('location','all_ks'));
	}
	
	public function createHotel(){
		return view('pages.partnerCreateHotell');
	}
	
	public function signin()
	{
		/*$aa=Hash::make('123456A@');
		echo '<pre>';
		print_r($aa);
		echo '</pre>';
		die();*/
		return view('pages.signin');
	}
	
	public function signup(){
		return view('pages.signup');
	}
	
	public function dang_ky(Request $request){
		$data=array();
		$data["fullname"]=$request->txtFullname;
		$data["phone"]=$request->txtPhone;
		$data["email"]=$request->txtEmail;
		$data["password"]=$request->txtRePassword;
		$data["status"]='A';
		$data["created_at"]=Carbon::now();
		DB::table('usersf')->insert($data);
		
		echo 'InsertSuccefully';
	}
	function contact(Request $request){
		$data=array();
		$data["name"]=$request->txtFullname;
		$data["phone"]=$request->txtPhone;
		$data["email"]=$request->txtEmail;
		$data["message"]=$request->txtRePassword;
		$data["status"]='A';
		$data["create_user"]=1;
		$data["update_user"]=1;
		$data["deleted_at"]=Carbon::now();
		$data["created_at"]=Carbon::now();
		$data["updated_at"]=Carbon::now();
		DB::table('bravo_contact')->insert($data);
		Session::put('message','Gửi thông tin thành công<br/>Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất!<br/>Trân trọng.');
		return Redirect::to(route('lien.he'));
	}
	
	public function create_hotel_partnership(Request $request){
		try{
			$data=array();
			$data['title']=$request->title;
			$data['slug']=$request->slug;
			$data['content']='';
			$data['image_id']=0;
			$data['banner_image_id']=0;
			$data['location_id']=0;
			$data['address']='';
			$data['map_lat']='';
			$data['map_lng']='';
			$data['map_zoom']=0;
			$data['is_featured']=0;
			$data['gallery']='';
			$data['video']='';
			$data['policy']='';
			$data['star_rate']=0;
			$data['price']=0;
			$data['check_in_time']='';
			$data['check_out_time']='';
			$data['allow_full_day']=0;
			$data['sale_price']=0;
			$data['status']='draft';
			$data['create_user']=-1;
			$data['update_user']=Session::get('partner_id');
			$data['deleted_at']=NULL;
			$data['created_at']=Carbon::now();
			$data['updated_at']=Carbon::now();
			//DB::table('bravo_hotels')->insert($data);
			$id = DB::table('bravo_hotels')->insertGetId($data);
			return Redirect::to(route('cmscpanel.editHotel',array($id)));
		}catch(Exception $ex){
	
		}
	}
	
	public function khach_san_details($slug){
		$hotel_details=DB::table('bravo_hotels')->where('slug',$slug)->first();
		$bravo_hotel_room_list_calendars=DB::table('bravo_hotel_room_list_calendars')->where('hotel_id',$hotel_details->id)->orderBy("id","asc")->get();
		dd($bravo_hotel_room_list_calendars);
		$current_url=url()->current();
		return view('pages.khachsandetail',compact('hotel_details','bravo_hotel_room_list_calendars','current_url'));
	}
	
	public function tuyendung($slug){
		$data=DB::table('recruitment')->where('slug',$slug)->first();
		return view("pages.tuyendungdetails",compact("data"));
	}
	
	public function editHotel($id){
		$data=DB::table('bravo_hotels')->where('id',$id)->first();
		$data_bravo_terms=DB::table('bravo_terms')->where('attr_id','4')->orderBy('id','asc')->get();
		$data_bravo_hotel_term=DB::table('bravo_hotel_term')->where('target_id',$id)->get();
		$banner_img=DB::table('media_files')->where('id',$data->image_id)->first();
		$all_location=DB::table('location')->where('status','A')->orderBy("orders","asc")->get();
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
		return view('pages.partnerEditHotel',compact('data','qqq','banner_img','bravo_hotel_room_calendars','data_bravo_terms','bravo_hotel_room_list_calendars_all','data_bravo_hotel_term','bravo_hotel_room_list_calendars','checkin_day','checkout_day','all_location'));
		
	}
	
	public function editRoom($idhotel,$idroom){
		$data=DB::table('bravo_hotel_room_list_calendars')->where('id',$idroom)->first();
		$_IDHotel=$idhotel;
		return view('pages.partnerEditRoom',compact('data','_IDHotel'));
	}
	
	public function create_room_calendars(Request $request){
		$hotel_Id=$request->hdhotelroom3;
		$data=array();
		$data['hotel_id']=$request->hdhotelroom3;
		$data['code']=rand();
		$data['title']=$request->title;
		$data['area']=$request->size;
		$data['view']=$request->view;
		$data['bed_type']=$request->bed_type;
		$data['bed_num']=$request->beds;
		$data['adults']=$request->adults;
		$data['children']=$request->children;
		$data['user_id']=Session::get('partner_id');
		$data['created_at']=Carbon::now();
		$data['updated_at']=Carbon::now();
		$data['status']='A';
		
		$id = DB::table('bravo_hotel_room_list_calendars')->insertGetId($data);
		$dt = Carbon::now();
		$dt->addDays(1);
		$checkin_day=Carbon::now()->month.'/'.Carbon::now()->day.'/'.Carbon::now()->year;
		$checkout_day=$dt->month.'/'.$dt->day.'/'.$dt->year;
		$data_room=array();
		$data_room['target_id']=$hotel_Id;
		$data_room['fk_list_id']=$id;
		$data_room['title']=$request->title;
		$data_room['fromDate']=$checkin_day;
		$data_room['toDate']=$checkout_day;
		$data_room['status']='A';
		
	
		DB::table('bravo_hotel_room_calendars')->insert($data_room);
		Session::put('message','Thêm mới phòng thành công');
		if($request->calendars_status=='publish'){
			return Redirect::to(route('public.hotel',array($hotel_Id)).'?tab=13');
		}else{
			return Redirect::to(route('cmscpanel.editHotel',array($hotel_Id)).'?tab=4');
		}
	}
	
	public function parter_complate($id_hotel){
		$toEmail="thao.mai@hoabinhtourist.com";
		$link=route('cmscpanel.reviewHotel',array($id_hotel)).'?tab=1';
		Mail::send('emails.notificationtomanage', array('email'=>$toEmail,'link'=>$link,'id_hotel'=>$id_hotel), function($message) use ($toEmail){
			$message->to($toEmail, 'hoabinhbooking.test')->subject('[HOABINHBOOKNG.COM] Xác nhận địa chỉ email #'.rand());
		});
		
		Session::put('message2','Gửi yêu cầu thành công');
		return Redirect::to(route('cmscpanel.editHotel',array($id_hotel)).'?tab=1');
	}
	
	public function partner_room_delete($hotel_id,$id){
		/*DB::table('bravo_hotel_rooms')->where('id',$id)->delete();*/
		DB::table('bravo_hotel_room_list_calendars')->where('id',$id)->delete();
		DB::table('bravo_hotel_room_calendars')->where('target_id',$hotel_id)->where('fk_list_id',$id)->delete();
		Session::put('message','Xóa thành công');
		return Redirect::to(route('cmscpanel.editHotel',array($hotel_id)).'?tab=4');
	}
	
	public function partner_public_room_delete($hotel_id,$id){
		DB::table('bravo_hotel_room_list_calendars')->where('id',$id)->delete();
		DB::table('bravo_hotel_room_calendars')->where('target_id',$hotel_id)->where('fk_list_id',$id)->delete();
		Session::put('message','Xóa thành công');
		return Redirect::to(route('public.hotel',array($hotel_id)).'?tab=13');
	}
	public function update_room_partnership_calendar(Request $request){
		$_IdHotel=$request->idhotel;
		$_Time=$request->checkin;
		$_Info=$request->info;
		$_IDRoom=$request->id_room;
		$arrTime = explode('i',$_Time);
		$j=0;
		foreach($arrTime as $k => $v)
		{
			$j++;
			if($j==1){ $checkin=str_replace('_','-',$v); }
			if($j==2){ $checkout=str_replace('_','-',$v); }
		}
		//echo $_Info;
		//dd($_Info);
		DB::table('bravo_hotel_room_calendars')->where('id',$_IDRoom)->update(['content' => $_Info,'target_id'=>$_IdHotel,'fromDate'=>$checkin,'toDate'=>$checkout,'updated_at'=>Carbon::now()]);
		echo 'Đã lưu thành công';
	}
	
	public function loadRoom(Request $request){
		$data=array();
		if($request->fk_list_id!=''){ 
			$data=DB::table('bravo_hotel_room_calendars')->where('target_id',$request->idhotel)->where('fk_list_id',$request->fk_list_id)->first(); 
		}
		else{ $data=DB::table('bravo_hotel_room_calendars')->where('target_id',$request->idhotel)->first(); }
	
		//dd($data);
		
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
	
	public function action(Request $request)
	{
		$get_image = $request->file('file');
		
		if($get_image){
			$get_name_image = $get_image->getClientOriginalName();
			$name_image = current(explode('.',$get_name_image));
			$new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
			$get_image->move(public_path('uploads/img'),$new_image);
	
			$data=array();
			$data['file_name']=$new_image;
			$data['file_path']='uploads/img/'.$new_image;
			$data['file_size']='';
			$data['file_type']='';
			$data['file_extension']='';
			$data['create_user']=-1;
			$data['update_user']=Session::get('partner_id');
			$data['deleted_at']=null;
			$data['app_id']=null;
			$data['app_user_id']=null;
			$data['file_width']=null;
			$data['file_height']=null;
			$data['created_at']=Carbon::now();
			$data['updated_at']=Carbon::now();
			$id = DB::table('media_files')->insertGetId($data);
			DB::table('bravo_hotels')->where('id',$request->id_hotel)->update(['banner_image_id' => $id]);
			$link_redirect=route('cmscpanel.editHotel',array($request->id_hotel)).'?tab=2';
			return Redirect::to($link_redirect);
			
		}else{ }
	}
	
	public function avatar(Request $request)
	{
		$get_image = $request->file('file_avatar');
		$data_hotel=DB::table('media_files')->where('create_user','-1')->where('id',$request->id_hotel)->get();
		if(!empty($data_hotel)){
			foreach($data_hotel as $k=>$v){
				DB::table('media_files')->where('id',$v->image_id)->delete();
			}
		}

		if($get_image){
			$get_name_image = $get_image->getClientOriginalName();
			$name_image = current(explode('.',$get_name_image));
			$new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
			$get_image->move(public_path('uploads/img'),$new_image);
	
			$data=array();
			$data['file_name']=$new_image;
			$data['file_path']='uploads/img/'.$new_image;
			$data['file_size']='';
			$data['file_type']='';
			$data['file_extension']='';
			$data['create_user']=-1;
			$data['update_user']=Session::get('partner_id');
			$data['deleted_at']=null;
			$data['app_id']=null;
			$data['app_user_id']=null;
			$data['file_width']=null;
			$data['file_height']=null;
			$data['created_at']=Carbon::now();
			$data['updated_at']=Carbon::now();
			$id = DB::table('media_files')->insertGetId($data);
			DB::table('bravo_hotels')->where('id',$request->id_hotel_avatar)->update(['image_id' => $id]);
			
			if($request->avatar_status=='publish'){
				$link_redirect=route('public.hotel',array($request->id_hotel_avatar)).'?tab=12';
				return Redirect::to($link_redirect);
			}else{
				$link_redirect=route('cmscpanel.editHotel',array($request->id_hotel_avatar)).'?tab=2';
				return Redirect::to($link_redirect);
			}
		}else{ }
	}
	
	public function doGallery(Request $request){
			// kiểm tra có files sẽ xử lý
			if($request->hasFile('photos')) {
				$allowedfileExtension=['jpg','jpeg','png'];
				$files = $request->file('photos');
				// flag xem có thực hiện lưu DB không. Mặc định là có
				$exe_flg = true;
				// kiểm tra tất cả các files xem có đuôi mở rộng đúng không
				foreach($files as $file) {
					$extension = $file->getClientOriginalExtension();
					$check=in_array($extension,$allowedfileExtension);
	
					if(!$check) {
						// nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
						$exe_flg = false;
						break;
					}
				}
				// nếu không có file nào vi phạm validate thì tiến hành lưu DB
				if($exe_flg) {
					// duyệt từng ảnh và thực hiện lưu
					$str_Gallery='';
					$first_hotel=DB::table('bravo_hotels')->where('id',$request->id_hotel2)->first();
					$str_Gallery=$first_hotel->gallery;
					foreach ($request->photos as $photo) {
						$get_name_image = $photo->getClientOriginalName();
						$name_image = current(explode('.',$get_name_image));
						$new_image =  $name_image.rand(0,99).'.'.$photo->getClientOriginalExtension();
						//$photo->move('uploads/products',$new_image);
						$photo->move(public_path('uploads/img'),$new_image);
						$data=array();
						$data['file_name']=$new_image;
						$data['file_path']='uploads/img/'.$new_image;
						$data['file_size']='';
						$data['file_type']='';
						$data['file_extension']='';
						$data['create_user']=-1;
						$data['update_user']=Session::get('partner_id');
						$data['deleted_at']=null;
						$data['app_id']=null;
						$data['app_user_id']=null;
						$data['file_width']=null;
						$data['file_height']=null;
						$data['created_at']=Carbon::now();
						$data['updated_at']=Carbon::now();
						$id = DB::table('media_files')->insertGetId($data);
						$str_Gallery.=$id.',';
					}
					DB::table('bravo_hotels')->where('id',$request->id_hotel2)->update(['gallery' => $str_Gallery]);
					
					if($request->gallery_status=='publish'){
						$link_redirect=route('public.hotel',array($request->id_hotel2)).'?tab=12';
						return Redirect::to($link_redirect);
					}else{
						$link_redirect=route('cmscpanel.editHotel',array($request->id_hotel2)).'?tab=2';
						return Redirect::to($link_redirect);
					}
				} else {
					echo "Falied to upload. Only accept jpg, png photos.";
				}
		}
	}
	
	public function delPublicGallery($idHotel,$id,$status){
		DB::table('media_files')->where('id',$id)->delete();
		$lstMediaHotels=DB::table('bravo_hotels')->where('id',$idHotel)->first();
		
		if($lstMediaHotels->gallery!=''){
			
			$arr= explode(",",$lstMediaHotels->gallery);
	
			$lstMedia = DB::table('media_files')->whereIn('id', $arr)->get();
			$strMedia='';
			if(!empty($lstMedia)){
				foreach($lstMedia as $k=>$v){
					if($v!=''){
						$strMedia.=$v->id.',';
					}
				}
			}
	
			
			DB::table('bravo_hotels')->where('id',$idHotel)->update(['gallery' => $strMedia]);
			Session::put('message','Xóa thành công');
		}
		if($status=='0'){
			$link_redirect=route('public.hotel',array($request->id_hotel_avatar)).'?tab=12';
			return Redirect::to($link_redirect);
		}else{
			$link_redirect=route('cmscpanel.editHotel',array($request->id_hotel_avatar)).'?tab=2';
			return Redirect::to($link_redirect);
		}
	}
	
	public function update_hotel_partnership(Request $request){
		try{
	
			$id=$request->id;
	
			DB::table('bravo_hotel_term')->where('target_id',$id)->delete();
			foreach($request->terms as $ter_k=>$ter_v){
				$data_ter=array();
				$data_ter['term_id']=$ter_v;
				$data_ter['target_id']=$id;
				$data_ter['create_user']=0;
				$data_ter['update_user']=Session::get('partner_id');
				$data_ter['created_at']=Carbon::now();
				$data_ter['updated_at']=Carbon::now();
				DB::table('bravo_hotel_term')->insert($data_ter);
			}
	
			$data=array();
			
			$data['title']=$request->title;
			$data['slug']=$request->slug;
			$data['content']=$request->content;
			$data['image_id']=$request->hd_image_id;//
			$data['banner_image_id']=$request->hd_banner_image_id;//
			$data['location_id']=$request->location_id;
			$data['address']=$request->address;
			$data['map_lat']=$request->map_lat;
			$data['map_lng']=$request->map_lng;
			$data['map_zoom']=$request->map_zoom;
			$data['is_featured']=NULL;
			$data['gallery']=$request->hd_gallery;//
			$data['video']=$request->video;
			$data['policy']=json_encode($request->policy);
			$data['star_rate']=$request->star_rate;
			//$price_2=str_replace(',','',$request->price);
			$data['price']=0;//$price_2;
			$data['check_in_time']=$request->check_in_time;
			$data['check_out_time']=$request->check_out_time;
			$data['allow_full_day']=NULL;
			//$sale_price_2=str_replace(',','',$request->sale_price);
			$data['sale_price']=0;//$sale_price_2;
			$data['status']=$request->r_status;
			$data['create_user']=-1;
			$data['update_user']=Session::get('partner_id');
			$data['deleted_at']=NULL;
			$data['created_at']=Carbon::now();
			$data['updated_at']=Carbon::now();
			
			DB::table('bravo_hotels')->where('id',$id)->update($data);
			Session::put('message','Cập nhật thông tin khách sạn thành công');
			if($request->r_status=='publish'){
				return Redirect::to(route('public.hotel',array($id)).'?tab=11');
			}else{
				return Redirect::to(route('cmscpanel.editHotel',array($id)).'?tab=2');
			}
		}catch(Exception $ex){
	
		}
	}
	
	public function chinh_sach(Request $request){
		$idhotel=$request->idhotelcs;
		Session::put('message','Cập nhật chính sách thành công');
		return Redirect::to(route('cmscpanel.editHotel',array($idhotel)).'?tab=3');
	}
	
	public function logout()
	{
		Session::put('admin_name',null);
		Session::put('email',null);
		Session::put('admin_id',null);
		return Redirect::to('/');
	}
	
	public function partner_logout(){
		Session::put('partner_fullname',null);
		Session::put('partner_email',null);
		Session::put('partner_id',null);
		return Redirect::to('/partnership/login');
	}
	
	public function thong_tin_ca_nhan(){
		return view('pages.partnerUserProfile');
	}
	
	public function dang_nhap(Request $request){
			$admin_email=$request->txtEmail;
			$admin_password=$request->txtPassword;//md5();
	
			$result=DB::table('usersf')->where('email',$admin_email)->where('password',$admin_password)->first();
			if($result){
			 Session::put('admin_name',$result->fullname);
			 Session::put('email',$result->email);
			 Session::put('admin_id',$result->id);
			 return Redirect::to('/voucher-du-lich');
			}else{
				Session::put('message','Tài khoản không đúng. Vui lòng thử lại');
				return Redirect::to('/signin');
			}
			
		}
	
	public function partner_login_get(){
		return view('pages.login_partner');	
	}
	
	public function location_list($slug){
		return view('pages.location_list');	
	}
	
	public function partner_login(Request $request){
		$partner_email=$request->txtEmail;
		$partner_password=$request->txtPassword;//md5();
	
		$result=DB::table('bravo_partner_members')->where('email',$partner_email)->where('password',$partner_password)->first();
		if($result){
		 Session::put('partner_fullname',$result->fullname);
		 Session::put('partner_email',$result->email);
		 Session::put('partner_id',$result->id);
		 return Redirect::to(route('home.cmscpanel'));
		}else{
			Session::put('message','Tài khoản không đúng. Vui lòng thử lại');
			return Redirect::to(route('partner.login'));
		}
	}
	
	public function partner_setpass(Request $request){
		$_token11=$request->token;
		$data=DB::table('bravo_partner_members')->where('token',$_token11)->first();
		if($data){
			if($data->status=='N'){
				if($request->txtPassword!=$request->txtRepassword){
					Session::put('message','Hai mật khẩu không khớp nhau. Vui lòng thử lại');
					return Redirect::to('vi/set-email?token='.$_token11);
				} else{
					DB::table('bravo_partner_members')->where('id',$data->id)->update(['password' => $request->txtPassword,'password_show' => $request->txtPassword]);
					Session::put('partner_fullname',$data->fullname);
					Session::put('partner_email',$data->email);
					Session::put('partner_id',$data->id);
					return Redirect::to('/vi/cmscpanel');
				}
			}else{
				return Redirect::to('/vi/partnership/login');
			}
		}else{
			Session::put('message','Tài khoản không tồn tại');
					return Redirect::to('vi/set-email?token='.$_token11);
		}
	}
	
	public function dang_ky_partnership(Request $request){
		try{
			$e=DB::table('bravo_partner_members')->where('email',$request->txtEmail)->get();
		if(count($e)>0){
			Session::put('message','Email đã được đăng ký. Vui lòng lựa chọn Email khác');
			return Redirect::to('/partnership/register');
			exit;
		}else{
				$partner_members=array();
				$partner_members["email"]=$request->txtEmail;
				$partner_members["fullname"]=$request->txtHovaTen;
				$partner_members["phone"]=$request->txtPhone;
				$partner_members["password"]='';
				$partner_members["password_show"]='';
				$partner_members["token"]=$request->_token;
				$partner_members["status"]='N';
				$partner_members["created_at"]=Carbon::now();
				$partner_members["updated_at"]=Carbon::now();
				DB::table('bravo_partner_members')->insert($partner_members);
				$toEmail=trim($request->txtEmail);
				
				Mail::send('Contact::emails.notification_partner', array('email'=>$toEmail, 'fullname'=>$partner_members["fullname"], 'token'=>$partner_members["token"]), function($message) use ($toEmail){
					$message->to($toEmail, 'hoabinhbooking.test')->cc('thao.mai@hoabinhtourist.com')->subject('[HOABINHBOOKNG.COM] Xác nhận địa chỉ email');
				});
				
				Session::put('message','InsertSuccefully');
				return Redirect::to('/partnership/confirm');
			}
		}catch(Exception $ex){
			echo $exception->getMessage();
		}
	}
	
	public function search(){
		$fullurl=url()->current();
		$adult=$_GET['adult'];
		$child=$_GET['child'];
		$kw=$_GET['kw'];
		$phong=$_GET['phong'];
		$t_end=$_GET['t-end'];
		$t_start=$_GET['t-start'];
		$min_price='0';
		$max_price='5000000';
		$pricefull='';
		$prices='';
		if(isset($_GET['price'])){
			//$price=$_GET['price'];
			$prices = explode("-",$_GET['price']);
			$pricefull='&price='.$_GET['price'];
			$min_price=str_replace(array(" đ",",","%20%C4%91"), array("","",""), $prices[0]);
			$max_price=str_replace(array(" đ",",","%20%C4%91"), array("","",""), $prices[1]);
			//dd($prices);
		}
		
		$urlfull=$fullurl.'?adult='.$adult.'&child='.$child.'&kw='.$kw.'&phong='.$phong.'&t-end='.$t_end.'&t-start='.$t_start;
		
		$query = $_GET['kw'];
		$all_location=DB::table('location')->where('title', 'LIKE', "%{$query}%")->orderby('id','asc')->get();
		$all_hotels=array();
		$arr=array(0);
		if(count($all_location)>0){
			foreach($all_location as $kl=>$vl){
				$arr[] = $vl->id;
			}
		}
		$all_hotels=DB::table('bravo_hotels')
		->whereIn('location_id', $arr)
		->orWhere('title', 'LIKE', "%{$query}%")
		->orderby('id','desc')->get();
		
		return view('pages.search',compact('all_hotels','urlfull','min_price','max_price'));
	}
	
	public function search_auto_drop(Request $request){
		$query=$request->id;
		$all_local=DB::table('bravo_hotels')->where('title', 'LIKE', "%{$query}%")->orderby('id','asc')->get();
		$str='';
		if(count($all_local)>0){
			$str.='<div class="contentautodrop"><ul>';
			foreach($all_local as $k=>$v){
				$u='fnValSelect(\''.$v->title.'\')';
				$str.='<li onclick="'.$u.'">'.$v->title.'</li>';
			}	
			$str.='</ul></div>';
		}
		echo $str;	
	}
	
	public function demo_f1(){
		$all=DB::table('location')->select('title')->orderby('id','asc')->get();
		return $all;
	}
	
	public function register(){
		return view('pages.register_partner');
	}
	
	public function tours(){
		return view('pages.tours');
	}
	public function tin_tuc(){
		$all_tintuc=DB::table('news')->where('fk_cat','2')->where('status','1')->orderBy('created_at','desc')->get();
		return view('pages.tintuc',compact('all_tintuc'));
	}
	
	public function cam_nang(){
		$all_camnang=DB::table('news')->where('fk_cat','1')->where('status','1')->orderBy('created_at','desc')->get();
		return view('pages.cam_nang',compact('all_camnang'));
	}
	public function tuyen_dung(){
		$data=DB::table('recruitment')->orderBy('id','desc')->get();
		return view('pages.tuyen_dung',compact('data'));
	}
	public function tuyen_dung_detail($slug){
		$data=DB::table('recruitment')->where('slug',$slug)->first();
		return view('pages.tuyen_dung_detail',compact('data'));
	}
	public function khach_san(){
		return view('pages.khach_san_list');
	}
	
	public function lien_he(){
		return view('pages.lien_he');
	}
	
}