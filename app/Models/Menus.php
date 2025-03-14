<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
class Menus extends Model
{
	protected $table="menus_admin";
	
	public static function render_menu_admin(){
		$list_menu='';
		$currentUrl = url()->current();
		$link_riderect='https://hoabinhbooking.com/admin/';
		$menus=DB::table('menus_admin')->where('status','A')->where('pid','0')->orderBy('orders','asc')->get();
		if(count($menus)>0){
			foreach ($menus as $k=>$v){
				$submenu=Menus::render_sub_menu_admin($v->id);
				if($submenu!=''){
					$list_menu.='<li class=" has-children admin_module_core_settings_index_general"><a href="'.$link_riderect.$v->folder.'"><span class="icon text-center"><i class="'.$v->icon.'"></i></span>'.$v->name.'</a>'.$submenu.'</li>';
				}else{
					$list_menu.='<li class=" admin_module_core_menu"><a href="'.$link_riderect.$v->folder.'"><span class="icon text-center"><i class="'.$v->icon.'"></i></span>'.$v->name.'</a></li>';	
				}
			}
		}
		return $list_menu;
	}
	
	public static function render_sub_menu_admin($id){
		$list_menu='';
		$currentUrl = url()->current();
		$link_riderect='https://hoabinhbooking.com/admin/';
		$menus=DB::table('menus_admin')->where('status','A')->where('pid',$id)->orderBy('orders','asc')->get();
		if(count($menus)>0){
			$list_menu.='<span class="btn-toggle"><i class="fa fa-angle-left pull-right"></i></span><ul>';
			foreach($menus as $k=>$v){
				$list_menu.='<li class=" admin_module_core_menu"><a href="'.$link_riderect.$v->folder.'"><span class="icon text-center"><i class="'.$v->icon.'"></i></span>'.$v->name.'</a></li>';
			}
			$list_menu.='</ul>';
		}
		return $list_menu;
	}
	public static function render_menu(){
		$menu_top='';
		$menus=DB::table('menus')->select('id','parent_id','title','slug','redirect','position','level','rel','status','created_at','updated_at')->where('status','1')->where('parent_id','1')->orderBy('level','asc')->get();
		if(count($menus)>0){
			foreach ($menus as $k=>$v){
				$sub_menu='';
				$menus_c2=DB::table('menus')->select('id','parent_id','title','slug','redirect','position','level','rel','status','created_at','updated_at')->where('status','1')->where('parent_id',$v->id)->orderBy('level','asc')->get();
				if(count($menus_c2)>0){
					$sub_menu.='<ul class="sub-menu">';
					foreach ($menus_c2 as $ck=>$cv){
						$sub_menu_c3='';
						$menus_c3 = DB::table('menus')->select('id','parent_id','title','slug','redirect','position','level','rel','status','created_at','updated_at')->where('status','1')->where('parent_id',$cv->id)->orderBy('level','asc')->get();
						if(count($menus_c3)>0){
							$sub_menu_c3.='<ul class="sub-menu">';
							foreach ($menus_c3 as $k3=>$c3){
								$rel3=$c3->rel==1?' rel="dofollow" ':' rel="nofollow" ';
								$str_link_3='';
								if($c3->redirect!=''){ $str_link_3=$c3->redirect; }
								else{ $str_link_3='https://hoabinhbooking.com/k/'.$c3->slug; }
								
								$sub_menu_c3.='<li><a '.$rel3.' href="'.$str_link_3.'">'.$c3->title.'</a></li>';
							}	
							$sub_menu_c3.='</ul>';
						}
						
						$rel2=$cv->rel==1?' rel="dofollow" ':' rel="nofollow" ';
						$str_link_3='';
						if($cv->redirect!=''){ $str_link_3=$cv->redirect; }else{ $str_link_3='https://hoabinhbooking.com/k/'.$cv->slug; }
						
						if($sub_menu_c3!=''){
							$sub_menu.='<li><a '.$rel2.' href="'.$str_link_3.'">'.$cv->title.' <span class="fa fa-caret-right m-555"></span></a>'.$sub_menu_c3.'</li>';
						}else{
							$sub_menu.='<li><a '.$rel2.' href="'.$str_link_3.'">'.$cv->title.'</a></li>';	
						}
						
					}
					$sub_menu.='</ul>';
				}
				
				
				if($v->redirect!=''){ $str_link_0=$v->redirect; }else{ $str_link_0='https://hoabinhbooking.com/k/'.$v->slug; }
				$rel=$v->rel==1?' rel="dofollow" ':' rel="nofollow" ';
				if($sub_menu!=''){
					$menu_top.='<li><a '.$rel.' href="'.$str_link_0.'">'.$v->title.' <span class="fa fa-caret-down m-0"></span></a>'.$sub_menu.'</li>';
				}else{
					$menu_top.='<li><a '.$rel.' href="'.$str_link_0.'">'.$v->title.'</a></li>';
				}
			}
		}
		return $menu_top;
	}
	
	/*
	public static function render_menu(){
		$menu_top='';
		$menus=DB::table('menus')->select('id','parent_id','title','slug','redirect','position','icon','level','rel','status','created_at','updated_at')->where('status','1')->where('parent_id','1')->orderBy('level','asc')->get();
		if(count($menus)>0){
			foreach ($menus as $k=>$v){
				$sub_menu='';
				$menus_c2=DB::table('menus')->select('id','parent_id','title','slug','icon','redirect','position','level','rel','status','created_at','updated_at')->where('status','1')->where('parent_id',$v->id)->orderBy('level','asc')->get();
				if(count($menus_c2)>0){
					$sub_menu.='<div id="sub_menu_'.$v->id.'" class="sub-menu"><ul>';
					foreach ($menus_c2 as $ck=>$cv){
						$rel2=$cv->rel==1?' rel="dofollow" ':' rel="nofollow" ';
						if($cv->redirect!=''){ $str_link=$cv->redirect; }else{ $str_link='https://hoabinhairlines.vn/ve-may-bay/'.$cv->slug; }
						if($cv->id==45 || $cv->id==46 || $cv->id==47){
							$sub_menu.='<li style="width: 100%;height: 0px;overflow: hidden;" id="mntop_'.$cv->id.'"><a '.$rel2.' href="'.$str_link.'">'.$cv->title.'</a></li>';
						}else{
							$sub_menu.='<li id="mntop_'.$cv->id.'"><a '.$rel2.' href="'.$str_link.'">'.$cv->title.'</a></li>';
						}
					}
					$sub_menu.='</ul></div>';
				}
	
				if($v->redirect!=''){ $str_link_0=$v->redirect; }else{ $str_link_0='https://hoabinhairlines.vn/'.$v->slug; }
				$rel=$v->rel==1?' rel="dofollow" ':' rel="nofollow" ';
				if($sub_menu!=''){
					$menu_top.='<li id="mntop_'.$v->id.'" class="hidden-xs"><a '.$rel.' href="'.$str_link_0.'">'.$v->title.'</a>'.$sub_menu.'</li>';
				}else{
					$menu_top.='<li id="mntop_'.$v->id.'" class="hidden-xs"><a '.$rel.' href="'.$str_link_0.'">'.$v->title.'</a></li>';
				}
			}
		}
	
		return $menu_top;
	}
	*/

}
