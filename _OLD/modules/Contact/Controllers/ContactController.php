<?php
namespace Modules\Contact\Controllers;

use App\Helpers\ReCaptchaEngine;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Matrix\Exception;
use Modules\Contact\Emails\NotificationToAdmin;
use Modules\Contact\Emails\NotificationToCustomer;
use Modules\Contact\Models\Contact;
use Modules\Contact\Models\PartnerMembers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;
use Session;

class ContactController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [
            'page_title' => __("Contact Page")
        ];
        return view('Contact::index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'   => [
                'required',
                'max:255',
                'email'
            ],
            'phone'    => ['required'],
            'name'    => ['required'],
            'message' => ['required']
        ]);
        /**
         * Google ReCapcha
         */
        if(ReCaptchaEngine::isEnable()){
            $codeCapcha = $request->input('g-recaptcha-response');
            if(!$codeCapcha or !ReCaptchaEngine::verify($codeCapcha)){
                return redirect()->back()->with('error',__('Please verify the captcha'));
            }
        }
        $row = new Contact($request->input());
        $row->status = 'sent';
        if ($row->save()) {
            $this->sendEmail($row);
            return redirect()->back()->with('success', __('Thank you for contacting us! We will get back to you soon'));
        }
    }

    public function voucher_du_lich_gui_yeu_cau(Request $request){
        $data=array();
        $data["mau_voucher"]=$request->hdMauvoucher;
        $data["gia_tri_voucher"]=$request->hdGtvoucher;
        $data["fullname"]=$request->fullname;
        $data["phone"]=$request->phone;
        $data["email"]=$request->email;
        $data["special_request"]=$request->special_request;
        $data["code"]=rand();
        $data["status"]='A';
        $data["create_date"]=Carbon::now();
        DB::table('voucher_du_lich')->insert($data);
        return Redirect::to('/vi/confirm');
    }
    public function dang_nhap(Request $request){
        $admin_email=$request->txtEmail;
        $admin_password=$request->txtPassword;//md5();

        $result=DB::table('usersf')->where('email',$admin_email)->where('password',$admin_password)->first();
        if($result){
         Session::put('admin_name',$result->fullname);
         Session::put('email',$result->email);
         Session::put('admin_id',$result->id);
         return Redirect::to('/vi/voucher-du-lich');
        }else{
            Session::put('message','Tài khoản không đúng. Vui lòng thử lại');
            return Redirect::to('/vi/signin');
        }
        
    }

public function partner_login(Request $request){
    $partner_email=$request->txtEmail;
    $partner_password=$request->txtPassword;//md5();

    $result=DB::table('bravo_partner_members')->where('email',$partner_email)->where('password',$partner_password)->first();
    if($result){
     Session::put('partner_fullname',$result->fullname);
     Session::put('partner_email',$result->email);
     Session::put('partner_id',$result->id);
     return Redirect::to('/vi/cmscpanel');
    }else{
        Session::put('message','Tài khoản không đúng. Vui lòng thử lại');
        return Redirect::to('/vi/partnership/login');
    }
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
        return Redirect::to('/vi/partnership/login');
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
        //return Redirect::to('/vi/voucher-du-lich');
    }


    

    public function dang_ky_partnership(Request $request){
        try{
            $e=DB::table('bravo_partner_members')->where('email',$request->txtEmail)->get();
        if(count($e)>0){
            Session::put('message','Email đã được đăng ký. Vui lòng lựa chọn Email khác');
            return Redirect::to('/vi/partnership/register');
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
                $partner_members["create_at"]=Carbon::now();
                $partner_members["update_at"]=Carbon::now();
                DB::table('bravo_partner_members')->insert($partner_members);
                $toEmail=trim($request->txtEmail);
                /*
                echo '<pre>';
                print_r($toEmail);
                echo '</pre>';
                die();*/
                Mail::send('Contact::emails.notification_partner', array('email'=>$toEmail, 'fullname'=>$partner_members["fullname"], 'token'=>$partner_members["token"]), function($message) use ($toEmail){
                    $message->to($toEmail, 'HoabinhBooking.com')->cc('thao.mai@hoabinhtourist.com')->subject('[HOABINHBOOKNG.COM] Xác nhận địa chỉ email');
                });
                
                Session::put('message','InsertSuccefully');
                return Redirect::to('/vi/partnership/confirm');
            }
        }catch(Exception $ex){
            echo $exception->getMessage();
        }
    }

    public function parter_complate($id_hotel){
        $toEmail="thao.mai@hoabinhtourist.com";
        $link='https://hoabinhbooking.com/vi/cmscpanel/reviewHotel/'.$id_hotel.'?tab=1';
        Mail::send('Contact::emails.notificationtomanage', array('email'=>$toEmail,'link'=>$link,'id_hotel'=>$id_hotel), function($message) use ($toEmail){
            $message->to($toEmail, 'HoabinhBooking.com')->subject('[HOABINHBOOKNG.COM] Xác nhận địa chỉ email #'.rand());
        });
        
        Session::put('message2','Gửi yêu cầu thành công');
        return Redirect::to('/vi/cmscpanel/editHotel/'.$id_hotel.'?tab=1');
    }

    public function approval_hotel($id_hotel){
        DB::table('bravo_hotels')->where('id',$id_hotel)->update(['deleted_at' => null]);
        Session::put('message2','Xét duyệt thành công');
        return Redirect::to('/vi/cmscpanel/reviewHotel/'.$id_hotel.'?tab=1');
    }

    public function chinh_sach(Request $request){
        $idhotel=$request->idhotelcs;
        Session::put('message','Cập nhật chính sách thành công');
        return Redirect::to('/vi/cmscpanel/editHotel/'.$idhotel.'?tab=3');
    }

    public function dr(){
        // $SECURE_SECRET = "secure-hash-secret";
        $SECURE_SECRET = "E89978A34FCD1E64B44DB6F063068771";
        // get and remove the vpc_TxnResponseCode code from the response fields as we
        // do not want to include this field in the hash calculation
        $vpc_Txn_Secure_Hash = $_GET["vpc_SecureHash"];
        $vpc_MerchTxnRef = $_GET["vpc_MerchTxnRef"];
        $vpc_AcqResponseCode = $_GET["vpc_AcqResponseCode"];
        unset($_GET["vpc_SecureHash"]);
        // set a flag to indicate if hash has been validated
        $errorExists = false;

        if (strlen($SECURE_SECRET) > 0 && $_GET["vpc_TxnResponseCode"] != "7" && $_GET["vpc_TxnResponseCode"] != "No Value Returned") {

            ksort($_GET);
            //$md5HashData = $SECURE_SECRET;
            //khởi tạo chuỗi mã hóa rỗng
            $md5HashData = "";
            // sort all the incoming vpc response fields and leave out any with no value
            foreach ($_GET as $key => $value) {
        //        if ($key != "vpc_SecureHash" or strlen($value) > 0) {
        //            $md5HashData .= $value;
        //        }
        //      chỉ lấy các tham số bắt đầu bằng "vpc_" hoặc "user_" và khác trống và không phải chuỗi hash code trả về
                if ($key != "vpc_SecureHash" && (strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
                    $md5HashData .= $key . "=" . $value . "&";
                }
            }
        //  Xóa dấu & thừa cuối chuỗi dữ liệu
            $md5HashData = rtrim($md5HashData, "&");
        
        //    if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper ( md5 ( $md5HashData ) )) {
        //    Thay hàm tạo chuỗi mã hóa
            if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$SECURE_SECRET)))) {
                // Secure Hash validation succeeded, add a data field to be displayed
                // later.
                $hashValidated = "CORRECT";
            } else {
                // Secure Hash validation failed, add a data field to be displayed
                // later.
                $hashValidated = "INVALID HASH";
            }
        } else {
            // Secure Hash was not validated, add a data field to be displayed later.
            $hashValidated = "INVALID HASH";
        }

        // Standard Receipt Data
        $amount = null2unknown($_GET["vpc_Amount"]);
        $locale = null2unknown($_GET["vpc_Locale"]);
        $batchNo = null2unknown($_GET["vpc_BatchNo"]);
        $command = null2unknown($_GET["vpc_Command"]);
        $message = null2unknown($_GET["vpc_Message"]);
        $version = null2unknown($_GET["vpc_Version"]);
        $cardType = null2unknown($_GET["vpc_Card"]);
        $orderInfo = null2unknown($_GET["vpc_OrderInfo"]);
        $receiptNo = null2unknown($_GET["vpc_ReceiptNo"]);
        $merchantID = null2unknown($_GET["vpc_Merchant"]);
        //$authorizeID = null2unknown($_GET["vpc_AuthorizeId"]);
        $merchTxnRef = null2unknown($_GET["vpc_MerchTxnRef"]);
        $transactionNo = null2unknown($_GET["vpc_TransactionNo"]);
        $acqResponseCode = null2unknown($_GET["vpc_AcqResponseCode"]);
        $txnResponseCode = null2unknown($_GET["vpc_TxnResponseCode"]);
        // 3-D Secure Data
        $verType = array_key_exists("vpc_VerType", $_GET) ? $_GET["vpc_VerType"] : "No Value Returned";
        $verStatus = array_key_exists("vpc_VerStatus", $_GET) ? $_GET["vpc_VerStatus"] : "No Value Returned";
        $token = array_key_exists("vpc_VerToken", $_GET) ? $_GET["vpc_VerToken"] : "No Value Returned";
        $verSecurLevel = array_key_exists("vpc_VerSecurityLevel", $_GET) ? $_GET["vpc_VerSecurityLevel"] : "No Value Returned";
        $enrolled = array_key_exists("vpc_3DSenrolled", $_GET) ? $_GET["vpc_3DSenrolled"] : "No Value Returned";
        $xid = array_key_exists("vpc_3DSXID", $_GET) ? $_GET["vpc_3DSXID"] : "No Value Returned";
        $acqECI = array_key_exists("vpc_3DSECI", $_GET) ? $_GET["vpc_3DSECI"] : "No Value Returned";
        $authStatus = array_key_exists("vpc_3DSstatus", $_GET) ? $_GET["vpc_3DSstatus"] : "No Value Returned";

        // *******************
        // END OF MAIN PROGRAM
        // *******************

        // FINISH TRANSACTION - Process the VPC Response Data
        // =====================================================
        // For the purposes of demonstration, we simply display the Result fields on a
        // web page.

        // Show 'Error' in title if an error condition
        $errorTxt = "";

        // Show this page as an error page if vpc_TxnResponseCode equals '7'
        if ($txnResponseCode == "7" || $txnResponseCode == "No Value Returned" || $errorExists) {
            $errorTxt = "Error ";
        }

        // This is the display title for 'Receipt' page 
        $title = $_GET["Title"];

        // The URL link for the receipt to do another transaction.
        // Note: This is ONLY used for this example and is not required for 
        // production code. You would hard code your own URL into your application
        // to allow customers to try another transaction.
        //TK//$againLink = URLDecode($_GET["AgainLink"]);


        $transStatus = "";
        if($hashValidated=="CORRECT" && $txnResponseCode=="0"){
            $transStatus = "Payment Success!";
        }elseif ($hashValidated=="INVALID HASH" && $txnResponseCode=="0"){
            $transStatus = "Pendding";
        }else {
            $transStatus = "Payment Failed";
        }

    }

    public function booking_room(Request $request){
        $fee=$_POST['price'];
        $_POST['vpc_OrderInfo']=rand();
		$_POST['Title']="VPC 3-Party";
		$_POST['virtualPaymentClientURL']="https://onepay.vn/vpcpay/vpcpay.op";
		$_POST['vpc_Merchant']="HOABINHTOUR2";
		$_POST['vpc_AccessCode']="7763F5C5";
		$_POST['vpc_MerchTxnRef']=date('YmdHis').rand();
		$_POST['vpc_ReturnURL']="https://hoabinhbooking.com/vi/dr";//https://iwamsn.ac.vn/handlers/dr.php
		$_POST['vpc_Version']="2";
		$_POST['vpc_Command']="pay";
		$_POST['vpc_Locale']="en";
		$_POST['vpc_TicketNo']=$_SERVER['REMOTE_ADDR'];
		$_POST['vpc_SHIP_Street01']="39A Ngo Quyen";
		$_POST['vpc_SHIP_Provice']="Hoan Kiem";
		$_POST['vpc_SHIP_City']="Ha Noi";
		$_POST['vpc_SHIP_Country']="Viet Nam";
		$_POST['vpc_Customer_Phone']="0914929911";
		$_POST['vpc_Customer_Email']="webmaster@hoabinhtourist.com";
		$_POST['vpc_Customer_Id']="thanhls";

		/*if($_POST['pay']=='ONLINE'){
			$_POST['vpc_Amount'] = ($fee+($fee*5)/100)*100;
		}else{
			$_POST['vpc_Amount']=$fee*100;
		}*/
		$_POST['vpc_Amount']=$fee*100;


        $data=array();
        $data['fullname']=$request->txtHoten;
        $data['phone']=$request->txtPhone;
        $data['email']=$request->txtEmail;
        $data['request_spec']=$request->y1.' | '.$request->y2;
        $data['request_other']=$request->rq_other;
        $data['ngay_nhan_phong']='';
        $data['ngay_tra_phong']='';
        $data['so_dem']='';
        $data['payment_method']=$request->pay;
        $data['vpc_OrderInfo']=$_POST['vpc_OrderInfo'];
        $data['txn']='-1';
        $data['response']='';
        $data['re_email']='N';
        $data['status']='A';
        $data['create_at']=Carbon::now();
        $data['update_at']=Carbon::now();
        $id = DB::table('bravo_payment')->insertGetId($data);

        if($request->pay=='Online'){
            //Version 2.0

        // *********************
        // START OF MAIN PROGRAM
        // *********************

        // Define Constants
        // ----------------
        // This is secret for encoding the MD5 hash
        // This secret will vary from merchant to merchant
        // To not create a secure hash, let SECURE_SECRET be an empty string - ""
        // $SECURE_SECRET = "secure-hash-secret";
        $SECURE_SECRET = "E89978A34FCD1E64B44DB6F063068771";

        // add the start of the vpcURL querystring parameters
        $vpcURL = $_POST["virtualPaymentClientURL"] . "?";

        // Remove the Virtual Payment Client URL from the parameter hash as we
        // do not want to send these fields to the Virtual Payment Client.
        unset($_POST["virtualPaymentClientURL"]);

        // The URL link for the receipt to do another transaction.
        // Note: This is ONLY used for this example and is not required for
        // production code. You would hard code your own URL into your application.

        // Get and URL Encode the AgainLink. Add the AgainLink to the array
        // Shows how a user field (such as application SessionIDs) could be added
        $_POST['AgainLink']=urlencode($_SERVER['HTTP_REFERER']);
        //$_POST['AgainLink']=urlencode($_SERVER['HTTP_REFERER']);
        // Create the request to the Virtual Payment Client which is a URL encoded GET
        // request. Since we are looping through all the data we may as well sort it in
        // case we want to create a secure hash and add it to the VPC data if the
        // merchant secret has been provided.
        //$md5HashData = $SECURE_SECRET; Khởi tạo chuỗi dữ liệu mã hóa trống
        $md5HashData = "";

        ksort ($_POST);

        // set a parameter to show the first pair in the URL
        $appendAmp = 0;

        foreach($_POST as $key => $value) {

            // create the md5 input and URL leaving out any fields that have no value
            if (strlen($value) > 0) {

                // this ensures the first paramter of the URL is preceded by the '?' char
                if ($appendAmp == 0) {
                    $vpcURL .= urlencode($key) . '=' . urlencode($value);
                    $appendAmp = 1;
                } else {
                    $vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
                }
                //$md5HashData .= $value; sử dụng cả tên và giá trị tham số để mã hóa
                if ((strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
                    $md5HashData .= $key . "=" . $value . "&";
                }
            }
        }
        //xóa ký tự & ở thừa ở cuối chuỗi dữ liệu mã hóa
        $md5HashData = rtrim($md5HashData, "&");
        // Create the secure hash and append it to the Virtual Payment Client Data if
        // the merchant secret has been provided.
        if (strlen($SECURE_SECRET) > 0) {
            //$vpcURL .= "&vpc_SecureHash=" . strtoupper(md5($md5HashData));
            // Thay hàm mã hóa dữ liệu
            $vpcURL .= "&vpc_SecureHash=" . strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$SECURE_SECRET)));
        }

        // FINISH TRANSACTION - Redirect the customers using the Digital Order
        // ===================================================================
        header("Location: ".$vpcURL);

        // *******************
        // END OF MAIN PROGRAM
        // *******************



        }else{
            $toEmail=$data['email'];
            Mail::send('Contact::emails.notification_payment', array('email'=>$toEmail,'fullname'=>$data['fullname'],'vpc_OrderInfo'=>$data['vpc_OrderInfo'],'pay'=>$data['payment_method']), function($message) use ($toEmail){
            $message->to($toEmail, 'HoabinhBooking.com')->subject('[HOABINHBOOKNG.COM] Xác nhận trạng thái đặt phòng ở khách sạn #'.rand());
        });
            return Redirect::to('/vi/confirm/hotel/'.$id);
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
            return Redirect::to('/vi/cmscpanel/editHotel/'.$id);

        }catch(Exception $ex){

        }
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
        $data['update_at']=Carbon::now();
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
            return Redirect::to('/vi/cmscpanel/public/hotel/'.$hotel_Id.'?tab=13');
        }else{
            return Redirect::to('/vi/cmscpanel/editHotel/'.$hotel_Id.'?tab=4');
        }
    }

    public function create_room_partnership(Request $request){
        

        $data=array();
        $hotel_Id=$request->hdhotelroom;
        $data['title']=$request->title;
        $data['content']=$request->content;
        
        $get_image = $request->file('fture_image');
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move(public_path('uploads/img'),$new_image);

            $data_imgs=array();
            $data_imgs['file_name']=$new_image;
            $data_imgs['file_path']='public/uploads/img/'.$new_image;
            $data_imgs['file_size']='';
            $data_imgs['file_type']='';
            $data_imgs['file_extension']='';
            $data_imgs['create_user']=-1;
            $data_imgs['update_user']=Session::get('partner_id');
            $data_imgs['deleted_at']=null;
            $data_imgs['app_id']=null;
            $data_imgs['app_user_id']=null;
            $data_imgs['file_width']=null;
            $data_imgs['file_height']=null;
            $data_imgs['created_at']=Carbon::now();
            $data_imgs['updated_at']=Carbon::now();
            
            $id_media_file = DB::table('media_files')->insertGetId($data_imgs);
            $data['image_id']=$id_media_file;
        }else{
            $data['image_id']=NULL;
        }

        $data['gallery']='';
        $data['video']='';
        $price11=str_replace(',','',$request->price);
        $data['price']=$price11;
        $data['parent_id']=$request->hdhotelroom;
        $data['number']=$request->number;
        $data['beds']=$request->beds;
        $data['bed_type']=$request->bed_type;
        $data['view']=$request->view;
        $data['size']=$request->size;
        $data['adults']=$request->adults;
        $data['children']=$request->children;
        $data['status']=$request->status;
        $data['create_user']=-1;
        $data['update_user']=Session::get('partner_id');
        $data['deleted_at']=NULL;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        DB::table('bravo_hotel_rooms')->insert($data);
        return Redirect::to('/vi/cmscpanel/editHotel/'.$hotel_Id.'?tab=4');
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
        DB::table('bravo_hotel_room_calendars')->where('id',$_IDRoom)->update(['content' => $_Info,'target_id'=>$_IdHotel,'fromDate'=>$checkin,'toDate'=>$checkout,'updated_at'=>Carbon::now()]);
        echo 'Đã lưu thành công';
    }

    public function update_room_partnership(Request $request){
        /*$hotel_Id=$request->_IDHotel;
        $data['title']=$request->title;
        $data['content']=$request->content;
        
        $get_image = $request->file('fture_image');
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move(public_path('uploads/img'),$new_image);

            $data_imgs=array();
            $data_imgs['file_name']=$new_image;
            $data_imgs['file_path']='public/uploads/img/'.$new_image;
            $data_imgs['file_size']='';
            $data_imgs['file_type']='';
            $data_imgs['file_extension']='';
            $data_imgs['create_user']=0;
            $data_imgs['update_user']=0;
            $data_imgs['deleted_at']=null;
            $data_imgs['app_id']=null;
            $data_imgs['app_user_id']=null;
            $data_imgs['file_width']=null;
            $data_imgs['file_height']=null;
            $data_imgs['created_at']=Carbon::now();
            $data_imgs['updated_at']=Carbon::now();
            $id_media_file = DB::table('media_files')->insertGetId($data_imgs);
            $data['image_id']=$id_media_file;
        }else{
            $data['image_id']=$request->image_id;
        }

        $data['gallery']=$request->gallery;
        $data['video']=$request->video;
        $data['price']=$request->price;
        $data['parent_id']=$hotel_Id;
        $data['number']=$request->number;
        $data['beds']=$request->beds;
        $data['bed_type']=$request->bed_type;
        $data['view']=$request->view;
        $data['size']=$request->size;
        $data['adults']=$request->adults;
        $data['children']=$request->children;
        $data['status']=$request->status;
        $data['create_user']=-1;
        $data['update_user']=Session::get('partner_id');
        $data['deleted_at']=NULL;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        DB::table('bravo_hotel_rooms')->where('id',$request->id)->update($data);*/
        $hotel_Id=$request->hotel_id;
        $data=array();
        $data['hotel_id']=$request->hotel_id;
        $data['code']=$request->code;
        $data['title']=$request->title;
        $data['area']=$request->size;
        $data['view']=$request->view;
        $data['bed_type']=$request->bed_type;
        $data['bed_num']=$request->beds;
        $data['adults']=$request->adults;
        $data['children']=$request->children;
        $data['user_id']=Session::get('partner_id');
        $data['created_at']=$request->created_at;
        $data['update_at']=Carbon::now();
        $data['status']='A';
        DB::table('bravo_hotel_room_list_calendars')->where('id',$request->id)->update($data);
        Session::put('message','Update thành công');
        
        if($request->room_status=='publish'){
            return Redirect::to('/vi/cmscpanel/public/hotel/'.$hotel_Id.'?tab=13');
        }else{
            return Redirect::to('/vi/cmscpanel/editHotel/'.$hotel_Id.'?tab=4');
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
            $price_2=str_replace(',','',$request->price);
            $data['price']=$price_2;
            $data['check_in_time']=$request->check_in_time;
            $data['check_out_time']=$request->check_out_time;
            $data['allow_full_day']=NULL;
            $sale_price_2=str_replace(',','',$request->sale_price);
            $data['sale_price']=$sale_price_2;
            $data['status']=$request->r_status;
            $data['create_user']=-1;
            $data['update_user']=Session::get('partner_id');
            $data['deleted_at']=NULL;
            $data['created_at']=Carbon::now();
            $data['updated_at']=Carbon::now();
            
            DB::table('bravo_hotels')->where('id',$id)->update($data);
            Session::put('message','Cập nhật thông tin khách sạn thành công');
            if($request->r_status=='publish'){
                return Redirect::to('/vi/cmscpanel/public/hotel/'.$id.'?tab=11');
            }else{
                return Redirect::to('/vi/cmscpanel/editHotel/'.$id.'?tab=2');
            }
            

        }catch(Exception $ex){

        }
    }

    public function partner_room_delete($hotel_id,$id){
        /*DB::table('bravo_hotel_rooms')->where('id',$id)->delete();*/
        DB::table('bravo_hotel_room_list_calendars')->where('id',$id)->delete();
        DB::table('bravo_hotel_room_calendars')->where('target_id',$hotel_id)->where('fk_list_id',$id)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('/vi/cmscpanel/editHotel/'.$hotel_id.'?tab=4');
    }

    public function partner_public_room_delete($hotel_id,$id){
        /*DB::table('bravo_hotel_rooms')->where('id',$id)->delete();*/
        DB::table('bravo_hotel_room_list_calendars')->where('id',$id)->delete();
        DB::table('bravo_hotel_room_calendars')->where('target_id',$hotel_id)->where('fk_list_id',$id)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('/vi/cmscpanel/public/hotel/'.$hotel_id.'?tab=13');
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
                        $data['file_path']='public/uploads/img/'.$new_image;
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
                        return Redirect::to('/vi/cmscpanel/public/hotel/'.$request->id_hotel2.'?tab=12');
                    }else{
                        return Redirect::to('/vi/cmscpanel/editHotel/'.$request->id_hotel2.'?tab=2');
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
            return Redirect::to('/vi/cmscpanel/public/hotel/'.$idHotel.'?tab=12');
        }else{
            //return Redirect::to('/vi/cmscpanel/public/hotel/'.$idHotel.'?tab=12');
            return Redirect::to('/vi/cmscpanel/editHotel/'.$idHotel.'?tab=2');
        }
        
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
            $data['file_path']='public/uploads/img/'.$new_image;
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
                return Redirect::to('/vi/cmscpanel/public/hotel/'.$request->id_hotel_avatar.'?tab=12');
            }else{
                return Redirect::to('/vi/cmscpanel/editHotel/'.$request->id_hotel_avatar.'?tab=2');
            }
            
        }else{ }
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
            $data['file_path']='public/uploads/img/'.$new_image;
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
            return Redirect::to('/vi/cmscpanel/editHotel/'.$request->id_hotel.'?tab=2');
            
        }else{ }
    }

    protected function sendEmail($contact){
        if($admin_email = setting_item('admin_email')){
            try {
                Mail::to('lethanh376@gmail.com')->send(new NotificationToAdmin($contact));//admin_email
            }catch (Exception $exception){
                Log::warning("Contact Send Mail: ".$exception->getMessage());
            }
        }
    }

    public function t(){
        return new NotificationToAdmin(Contact::find(1));
    }
}
