<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryNewsRelationship;
use DB;
class News extends Model
{
    //
    protected $table="news";

    public static function list_news_catalog($id){
        $re='';
        $list_news=DB::table("news")->where('fk_cat',$id)->orderBy("created_at","desc")->limit(3)->get();
        if(count($list_news)>0){
            foreach ($list_news as $key => $value) {
             $re.='<div class="media"><a href="'.$value->slug.'">
                                        <img class="d-flex mr-3" src="public/uploads/news/'.$value->picture.'" alt="'.$value->title.'">
                                    </a>

                                    <div class="media-body">
                                        <a href="'.$value->slug.'"> <h3 class="mt-0">'.$value->title.'</h3></a>

                                        <div class="info-detail-category-tour">
                                            <span>Ngày đăng: '.$value->created_at.'</span>
                                        </div>

                                        <div class="short_content">'.$value->news_desc.'</div>
                                    </div>
                                </div>';
            }
        }
    return $re;
    }

    public static function fnChageStt(){
        $re='';
        $list_news=DB::table("news")->where('news_featured','1')->orderBy("created_at","desc")->get();
        $num=count($list_news);
        if($num>0){
            $re.='<div class="bell">
                                <a onclick="fnShowhide()" href="javascript:void(0);"><span class="bell-nocation">'.$num.'</span>
                                <i class="fa fa-bell" aria-hidden="true"></i></a></div>
                                <div class="boxmn1">
                                    <div class="boxmn2">';
                                    foreach($list_news as $k=>$v){
                                        $re.='<a href="'.route('news.details',array($v->slug)).'">
                                                    <i class="fa fa-star" aria-hidden="true"></i> '.$v->title.'
                                                </a>';
                                    }
            $re.='</div></div>';
        }else{
            $re.='<div class="bell">
                                <a onclick="fnShowhide()" href="javascript:void(0);"><span class="bell-nocation">'.$num.'</span>
                                <i class="fa fa-bell" aria-hidden="true"></i></a></div>
                                <div class="boxmn1">
                                    <div class="boxmn2">';
                                        $re.='<a href="javascript:void(0);">
                                                    Không có thông báo nào
                                                </a>';
            $re.='</div></div>';
        }
        return $re;
    }

    public static function list_news_catalog_2($id){
        $re='';
        $list_news=DB::table("news")->where('fk_cat',$id)->orderBy("created_at","desc")->paginate(15);
        if(count($list_news)>0){
            foreach ($list_news as $key => $value) {
                if($id=='1'){
                            $re.='<div class="media"><a rel="nofollow" href="'.$value->slug.'">
                                        <img class="d-flex mr-3" src="public/uploads/news/'.$value->picture.'" alt="'.$value->title.'">
                                    </a>

                                    <div class="media-body">
                                        <a rel="nofollow" href="'.$value->slug.'"> <h2 class="mt-0">'.$value->title.'</h2></a>

                                        <div class="info-detail-category-tour">
                                            <span>Ngày đăng: '.$value->created_at.'</span>
                                        </div>

                                        <div class="short_content">'.$value->news_desc.'</div>
                                    </div>
                                </div>';
                }else{
                    $re.='<div class="media"><a href="'.$value->slug.'">
                                        <img class="d-flex mr-3" src="public/uploads/news/'.$value->picture.'" alt="'.$value->title.'">
                                    </a>

                                    <div class="media-body">
                                        <a rel="dofollow" href="'.$value->slug.'"> <h2 class="mt-0">'.$value->title.'</h2></a>

                                        <div class="info-detail-category-tour">
                                            <span>Ngày đăng: '.$value->created_at.'</span>
                                        </div>

                                        <div class="short_content">'.$value->news_desc.'</div>
                                    </div>
                                </div>';
                }
            }
        }
        $re.='<div style="width: 100%;height: 35px;clear: both;text-align: center;margin-bottom: 35px;">'.$list_news->links().'</div>';

    return $re;
    }

    public static function fnRenderNews($newsId){
        $fnews=DB::table('news')->where('id',$newsId)->first();
        if(!empty($fnews)){
            $strlink='<a target="_blank" href="'.route('news.details',array($fnews->slug)).'">'.route('news.details',array($fnews->slug)).'</a>';
            return $strlink;
        }
        return '';
    }

    public static function fnRenderCatalog($cat_id,$newsId){
        $news_cat=DB::table('CategoryNewsRelationship')->where('news_id',$newsId)->get();
        $arr=array();
        $all_cat_news=array();
        $strLingCat='';
        $arr[] = $cat_id;
        if(!empty($news_cat)){
            foreach($news_cat as $k => $v) {
                   $arr[] = $v->cats_id;
            }
        }

        if(!empty($arr)){
            $all_cat_news=DB::table("news_catalog")->whereIn('id',$arr)->orderBy("position","asc")->get();
            foreach($all_cat_news as $nk=>$nv){
                $strLingCat.=$nv->title.'<br/>';
            }
        }
        return $strLingCat;
    }

    public function fnSendNocation($post_id){
        $all_members=DB::table('membership')->where('status','1')->get();
        foreach($all_members as $k=>$v){
            //$news_read=$v->news_read;
            $news_reader=$post_id.','.$v->news_read.',';
            DB::table('membership')->where('id',$v->id)->update(['news_read'=>$news_reader]);
        }
    }

    public function categorynews_relationship($post_id,$term_id,$action)
    {
        if ( !empty($term_id)){
            if ($action == 'edit'){
                CategoryNewsRelationship::where('news_id','=',$post_id)->delete();
            }
            if (is_array($term_id)) {
                foreach ($term_id as $key => $value) {
                    $termrelationships = new CategoryNewsRelationship;
                    $termrelationships->news_id = $post_id;
                    $termrelationships->cats_id = $value;
                    $termrelationships->save();
                }
            }else{
                $termrelationships = new CategoryNewsRelationship;
                $termrelationships->news_id = $post_id;
                $termrelationships->cats_id = $term_id;
                $termrelationships->save();
            }
        }
    }
}
