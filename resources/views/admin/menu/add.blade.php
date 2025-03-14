@extends('dashboard')
@section('admin_content')
<div class="main-content">
   <nav class="main-breadcrumb" aria-label="breadcrumb">
	  <ol class="breadcrumb">
		 <li class="breadcrumb-item"><a href="https://hoabinhbooking.com/admin"><i class="fa fa-home"></i> Dashboard</a></li>
		 <li class="breadcrumb-item ">
			<a href="{!! route('admin.menu.list') !!}">Menus</a>
		 </li>
		 <li class="breadcrumb-item active">
			Main Menu
		 </li>
	  </ol>
   </nav>
   <div id="menu-app" data-id="1" class="container-fluid">
	  <div class="row">
		 <div class="col-md-12 col-xl-12">
			<div class="lang-content-box">
			   <div class="panel">
				  <div class="panel-title">Thêm mới</div>
				  <div class="panel-body">
					 <form role="form" method="post" action="{!! route('admin.menu.create') !!}" enctype="multipart/form-data">
						 {{ csrf_field() }}
						 <div class="row">
							 <div class="col-md-9">
								  <div class="sub-title">Tiêu đề <span>*</span></div>
								  <div>
									  <input type="text" required name="name" id="name" class="form-control" placeholder="Tiêu đề">
								  </div>
								  <div class="sub-title">Slug <span>*</span></div>
								  <div>
									  <input type="text" required name="slug" id="slug" class="form-control" placeholder="Slug">
								  </div>
								  <div class="sub-title">Mã Video Youtube <i style="font-size: 11px;">(Nhập mã video của youtube, menu sẽ link đến video)</i></div>
								  <div><input type="text" name="idvideo" id="idvideo" class="form-control" placeholder="Mã Video Youtube"></div>
								  <div class="sub-title">Mô tả</div>
								  <div>
									  <textarea class="form-control my-editor" placeholder="Mô tả" name="desc" id="ckeditor" rows="5"></textarea>
								  </div>
							 
							  </div>
							  <div class="col-md-3">
								  <div class="sub-title">Danh mục cha</div>
								  <div>
									  <select class="form-control" name="category">
										  <option value="0">-- Lựa chọn --</option>
										  <?php showCategories($all_menus)?>
									  </select>
								  </div>
								  <div class="sub-title">Thứ tự</div>
								  <div>
									  <input type="number" min="0" required name="orders" class="form-control" placeholder="Thứ tự">
								  </div>
								  <div class="sub-title">Đường dẫn Icon</div>
								  <div>
									  <input type="text" name="icon_url" class="form-control" placeholder="Nhập đường dẫn">
								  </div>
								  <div class="sub-title">Hiển thị menu phải</div>
								  <div>
									  <select name="rel" class="form-control">
										  <option value="1">Hiển thị</option>
										  <option value="0">Ẩn</option>
									  </select>
								  </div>
								  <div class="sub-title">Trạng thái</div>
								  <div>
									  <select name="status" class="form-control">
										  <option value="1">Hiển thị</option>
										  <option value="0">Ẩn</option>
									  </select>
								  </div>
								  <div class="sub-title">Link Redirect</div>
								  <div>
									  <input type="text" name="url_redirect" class="form-control" placeholder="Link Redirect">
								  </div>
								  <hr style="margin: 10px 0px 0px 0px;padding: 0px;"/>
								  <div class="sub-title">Tiêu đề SEO</div>
								  <div>
									  <input type="text" name="txtTitleSEO" class="form-control" placeholder="Tiêu đề SEO">
								  </div>
								  <div class="sub-title">Mô tả SEO</div>
								  <div>
									  <textarea class="form-control" placeholder="Mô tả" name="txtDescSEO" id="txtDescSEO" rows="3"></textarea>
								  </div>
								  <div class="sub-title">Keyword SEO</div>
								  <div>
									  <input type="text" name="txtKeywordSEO" class="form-control" placeholder="Keyword SEO">
								  </div>
								  <button type="submit" name="add_picture" style="margin-top: 10px;" class="btn btn-primary">Thêm mới</button>
							  </div>
						 </div>
					 </form>
					 <div style="width:100%;height:1px;clear:both;"></div>
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
?>
