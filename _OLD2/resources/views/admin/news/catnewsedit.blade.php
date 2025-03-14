@extends('dashboard')
@section('admin_content')
<div class="main-content">
   <nav class="main-breadcrumb" aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{!! route('admin.show.dashboard') !!}"><i class="fa fa-home"></i> Dashboard</a></li>
         <li class="breadcrumb-item ">
            <a href="{!! route('news.categories') !!}">Danh mục tin</a>
         </li>
         <li class="breadcrumb-item active">
            Quản lý danh mục tin
         </li>
      </ol>
   </nav>
   <div id="menu-app" data-id="1" class="container-fluid">
      <div class="row">
         <div class="col-md-12 col-xl-12">
            <div class="lang-content-box">
               <div class="panel">
                  <div class="panel-title">Chỉnh/sửa danh mục tin tức</div>
                  <div class="panel-body">
                     
                     <?php
                     $message=Session::get('message');
                     if($message){
                         echo '<script type="text/javascript">updateSuccess("'.$message.'");</script>';
                         $message=Session::put('message',null);
                     }
                     ?>
                     
                     <div class="row">
                         <div class="col-md-5" style="background-color: antiquewhite;border-radius: 5px;padding-bottom: 10px;">
                             <form role="form" method="post" action="{!! route('admin.catnews.update') !!}" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                 <input type="hidden" id="id" name="id" value="{{$onecatnews->id}}"/>
                                 <input type="hidden" id="created_at" name="created_at" value="{{$onecatnews->created_at}}"/>
                                 <input type="hidden" id="updated_at" name="updated_at" value="{{$onecatnews->updated_at}}"/>
                                 <div class="sub-title">Tiêu đề <span>*</span></div>
                                 <div>
                                     <input type="text" required="" name="name" id="name" class="form-control" placeholder="Tiêu đề" value="{{$onecatnews->title}}">
                                 </div>
                                 <div class="sub-title">Slug <span>*</span></div>
                                 <div>
                                     <input type="text" required="" name="slug" id="slug" class="form-control" placeholder="Slug" value="{{$onecatnews->slug}}">
                                 </div>
                                 <div class="sub-title">Danh mục cha</div>
                                 <div>
                                     <select class="form-control" name="category">
                                         <option value="0">-- Lựa chọn --</option>
                                         <?php showCategories($all_menus_select)?>
                                     </select>
                                 </div>
                                 <div class="sub-title">Rel <span>*</span></div>
                                 <div>
                                     <select required name="rel" id="rel" class="form-control">
                                         @if($onecatnews->rel=='nofollow')
                                             <option value="">Lựa chọn</option>
                                             <option value="dofollow">dofollow</option>
                                             <option selected value="nofollow">nofollow</option>
                                         @else
                                             <option value="">Lựa chọn</option>
                                             <option selected value="dofollow">dofollow</option>
                                             <option value="nofollow">nofollow</option>
                                         @endif
                         
                                     </select>
                                 </div>
                         
                                 <table style="margin: 0px;padding: 0px;width: 100%;">
                                     <tr>
                                         <td style="text-align: left;vertical-align: top;">
                                             <div class="sub-title">Thứ tự <span>*</span></div>
                                             <div>
                                                 <input type="number" value="{{$onecatnews->position}}" required="" min="0" style="width: 120px;" name="thutu" id="thutu" class="form-control" placeholder="Thứ tự">
                                             </div>
                                         </td>
                                         <td style="text-align: right;vertical-align: top;">
                                             <div class="sub-title" style="width: 100%;text-align: left;">Trạng thái</div>
                                             <div>
                                                 <select name="status" class="form-control" style="width: 120px;">
                                                     @if($onecatnews->status==1)
                                                         <option selected value="1">Hiển thị</option>
                                                         <option value="0">Ẩn</option>
                                                     @else
                                                         <option value="1">Hiển thị</option>
                                                         <option selected value="0">Ẩn</option>
                                                     @endif
                         
                                                 </select>
                                             </div>
                                         </td>
                                     </tr>
                                 </table>
                         
                                 <div class="sub-title">Mô tả</div>
                                 <div>
                                     <textarea class="form-control" placeholder="Mô tả" name="desc" rows="3">{!! $onecatnews->desception !!}</textarea>
                                 </div>
                                 <div style="text-align: right;">
                                     <button type="submit" name="add_cat_news" style="margin-top: 10px;" class="btn btn-primary">Cập nhật</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                     
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <footer class="main-footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 copy-right">
               2022 © Booking by <a href="#" target="_blank">Booking CMS</a>
            </div>
            <div class="col-md-6">
               <div class="text-md-right footer-links d-none d-sm-block">
                  <a href="#" target="_blank">About Us</a>
                  <a href="#" target="_blank">Contact Us</a>
               </div>
            </div>
         </div>
      </div>
   </footer>
</div>

    <script type="text/javascript" src="{{asset('public/backend/js/jquery-1.7.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/js/slug.js')}}"></script>
@endsection
<?php
function showCategories($categories,$parent_id=0,$char=''){
    $id='';
    $arr=explode('/',$_SERVER['REQUEST_URI']);
    $toEnd = count($arr);
    foreach($arr as $key=>$value) {
        if (0 === --$toEnd) {
            $id=$value;
        }
    }
    foreach ($categories as $key=>$item){
        if($item->parent_id==$parent_id){
            if($item->id==$id){
                echo '<option selected value="'.$item->id.'">'.$char.$item->title.'</option>';
            }else{
                echo '<option value="'.$item->id.'">'.$char.$item->title.'</option>';
            }
            unset($categories[$key]);
            showCategories($categories,$item->id,$char.' --- ');

        }
    }
}
?>
