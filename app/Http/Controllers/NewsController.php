<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Models\News;

class NewsController extends Controller
{
	//
	public function index(){
		$all_news=DB::table("news")->where('fk_cat','1')->orderBy("created_at","desc")->paginate(12);;
		$config=DB::table('config')->where('status','A')->orderBy('id','desc')->first();
		$title='Tin tức đầu tư';
		$canonical=url()->current();
		$og_image='frontend/css/images/logomain.png';
		$keywords='tin tuc, tin tuc dau tu';
		$description='Tin tức đầu tư';

		return view('pages.news_cate',compact('all_news','title','canonical','og_image','keywords','description','config'));
	}

	public function tin_tuc(){
		$config=DB::table('config')->where('status','A')->orderBy('id','desc')->first();
		$title='Tin tức';
		$canonical=url()->current();
		$og_image='frontend/css/images/logomain.png';
		$keywords='';
		$description='Tin tức';
		/* Tin tức bên phải */
		$newsdesc=DB::table('news')->whereIn("fk_cat",array(1,6,10,2,29,35,31))->take(6)->orderBy('id','desc')->get();
		/* End */
		/* Tin tức mới nhất */
		$news_latest=DB::table('news')->take(6)->orderBy('viewnum','desc')->where('status','1')->get();
		/* End */
		/* Hoạt động của hội */
		$cat_re=DB::table('CategoryNewsRelationship')->where('cats_id','2')->get();
		$arr=array();
		$all_news=array();
		if(!empty($cat_re)){
			foreach($cat_re as $k => $v) {
				   $arr[] = $v->news_id;
			}
		}
		if(!empty($arr)){
			$all_news=DB::table("news")->whereIn('id',$arr)->where('status','1')->orderBy("created_at","desc")->paginate(12);
		}
		/* End */

		return view('pages.tin_tuc',compact('all_news','newsdesc','news_latest','title','canonical','og_image','keywords','description','config'));
	}

	

	public function uploadSubmit(Request $request)
	{
		// kiểm tra có files sẽ xử lý
		if($request->hasFile('photos')) {
			$allowedfileExtension=['jpg','jpeg','png','pdf'];
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
				foreach ($request->photos as $photo) {
					//$filename = $photo->store('photos');
					//$filename = $photo->storeAs('photos', $photo->getClientOriginalName());
					$get_name_image = $photo->getClientOriginalName();
					$name_image = current(explode('.',$get_name_image));
					$new_image =  $name_image.'-'.rand(0,99).'.'.$photo->getClientOriginalExtension();
					$photo->move('public/userfiles/files',$new_image);
				}
				Session::put('message','Upload hình ảnh thành công');
				return Redirect::to(route('uploads.file'));

			} else {
				//echo "Falied to upload. Only accept jpg, png photos.";
				Session::put('message','Falied to upload. Only accept jpg, png photos.');
				return Redirect::to(route('uploads.file'));
			}
		}
	}

	
	public function news_details($slug){
		$all_news=DB::table('news')->where("slug",$slug)->first();
		$config=DB::table('config')->where('status','A')->orderBy('id','desc')->first();
		$news_catalog=DB::table('news_catalog')->where('id',$all_news->fk_cat)->where('status','1')->orderBy('id','desc')->first();
		
		if(!empty($all_news)){
			$all_news_re=DB::table('news')->where("fk_cat",$all_news->fk_cat)->take(20)->orderBy('id','desc')->get();
			$title=$all_news->meta_title==''?$all_news->title:$all_news->meta_title;
			$canonical=url()->current();
			$og_image=$all_news->picture;
			$keywords=$all_news->meta_keywords;
			$description=$all_news->meta_desc==''?$all_news->title:$all_news->meta_desc;
			$view_num=$all_news->viewnum+1;
			DB::table('news')->where('id',$all_news->id)->update(['viewnum' => $view_num]);
			return view('pages.news_details',compact('all_news','all_news_re','news_catalog','title','canonical','og_image','keywords','description','config'));
		}else{
			return Redirect::to('/');
		}

	}


	public function news_categories($slug){
		$cat=DB::table("news_catalog")->where('slug',$slug)->first();
		$config=DB::table('config')->where('status','A')->orderBy('id','desc')->first();
		/* Config */
		$title=$cat->title;
		$canonical=url()->current();
		$og_image='frontend/css/images/Logo@2x@2x.png';
		$keywords='tin tuc, tin noi bo vasel, tin trong nuoc, tin quoc te,'.$cat->title;
		$description=$cat->title." | Hòa Bình Booking";
		/* End */

		/* Tin tức bên phải */
		$newsdesc=DB::table('news')->whereIn("fk_cat",array(1,6,10,2,29,35,31))->take(6)->orderBy('id','desc')->get();
		/* End */
		/* Tin tức mới nhất */
		$news_latest=DB::table('news')->take(6)->orderBy('viewnum','desc')->where('status','1')->get();
		/* End */

		$cat_re=DB::table("CategoryNewsRelationship")->where('cats_id',$cat->id)->get();
		$arr=array();
		$all_news=array();
		$arr[]=$cat->id;
		if(!empty($cat_re)){
			foreach($cat_re as $k => $v) {
				   $arr[] = $v->news_id;
			}
		}

		if(!empty($arr)){
			$all_news=DB::table("news")->whereIn('id',$arr)->orderBy("created_at","desc")->paginate(12);
		}



		return view('pages.news_categories',compact('all_news','cat','newsdesc','title','canonical','news_latest','og_image','keywords','description','config'));

	}

	public function news_edit($news_id){
		$all_news=DB::table('news')->where("id",$news_id)->first();
		$danhmuctin=DB::table('news_catalog')->orderBy('position', 'asc')->get();
		$danhmuctin22=DB::table('news_catalog')->orderBy('position', 'asc')->get();
		$news_re=DB::table('CategoryNewsRelationship')->where('news_id',$news_id)->get();
		return view("admin.news.edit",compact("all_news","danhmuctin","news_re","danhmuctin22"));
	}

	public function CatnewsEdit($id){
		$all_menus_select=DB::table('news_catalog')->orderBy('position', 'asc')->get();
		$onecatnews=DB::table('news_catalog')->where('id',$id)->first();
		return view('admin.news.catnewsedit',compact('onecatnews','all_menus_select'));
	}
	public function catnews_update(Request $request){
		$data=array();
		$data['parent_id']=$request->category==null?0:$request->category;
		$data['title']=$request->name;
		$data['slug']=$request->slug;
		$data['desception']=$request->desc;
		$data['rel']=$request->rel;
		$data['position']=$request->thutu;
		$data['status']=$request->status;
		$data['created_at']=$request->created_at;
		$data['updated_at']=Carbon::now();
		DB::table('news_catalog')->where('id',$request->id)->update($data);
		Session::put('message','Cập nhật danh mục tin tức thành công');
		return Redirect::to(route('admin.catnews.list'));
	}

	public function listmenu(){
		$all_news=DB::table('news')->orderBy('id', 'desc')->paginate(50);
		return view('admin.news.list',compact('all_news'));
	}

	public function insert(){
		$danhmuctin=DB::table('news_catalog')->orderBy('position', 'asc')->get();
		$danhmuctin22=DB::table('news_catalog')->orderBy('position', 'asc')->get();
		return view('admin.news.add',compact('danhmuctin','danhmuctin22'));
	}

	public function danh_muc_tin($slug){
		$list_cat=DB::table("news_catalog")->orderBy("position","asc")->get();
		$list_cat_items=DB::table("news_catalog")->where('slug',$slug)->first();

		$config=DB::table('config')->where('status','A')->orderBy('id','desc')->first();
		$title=$list_cat_items->title;
		$canonical=url()->current();
		$og_image='https://hoabinhairlines.vn/frontend/css/images/hoabinh-airlines-logo.png';
		$keywords='';
		$description=$list_cat_items->title;

		return view("pages.danhmuctin",compact('list_cat','list_cat_items','title','canonical','og_image','keywords','description','config'));
	}

	public function ListcatNews(){
		$all_cats=DB::table('news_catalog')->orderBy('position', 'asc')->get();
		$all_cats02=DB::table('news_catalog')->orderBy('position', 'asc')->get();
		return view('admin.news.list_cat',compact('all_cats','all_cats02'));
	}

	public function create(Request $request){
	   
		$news=new News();
		$news->member_id=1;
		$news->fk_cat=$request->danhmuctin;
		$news->title=$request->name;
		$news->slug=$request->slug;
		$news->news_desc=$request->desc;
		$news->news_content=$request->detailnews;
		/*
		$get_image = $request->file('image');
		if($get_image){
			$get_name_image = $get_image->getClientOriginalName();
			$name_image = current(explode('.',$get_name_image));
			$new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
			$get_image->move('uploads/news',$new_image);
			$news->picture= $new_image;
		}else{
			$news->picture= '';
		}*/
		$news->picture= $request->filepath;
		$news->picdesc='';
		$news->viewnum=1;
		$news->meta_title=$request->name_seo;
		$news->meta_desc=$request->desc_seo;
		$news->meta_keywords=$request->keywords_seo;
		$news->source=$request->nguontin;
		$news->news_special=0;
		$news->news_featured=$request->hoivien;
		$news->order_sort=$request->orders;
		$news->status=$request->status;
		$news->created_at=Carbon::now();
		$news->updated_at=Carbon::now();
		$news->save();
		$news->categorynews_relationship($news->id,$request->term_id,'add');
		//$news->fnSendNocation($news->id);
		Session::put('message','Thêm mới tin tức thành công');
		return Redirect::to(route('admin.news.list'));
	}

	public function catnewscreate(Request $request){
		$data=array();
		$data['parent_id']=$request->category==null?0:$request->category;
		$data["title"]=$request->name;
		$data["slug"]=$request->slug;
		$data["desception"]=$request->desc;
		$data["rel"]=$request->rel;
		$data["position"]=$request->thutu;
		$data["status"]=$request->status;
		$data["created_at"]=Carbon::now();
		$data["updated_at"]=Carbon::now();
		DB::table('news_catalog')->insert($data);
		Session::put('message','Tạo mới danh mục tin tức thành công');
		return Redirect::to(route('admin.catnews.list'));
	}

	public function update_news(Request $request){
		$news =  News::find($request->id);
		$news->member_id=1;
		$news->fk_cat=$request->danhmuctin;
		$news->title=$request->name;
		$news->slug=$request->slug;
		$news->news_desc=$request->desc;
		$news->news_content=$request->detailnews;
		/*$get_image = $request->file('image');
		if($get_image){
			$get_name_image = $get_image->getClientOriginalName();
			$name_image = current(explode('.',$get_name_image));
			$new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
			$get_image->move('uploads/news',$new_image);
			$news->picture= $new_image;
		}else{
			$news->picture= $request->picture;
		}*/

		$news->picture= $request->filepath;
		
		$news->picdesc='';
		$news->viewnum=1;
		$news->meta_title=$request->name_seo;
		$news->meta_desc=$request->desc_seo;
		$news->meta_keywords=$request->keywords_seo;
		$news->source=$request->nguontin;
		$news->news_special=0;
		$news->news_featured=$request->hoivien;
		$news->order_sort=$request->orders;
		$news->status=$request->status;
		$news->created_at=$request->created_at;
		$news->updated_at=Carbon::now();
		$news->save();
		$news->categorynews_relationship($news->id,$request->term_id,'edit');
		//$news->fnSendNocation($news->id);
		Session::put('message','Cập nhật tin tức thành công');
		return Redirect::to(route('admin.news.list'));
	}

	public function active_atc($id){
			$fTour=DB::table('news')->where('id',$id)->first();
			if($fTour->status==1){ $status1=0; }else{ $status1=1; }

			 DB::table('news')->where('id',$id)->update(['status' => $status1]);
			 Session::put('message','Chỉnh/sửa thành công');
			 return Redirect::to(route('admin.news.list'));
	}

	public function delete($news_id){
		DB::table('CategoryNewsRelationship')->where('news_id',$news_id)->delete();
		DB::table('news')->where('id',$news_id)->delete();
		Session::put('message','Xóa thành công');
		return Redirect::to(route('admin.news.list'));
	}
	public function catnews_delete($catnews_id){
		DB::table('news_catalog')->where('id',$catnews_id)->delete();
		Session::put('message','Xóa thành công');
		return Redirect::to(route('admin.catnews.list'));
	}
}
