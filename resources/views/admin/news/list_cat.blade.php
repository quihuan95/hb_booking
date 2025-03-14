@extends('dashboard')
@section('admin_content')
<div class="main-content">
   <nav class="main-breadcrumb" aria-label="breadcrumb">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="{!! route('admin.show.dashboard') !!}"><i class="fa fa-home"></i> Dashboard</a></li>
         <li class="breadcrumb-item ">
            <a href="{!! route('news.categories') !!}">Danh mục tin tức</a>
         </li>
         <li class="breadcrumb-item active">
            Quản lý danh mục tin tức
         </li>
      </ol>
   </nav>
   <div id="menu-app" data-id="1" class="container-fluid">
      <div class="row">
         <div class="col-md-12 col-xl-12">
            <div class="lang-content-box">
               <div class="panel">
                  <div class="panel-title"><b>Quản lý danh mục tin tức</b></div>
                  <div class="panel-body">
                     <?php
                     $message=Session::get('message');
                     if($message){
                         echo '<script type="text/javascript">updateSuccess("'.$message.'");</script>';
                         $message=Session::put('message',null);
                     }
                     ?>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-7">
                                          <p style="margin: 4px 0 0 0;">&nbsp;</p>
                                      <div class="table-responsive">
                                          <table class="table table-striped table-bordered table-hover">
                                              <thead style="border-top:solid 1px #ccc;">
                                              <tr>
                                                  <th>Tên</th>
                                                  <th style="width: 10%;text-align: center;">STT</th>
                                                  <th style="width: 30%;text-align: center;">Tùy chỉnh</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                              <?php showCategories($all_cats)?>
                                              </tbody>
                                          </table>
                                          
                                      </div>
                                      </div>
                                      <div class="col-md-5">
                                          <p style="margin:0px;padding:0px;">&nbsp;</p>
                                          <div style="background-color: antiquewhite;border-radius: 5px;padding: 10px;">
                                          <form role="form" method="post" action="{!! route('admin.catnews.create') !!}" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="sub-title">Tiêu đề <span>*</span></div>
                                                <div>
                                                    <input type="text" required="" name="name" id="name" class="form-control" placeholder="Tiêu đề">
                                                </div>
                                                <div class="sub-title">Slug <span>*</span></div>
                                                <div>
                                                    <input type="text" required="" name="slug" id="slug" class="form-control" placeholder="Slug">
                                                </div>
                                                <div class="sub-title">Danh mục cha</div>
                                                <div>
                                                    <select class="form-control" name="category">
                                                        <option value="0">-- Lựa chọn --</option>
                                                        <?php showCategories02($all_cats02)?>
                                                    </select>
                                                </div>
                                                <div class="sub-title">Rel <span>*</span></div>
                                                <div>
                                                    <select required name="rel" id="rel" class="form-control">
                                                        <option value="">Lựa chọn</option>
                                                        <option value="dofollow">dofollow</option>
                                                        <option value="nofollow">nofollow</option>
                                                    </select>
                                                </div>
                                          
                                                <table style="margin: 0px;padding: 0px;width: 100%;">
                                                    <tr>
                                                        <td style="text-align: left;vertical-align: top;">
                                                            <div class="sub-title">Thứ tự <span>*</span></div>
                                                            <div>
                                                                <input type="number" required="" min="0" style="width: 120px;" name="thutu" id="thutu" class="form-control" placeholder="Thứ tự">
                                                            </div>
                                                        </td>
                                                        <td style="text-align: right;vertical-align: top;">
                                                            <div class="sub-title" style="width: 100%;text-align: left;">Trạng thái</div>
                                                            <div>
                                                                <select name="status" class="form-control" style="width: 120px;">
                                                                    <option value="1">Hiển thị</option>
                                                                    <option value="0">Ẩn</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                          
                                                <div class="sub-title">Mô tả</div>
                                                <div>
                                                    <textarea class="form-control" placeholder="Mô tả" name="desc" rows="3"></textarea>
                                                </div>
                                            <div style="text-align: right;">
                                                <button type="submit" name="add_cat_news" style="margin-top: 10px;" class="btn btn-primary">Thêm mới</button>
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
//cat_detail
function showCategories($categories,$parent_id=0,$char=''){
    foreach ($categories as $key=>$item){
        $links='';
        //Nếu là chuyên mục con thì hiển thị
        if($item->parent_id==$parent_id){
            $links='<a title="Chỉnh/sửa" href="'.route('admin.catnews.edit',array($item->id,$item->parent_id)).'">'.$item->title.'</a> <span style="font-size:10px;"><i>['.$item->id.']</i></span><br/><i style="font-size: 10px;"><a target="_blank" href="'.route('news.categories',array($item->slug)).'"><i class="fa fa-link" aria-hidden="true"></i> '.route('news.categories',array($item->slug)).'</a></i>';
            $strbg=$item->status==0?' style="background:#dedede;"':'';
            $link_del=" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Bạn có thật sự muốn xóa?')\"  href=\"".route('admin.catnews.delete',array($item->id)) ."\" ";
            echo '<tr '.$strbg.'><td>'.$char.$links.'</td><td style="text-align: center;">'.$item->position.'</td><td style="text-align: center;"><a class="btn btn-primary btn-sm" href="'.route('admin.catnews.edit',array($item->id,$item->parent_id)).'"><i class="fa fa-edit"></i> Sửa</a> &nbsp; <a '.$link_del.'><i class="fa fa-trash"></i> Xóa</a></td></tr>';
            unset($categories[$key]);
            //Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories,$item->id,$char.' --- ');
        }
    }
}

function showCategories02($categories,$parent_id=0,$char=''){
    foreach ($categories as $key=>$item){
//Nếu là chuyên mục con thì hiển thị
        if($item->parent_id==$parent_id){
            echo '<option value="'.$item->id.'">'.$char.$item->title.'</option>';
            unset($categories[$key]);
            //Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories02($categories,$item->id,$char.' --- ');
        }
    }
}
?>
