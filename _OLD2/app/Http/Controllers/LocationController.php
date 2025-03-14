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


class LocationController extends Controller
{
	public function location_list(){
		$all_location=DB::table('location')->where('status',"A")->orderBy('orders','asc')->get();
		$all_location_right=DB::table('location')->orderBy('orders','asc')->get();
		return view('admin.location.list',compact('all_location','all_location_right'));
	}
	public function location_postcreate(Request $request){
		$data=array();        
		$data["parent_id"]=$request->parent_id;
		$data["title"]=$request->name;
		$data["slug"]=$request->slug;
		$data["desception"]=$request->url_redirect;
		$data["orders"]=$request->orders;
		$data["status"]="A";
		$data["created_at"]=Carbon::now();
		
		DB::table('location')->insert($data);
		Session::put('message','Thêm mới thành công');
		return Redirect::to(route('admin.location.list'));
	}
}