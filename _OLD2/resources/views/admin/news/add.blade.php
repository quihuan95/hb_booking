@extends('dashboard')
@section('admin_content')
<div class="main-content">
   <nav class="main-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="{!! route('admin.show.dashboard') !!}"><i class="fa fa-home"></i> Dashboard</a></li>
     <li class="breadcrumb-item ">
      <a href="{!! route('admin.news.list') !!}">Tin tức</a>
     </li>
     <li class="breadcrumb-item active">
      Thêm mới
     </li>
    </ol>
   </nav>
   <div id="menu-app" data-id="1" class="container-fluid">
    <div class="row">
     <div class="col-md-12 col-xl-12">
      <div class="lang-content-box">
         <div class="panel">
          <div class="panel-title">Thêm mới tin tức</div>
          <div class="panel-body">
            
            <div class="panel-body">
                                    <script type="text/javascript">
                                        function fn_news_special() {
                                            var v=$('#hd_news_special').val();
                                            if(v==0){ $('#hd_news_special').val(1); }else{ $('#hd_news_special').val(0); }
                                        }
                                    </script>
                                    <form role="form" method="post" action="{!! route('admin.news.create') !!}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <ul class="nav nav-tabs">
                                            <li><a class="active" data-toggle="tab" href="#all">Thông tin cơ bản</a></li>
                                            <li><a data-toggle="tab" href="#for_seo">SEO</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="all" class="tab-pane fade in active show">
                                                <div class="contenttabs">
                                                    <div class="row">
                                                      <div class="col-md-9 col-sm-9 col-xs-12">
                                                          <div class="sub-title">Tiêu đề <span>*</span></div>
                                                          <div>
                                                              <input type="text" required name="name" id="name" class="form-control" placeholder="Tiêu đề">
                                                          </div>
                                                          <div class="sub-title">Slug <span>*</span></div>
                                                          <div>
                                                              <input type="text" required name="slug" id="slug" class="form-control" placeholder="Slug">
                                                          </div>
                                                          <div class="sub-title">Mô tả tóm tắt</div>
                                                          <div>
                                                              <textarea class="form-control" placeholder="Mô tả" name="desc" rows="3"></textarea>
                                                          </div>
                                                          <div class="sub-title">Nguồn tin</div>
                                                          <div>
                                                              <input type="text" name="nguontin" id="nguontin" class="form-control" placeholder="Nguồn tin">
                                                          </div>
                                                          <div class="sub-title">Nội dung</div>
                                                          <div>
                                                              <textarea class="form-control my-editor" placeholder="Mô tả" name="detailnews" id="ckeditor" rows="3"></textarea>
                                                          </div>
                                                      
                                                      </div>
                                                      <div class="col-md-3 col-sm-3 col-xs-12">
                                                          <div class="sub-title">Danh mục</div>
                                                          <div>
                                                              <select required name="danhmuctin" class="form-control">
                                                                  <option value="0">== Lựa chọn ==</option>
                                                                  <?php showCategories($danhmuctin);?>
                                                              </select>
                                                          </div>
                                                          <style type="text/css">
                                                          .multicategories{ height: 200px;overflow: auto;background: #fff;border-radius: 5px;padding: 10px;border: solid 1px #ccc; }
                                                              .multicategories ul{ list-style-type: none;margin: 0px;padding: 0px; }
                                                              .multicategories ul li input{ margin-right: 10px; }
                                                          </style>
                                                          <div class="sub-title">Đa danh mục</div>
                                                          <div class="multicategories">
                                                              <ul>
                                                                  <?php showCategories22($danhmuctin22);?>
                                                              </ul>
                                                          </div>
                                                      
                                                          <input type="hidden" name="orders" class="form-control" placeholder="Thứ tự" value="0">
                                                          <div class="sub-title">Hiển thị</div>
                                                          <div>
                                                              <select name="status" class="form-control">
                                                                  <option value="1">Hiển thị</option>
                                                                  <option value="0">Ẩn</option>
                                                              </select>
                                                          </div>
                                                          <div class="sub-title">Hình ảnh</div>
                                                          <div id="holder" style="margin:15px;width: 100%;">
                                                           </div>
                                                          <div class="input-group">
                                                             <span class="input-group-btn">
                                                               <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                                 <i class="fa fa-picture-o"></i> Choose
                                                               </a>
                                                             </span>
                                                             <input id="thumbnail" class="form-control" type="text" name="filepath">
                                                           </div>
                                                          
                                                          <button type="submit" name="add" style="margin-top: 10px;z-index: 9999;" class="btn btn-primary">Thêm mới</button>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div id="for_seo" class="tab-pane fade">
                                                <div class="contenttabs">
                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <div class="sub-title">Tiêu đề</div>
                                                        <div>
                                                            <input type="text" name="name_seo" id="name_seo" class="form-control" placeholder="Tiêu đề">
                                                        </div>
                                                        <div class="sub-title">Desception</div>
                                                        <div>
                                                            <textarea class="form-control" placeholder="Mô tả" name="desc_seo" rows="3" placeholder="Desception"></textarea>
                                                        </div>
                                                        <div class="sub-title">Keywords</div>
                                                        <div>
                                                            <input type="text" name="keywords_seo" id="keywords_seo" class="form-control" placeholder="Keywords">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
            
            
            <!--<div style="float: left;position: fixed;width: 75%;height: 50px;text-align: right;bottom: 0px;"></div>-->
            
                                    </form>
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

  <?php
      $message=Session::get('message');
      if($message){
        echo '<script type="text/javascript">updateSuccess("'.$message.'");</script>';
        $message=Session::put('message',null);
      }
      ?>

    <script type="text/javascript" src="{{asset('public/backend/js/jquery-1.7.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/js/slug.js')}}"></script>
    <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>

    <script type="text/javascript">
        $('#lfm').filemanager('image');
        $(document).ready(function(){

    // Define function to open filemanager window
    var lfm = function(options, cb) {
      var route_prefix = (options && options.prefix) ? options.prefix : 'filemanager';
      window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
      window.SetUrl = cb;
    };

    // Define LFM summernote button
    var LFMButton = function(context) {
      var ui = $.summernote.ui;
      var button = ui.button({
        contents: '<i class="note-icon-picture"></i> ',
        tooltip: 'Insert image with filemanager',
        click: function() {

          lfm({type: 'image', prefix: 'filemanager'}, function(lfmItems, path) {
            lfmItems.forEach(function (lfmItem) {
              context.invoke('insertImage', lfmItem.url);
            });
          });

        }
      });
      return button.render();
    };
});


  var editor_config = {
    path_absolute : "/",
    selector: 'textarea.my-editor',
    height:'500px',
    relative_urls: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'filemanager?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection
<?php
function showCategories($categories,$parent_id=0,$char=''){
    foreach ($categories as $key=>$item){
//Nếu là chuyên mục con thì hiển thị
        if($item->parent_id==$parent_id){
            echo '<option value="'.$item->id.'">'.$char.$item->title.'</option>';
            unset($categories[$key]);
            //Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories,$item->id,$char.' --- ');
        }
    }
}

function showCategories22($categories,$parent_id=0,$char=''){
    foreach ($categories as $key=>$item){
        if($item->parent_id==$parent_id){
            echo '<li><label><input name="term_id[]" type="checkbox" id="md_checkbox_'.$item->id.'" class="filled-in chk-col-red" value="'.$item->id.'" >'.$char.$item->title.'</label></li>';
            unset($categories[$key]);
            showCategories22($categories,$item->id,$char.' --- ');
        }
    }
}
?>
