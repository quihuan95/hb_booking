<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class RecruitmentController extends Controller
{
	//
	public function list(){
		$all_recruitment=DB::table("recruitment")->orderBy("id","desc")->get();
		return view("admin.recruitment.list",compact("all_recruitment"));
	}
	
	public function insert(){
		return view("admin.recruitment.add");
	}
	public function edit($id){
		$data=DB::table('recruitment')->where('id',$id)->first();
		return view("admin.recruitment.edit",compact('data'));
	}
	public function create(Request $request){
		$data=array();
		$data['title']=$request->name;
		$data['slug']=$request->slug;
		$data['deadline']=$request->deadline;
		$data['salary']=$request->salary;
		$data['experience']=$request->experience;
		$data['degree']=$request->degree;
		$data['quantity']=$request->quantity;
		$data['industry_group']=$request->industry_group;
		$data['work_location']=$request->work_location;
		$data['company']=$request->company;
		$data['position']=$request->position;
		$data['form_of_work']=$request->form_of_work;
		$data['gender']=$request->gender;
		$data['age']=$request->age;
		$data['desc1']=$request->detailnews;
		$data['download_file']="";
		$data['status']="A";
		$data['created_at']=Carbon::Now();
		DB::table('recruitment')->insert($data);
		Session::put('message','Thêm mới thành công');
		return Redirect::to(route('admin.rec.list'));
	}
	
	public function update(Request $request){
		$data=array();
		$data['title']=$request->name;
		$data['slug']=$request->slug;
		$data['deadline']=$request->deadline;
		$data['salary']=$request->salary;
		$data['experience']=$request->experience;
		$data['degree']=$request->degree;
		$data['quantity']=$request->quantity;
		$data['industry_group']=$request->industry_group;
		$data['work_location']=$request->work_location;
		$data['company']=$request->company;
		$data['position']=$request->position;
		$data['form_of_work']=$request->form_of_work;
		$data['gender']=$request->gender;
		$data['age']=$request->age;
		$data['desc1']=$request->detailnews;
		$data['download_file']="";
		$data['status']="A";
		$data['created_at']=$request->created_at;
		DB::table('recruitment')->where("id",$request->id)->update($data);
		Session::put('message','Chỉnh / sửa thành công');
		return Redirect::to(route('admin.rec.list'));
	}
	
	public function delete($news_id){
		DB::table('recruitment')->where('id',$news_id)->delete();
		Session::put('message','Xóa thành công');
		return Redirect::to(route('admin.rec.list'));
	}
}
