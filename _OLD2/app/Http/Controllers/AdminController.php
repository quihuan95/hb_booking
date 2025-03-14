<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
	public function index(){
		return view('admin.admin_login');
	}
	public function show_dashboard(){
		return view('admin.dashboard');
	}

	public function email_list(){
		$list=DB::table("email_promotion")->orderBy("id","desc")->get();
		return view('admin.emails.list',compact('list'));
	}

	public function dashboard(Request $request){
		$admin_email=$request->username;
		$admin_password=md5($request->password);

		$result=DB::table('admins')->where('email',$admin_email)->where('password',$admin_password)->first();
		if($result){
		 $datahistory['account']=$result->name;
		 $datahistory['signin']=Carbon::now();
		 DB::table('history')->insert($datahistory);   

		 Session::put('admin_name',$result->name);
		 Session::put('admin_id',$result->id);
		 return Redirect::to('/admin/dashboard');
		}else{
			Session::put('message','Tài khoản không đúng. Vui lòng thử lại');
			return Redirect::to('/admin/login');
		}
	}

	public function logout(){
		$datahistory['account']=Session::get('admin_name');
		$datahistory['signout']=Carbon::now();
		 DB::table('history')->insert($datahistory);   
		Session::put('admin_name',null);
		Session::put('admin_id',null);
		return Redirect::to('/admin/login');
	}

	/* Quản lý tài khoản người dùng */
	public function account_list(){
		$all_user=DB::table('admins')->orderBy('id','desc')->get();
		return view('admin.user.list',compact('all_user'));
	}

	public function account_create(){
		return view('admin.user.add');
	}

	public function account_edit($id){
		$all_user=DB::table('admins')->where('id',$id)->first();
		return view('admin.user.edit',compact('all_user'));
	}

	public function postaccountcreate(Request $request){
		$data=array();
		$data["name"]=$request->hoten;
		$data["email"]=$request->email;
		$data["password"]=md5($request->re_password);
		$data["display_name"]=$request->re_password;
		$data["gender"]=$request->gender;
		$data["birthday"]=$request->birthday;
		$data["roles"]=$request->roles;
		$data["remember_token"]=$request->_token;
		$data["created_at"]=Carbon::now();
		$data["updated_at"]=Carbon::now();
		DB::table('admins')->insert($data);
		Session::put('message','Thêm mới tài khoản thành công');
		return Redirect::to(route('admin.account.list'));
	}

	public function postaccountupdate(Request $request){
		$data=array();
		$data["name"]=$request->hoten;
		$data["email"]=$request->email;
		$data["password"]=md5($request->re_password);
		$data["display_name"]=$request->re_password;
		$data["gender"]=$request->gender;
		$data["birthday"]=$request->birthday;
		$data["roles"]=$request->roles;
		$data["remember_token"]=$request->_token;
		$data["created_at"]=Carbon::now();
		$data["updated_at"]=Carbon::now();
		DB::table('admins')->where('id',$request->id)->update($data);
		Session::put('message','Cập nhật tài khoản thành công');
		return Redirect::to(route('admin.account.list'));
	}

	public function account_delete($id){
		DB::table('admins')->where('id',$id)->delete();
		Session::put('message','Xóa thành công');
		return Redirect::to(route('admin.account.list'));
	}

	/* Quản lý lịch sử người dùng đăng nhập */
	public function history_list(){
		$all_history=DB::table('history')->orderBy('id','desc')->get();
		return view('admin.history.list',compact('all_history'));
	}

	/* Công khai tiến độ công việc */
	public function cktdcv_update(){
		return view('admin.history.cktdcv');
	}
}
