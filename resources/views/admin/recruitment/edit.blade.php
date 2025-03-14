@extends('dashboard')
@section('admin_content')
<div class="main-content">
   <nav class="main-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb">
	 <li class="breadcrumb-item"><a href="{!! route('admin.show.dashboard') !!}"><i class="fa fa-home"></i> Dashboard</a></li>
	 <li class="breadcrumb-item ">
	  <a href="{!! route('admin.news.list') !!}">Tuyển dụng</a>
	 </li>
	 <li class="breadcrumb-item active">
	  Chỉnh / sửa
	 </li>
	</ol>
   </nav>
   <style type="text/css">
	   .form-control{ margin-bottom: 15px!important; }
   </style>
   <div id="menu-app" data-id="1" class="container-fluid">
	<div class="row">
	 <div class="col-md-12 col-xl-12">
	  <div class="lang-content-box">
		 <div class="panel">
		  <div class="panel-title">Chỉnh / sửa</div>
		  <div class="panel-body">
			
			<div class="panel-body">
									<form role="form" method="post" action="{!! route('admin.rec.update') !!}" enctype="multipart/form-data">
										{{ csrf_field() }}
										<ul class="nav nav-tabs">
											<li><a class="active" data-toggle="tab" href="#all">Thông tin cơ bản</a></li>
											<li><a data-toggle="tab" href="#for_seo">SEO</a></li>
										</ul>
										<div class="tab-content">
											<div id="all" class="tab-pane fade in active show">
												<div class="contenttabs">
													<div class="row">
													  <div class="col-md-8 col-sm-8 col-xs-12">
														  <div class="sub-title">Tiêu đề <span>*</span></div>
														  <div>
															  <input type="text" required name="name" id="name" class="form-control" placeholder="Tiêu đề" value="{!! $data->title !!}">
															  <input type="hidden" name="id" id="id" value="{!! $data->id !!}">
															  <input type="hidden" name="created_at" id="created_at" value="{!! $data->created_at !!}">
															  <input type="hidden" name="status" id="status" value="{!! $data->status !!}">
															  
														  </div>
														  <div class="sub-title">Slug <span>*</span></div>
														  <div>
															  <input type="text" required name="slug" id="slug" class="form-control" placeholder="Slug" value="{!! $data->slug !!}">
														  </div>
														  <div class="sub-title">Nội dung</div>
														  <div>
															  <textarea class="form-control my-editor" placeholder="Mô tả" name="detailnews" id="ckeditor" rows="3">{!! $data->desc1 !!}</textarea>
														  </div>
													  </div>
													  <div class="col-md-4 col-sm-4 col-xs-12">
														  <div class="sub-title">Ngày hết hạn</div>
															<div>
															  <input type="date" class="form-control" id="deadline" name="deadline" value="{!! $data->deadline !!}" />
															</div>
														  <div class="sub-title">Mức lương</div>
														  <div>
															<input type="text" class="form-control" id="salary" name="salary" value="{!! $data->salary !!}" />
														  </div>
														  <div class="sub-title">Địa điểm làm việc</div>
															<div>
															  <input type="text" class="form-control" id="work_location" name="work_location" value="{!! $data->work_location !!}" />
															</div>
															<div class="sub-title">Nhóm ngành nghề</div>
															<div>
															  <input type="text" class="form-control" id="industry_group" name="industry_group" value="{!! $data->industry_group !!}" />
															</div>
															<div class="sub-title">Yêu cầu kinh nghiệm</div>
															<div>
															  <input type="text" class="form-control" id="experience" name="experience" value="{!! $data->experience !!}" />
															</div>
															<div class="sub-title">Công ty</div>
															<div>
															  <input type="text" class="form-control" id="company" name="company" value="{!! $data->company !!}" />
															</div>
															<div class="sub-title">Yêu cầu bằng cấp</div>
															<div>
															  <input type="text" class="form-control" id="degree" name="degree" value="{!! $data->degree !!}" />
															</div>
															<div class="sub-title">Chức vụ</div>
															<div>
															  <input type="text" class="form-control" id="position" name="position" value="{!! $data->position !!}" />
															</div>
															<div class="sub-title">Số lượng cần tuyển</div>
															<div>
															  <input type="number" min="1" class="form-control" id="quantity" name="quantity" value="{!! $data->quantity !!}" />
															</div>
															<div class="sub-title">Hình thức làm việc</div>
															<div>
															  <input type="text" class="form-control" id="form_of_work" name="form_of_work" value="{!! $data->form_of_work !!}" />
															</div>
															<div class="sub-title">Yêu cầu giới tính</div>
															<div>
															  <input type="text" class="form-control" id="gender" name="gender" value="{!! $data->gender !!}" />
															</div>
															<div class="sub-title">Yêu cầu độ tuổi</div>
															<div>
															  <input type="text" class="form-control" id="age" name="age" value="{!! $data->age !!}" />
															</div>
															
														  <button type="submit" name="add" style="margin-top: 10px;z-index: 9999;" class="btn btn-primary">Cập nhật</button>
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
	height:'650px',
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

