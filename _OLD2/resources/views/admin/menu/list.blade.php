@extends('dashboard')
@section('admin_content')
<div class="main-content">
   <nav class="main-breadcrumb" aria-label="breadcrumb">
	  <ol class="breadcrumb">
		 <li class="breadcrumb-item"><a href="{!! route('admin.show.dashboard') !!}"><i class="fa fa-home"></i> Dashboard</a></li>
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
				  <div class="panel-title">Menu items</div>
				  <div class="panel-body">
					 <div style="text-align: right;margin-bottom: 10px;">
						   <a class="btn btn-primary" href="{{URL::to('/admin/menu/add')}}">Thêm mới</a>
						</div>
						<div class="table-responsive">
						   <table class="table table-striped table-bordered table-hover">
							  <thead style="border-top:1px solid #dee2e6;">
							  <tr>
								 <th>Tên</th>
								 <th style="width: 10%;text-align: center;">STT</th>
								 <th style="width: 15%;text-align: center;">Tùy chỉnh</th>
							  </tr>
							  </thead>
							  <tbody>
							  <?php showCategories($all_menus)?>
							  </tbody>
						   </table>
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
//cat_detail
function showCategories($categories,$parent_id=0,$char=''){
   foreach ($categories as $key=>$item){
	  $links='';
	  //Nếu là chuyên mục con thì hiển thị
	  if($item->parent_id==$parent_id){
		 if($item->parent_id!=0){ $links='<a title="Đường dẫn trang" target="_blank" href="#">'.$item->title.'</a>'; }else{ $links='<b>'.$item->title.'</b>'; }
		 $strbg=$item->status==0?' style="background:#dedede;"':'';
		 $linkedit=route('admin.menu.edit',array($item->id,$item->parent_id));
		 $link_del=" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Bạn có thật sự muốn xóa?')\"  href=\"".route('admin.menu.delete',array($item->id)) ."\" ";
		 echo '<tr '.$strbg.'><td>'.$char.$links.'</td><td style="text-align: center;">'.$item->position.'</td><td style="text-align: center;"><a class="btn btn-primary btn-sm" href="'.$linkedit.'"><i class="fa fa-edit"></i> Sửa</a> &nbsp; <a '.$link_del.'><i class="fa fa-trash"></i> Xóa</a></td></tr>';
		 unset($categories[$key]);
		 //Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
		 showCategories($categories,$item->id,$char.' --- ');
	  }
   }
}
?>
