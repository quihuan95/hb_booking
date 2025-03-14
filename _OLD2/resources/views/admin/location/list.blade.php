@extends('dashboard')
@section('admin_content')
<div class="main-content">
		<nav class="main-breadcrumb" aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{!! route('admin.show.dashboard') !!}"><i class="fa fa-home"></i> Dashboard</a></li>
<li class="breadcrumb-item "><a href="{!! route('admin.location.list') !!}">Location</a></li>
<li class="breadcrumb-item active">All</li>
			
	</ol>
</nav>
			<div class="container-fluid">
		<div class="d-flex justify-content-between mb20">
			<h1 class="title-bar">Location</h1>
		</div>
				<div class="row">
			<div class="col-md-4 mb40">
				<div class="panel">
					<div class="panel-title">Add Location</div>
					<div class="panel-body panel-index">
						<form action="{!! route('admin.location.postcreate') !!}" method="post">
							{{ csrf_field() }}
<div class="form-group">
	<label>Tên địa điểm</label>
	<input type="text" value="" placeholder="Location name"  name="name" id="name" class="form-control">
</div>
<div class="form-group">
<label>Slug </label>
	  <input type="text" required name="slug" id="slug" class="form-control" placeholder="Slug">
</div>
	<div class="form-group">
		<label>Parent</label>
		<select name="parent_id" class="form-control">
			<option value="0">-- Please Select --</option>  
			<?php showCategories($all_location)?>
		</select>
	</div>
	<div class="form-group">
		<label class="control-label">Thứ tự</label>
		<div class="">
			<input type="text" value="" placeholder="Thứ tự" name="orders" class="form-control">
		</div>
	</div>                            
<div class="form-group">
	<label class="control-label">Mô tả</label>
	<div class="">
		<textarea class="form-control my-editor" placeholder="Mô tả" name="desc" id="ckeditor" rows="5"></textarea>
	</div>
</div>                            
<div class="form-group form-index-hide">
								<label class="control-label">Location Map</label>
								<div class="control-map-group"></div>
							</div>
							<div class="">
								<button class="btn btn-primary" type="submit">Add new</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="filter-div d-flex justify-content-between ">
					<div class="col-left">
													<form method="post" action="https://hoabinhbooking.com/admin/module/location/editBulk" class="filter-form filter-form-left d-flex justify-content-start">
								<input type="hidden" name="_token" value="YArMcQJcKNS3G0jFna6yjd08I06Z1HQ2z8P5yyjo">

								<select name="action" class="form-control">
									<option value=""> Bulk Action </option>
									<option value="publish"> Publish </option>
									<option value="draft"> Move to Draft </option>
									<option value="featured"> Set Featured</option>
									<option value="unfeatured"> Set UnFeatured</option>	
									<option value="delete"> Delete </option>
								</select>
								<button data-confirm="Do you want to delete?" class="btn-info btn btn-icon dungdt-apply-form-btn" type="button">Đồng ý</button>
							</form>
											</div>
					<div class="col-left">
						<form method="get" action="https://hoabinhbooking.com/admin/module/location" class="filter-form filter-form-right d-flex justify-content-end" role="search">
							<input type="text" name="s" value="" class="form-control" placeholder="Search by name">
							<button class="btn-info btn btn-icon btn_search" id="search-submit" type="submit">Tìm kiếm</button>
						</form>
					</div>
				</div>
				<div class="panel">
					<div class="panel-body">
						<form action="" class="bravo-form-item">
							<table class="table table-hover">
								<thead>
								<tr>
									<th width="60px"><input type="checkbox" class="check-all"></th>
									<th>Tên địa điểm</th>
									<th style="width:100px;" class="status">Status</th>
									<th class="date" style="width:200px;">Date</th>
								</tr>
								</thead>
								<tbody>
									<?php showCategoriesList($all_location_right); ?>
								</tbody>
							</table>
						</form>
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
function showCategories($categories,$parent_id=0,$char=''){
	foreach ($categories as $key=>$item){
//Nếu là chuyên mục con thì hiển thị
		if($item->parent_id==$parent_id){
			echo '<option value="'.$item->id.'">'.$char.$item->title.' [ stt: '.$item->orders.']</option>';
			unset($categories[$key]);
			//Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
			showCategories($categories,$item->id,$char.' --- ');
		}
	}
}
function showCategoriesList($categories,$parent_id=0,$char=''){
	foreach ($categories as $key=>$item){
//Nếu là chuyên mục con thì hiển thị
		if($item->parent_id==$parent_id){
			$sss='';
			if($item->status=='A'){ $sss='<span class="badge badge-publish">Publish</span>'; }
			else{ $sss='<span class="badge badge-draft">Draft</span>'; }
			$title=$parent_id==0?'<a href="#"> '.$char.$item->title.'</a>':'<a style="font-weight: normal;" href="#"> '.$char.$item->title.'</a>';
			
			$list='<tr>
				<td><input type="checkbox" name="ids[]" value="'.$item->id.'" class="check-item"></td>
				<td class="title"><a href="#"> '.$title.'</a></td>
				<td style="width:100px;">'.$sss.'</td>
				<td class="d-none d-md-block" style="text-align:right;">
					'.$item->created_at.'
				</td>
			</tr>';
			echo $list;
			unset($categories[$key]);
			//Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
			showCategoriesList($categories,$item->id,$char.' -- ');
		}
	}
}

?>