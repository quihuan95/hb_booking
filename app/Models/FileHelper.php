<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
class FileHelper extends Model
{
	public static function isImgsCpanel($oId,$oHotelId){
		$data=DB::table('media_files')->where('id',$oId)->where('create_user','-1')->first();
		$dtHotel=DB::table('bravo_hotels')->where('id',$oHotelId)->first();
		if($data){
			$link_edit=route('cmscpanel.editHotel',array($oHotelId));
			if($dtHotel->status=='publish'){
				return '<div class="_wap55"><a href="'.$link_edit.'?tab=1"><img alt="" src="https://hoabinhbooking.com/'.$data->file_path.'"/></a><div class="_wap56">'.$dtHotel->title.'</div><div class="_wap57"><a onclick="return confirm(\'Are you sure want delete?\');" href="javascript:void(0);"><i class="fa fa-trash" aria-hidden="true"></i></a></div></div>';
				//return "<a href='".$link_edit."?tab=1'>".$dtHotel->title."</a>";
			}else{
				return '<div class="_wap55"><a href="'.$link_edit.'?tab=1"><img alt="" src="https://hoabinhbooking.com/'.$data->file_path.'"/></a><div class="_wap56">'.$dtHotel->title.'</div><div class="_wap57"><a onclick="return confirm(\'Are you sure want delete?\');" href="javascript:void(0);"><i class="fa fa-trash" aria-hidden="true"></i></a></div></div>';
				//return "<a href='".$link_edit."?tab=1'>".$dtHotel->title."</a>";
			}
		}
		return "";
	}
	
	public static function isImgsSearch($oId,$title){
		$data=DB::table('media_files')->where('id',$oId)->orderBy("id","desc")->first();
		if($data){
			$dd=substr($data->file_path,0,19);//public/uploads/img/
			if($dd=='public/uploads/img/'){
				return '<img class="img-responsive lazy loaded" data-src="https://hoabinhbooking.com/'.$data->file_path.'" alt="'.$title.'" src="https://hoabinhbooking.com/'.$data->file_path.'" data-was-processed="true">';
			}else{
				return '<img class="img-responsive lazy loaded" data-src="https://hoabinhbooking.com/uploads/'.$data->file_path.'" alt="'.$title.'" src="https://hoabinhbooking.com/uploads/'.$data->file_path.'" data-was-processed="true">';
			}
			
			return $dd;
		}
		return "";
	}
	
	public static function isImgs($oId){
		$data=DB::table('media_files')->where('id',$oId)->where('create_user','-1')->orderBy("id","desc")->first();
		if($data){
			return '<img alt="'.$data->file_path.'" src="/'.$data->file_path.'"/>';
		}
		return "";
	}
	
	public static function imgGallery($strimg,$hotelId,$status){
		$_re='';
		$mang = explode(',',$strimg);
		foreach($mang as $k => $v)
		{
			if($v!=''){
				$one_img=DB::table('media_files')->where('id',$v)->first();
				if(!empty($one_img)){
					$_re.='<div class="image-item">';
					$_re.='<div class="inner"><a href="https://hoabinhbooking.com/vi/partnership/public/gallery/delete/'.$hotelId.'/'.$v.'/'.$status.'"><span class="delete btn btn-sm btn-danger"><i class="fa fa-trash"></i></span></a><img src="/'.$one_img->file_path.'" class="image-responsive"></div>';
					$_re.='</div>';
				}
			}
		}
		return $_re;
	}
	
	public static function imgGalleryFrontend($strimg,$hotelId,$status){
		$_re='';
		$mang = explode(',',$strimg);
		$count=0;
		foreach($mang as $k => $v)
		{
			$leng=count($mang);
			$count++;
			if($v!=''){
				if($count<=4){
					$one_img=DB::table('media_files')->where('id',$v)->first();
					if(!empty($one_img)){
						if($count==4){
							$_re.='<li><div class="hbb_imglast"><div class="hbb_img111">+'.$leng.'</div><div class="hbb_img101"><img alt="'.$one_img->file_path.'" src="/'.$one_img->file_path.'"/></div></div></li>';
						}else{
							$_re.='<li><img alt="'.$one_img->file_path.'" src="/'.$one_img->file_path.'"/></li>';
						}
						
					}
					
				}
			}
		}
		return $_re;
	}
	public static function fnLocation($isIDHotel){
		$_one_hotel=DB::table('bravo_hotels')->where('id',$isIDHotel)->orderBy("id","desc")->first();
		if(!empty($_one_hotel)){
			$_one_location=DB::table('location')->where('id',$_one_hotel->location_id)->orderBy("id","desc")->first();
			if(!empty($_one_location)){
				return $_one_location->title;
			}
		}
		return "";
	}
}
