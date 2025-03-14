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
			Quản lý tin tức
		 </li>
	  </ol>
   </nav>
   <div id="menu-app" data-id="1" class="container-fluid">
	  <div class="row">
		 <div class="col-md-12 col-xl-12">
			<div class="lang-content-box">
			   <div class="panel">
				  <div class="panel-title">Danh sách tin tức</div>
				  <div class="panel-body">
					 <div style="text-align: right;margin-bottom: 10px;">
						   <a class="btn btn-primary" href="{!! route('admin.news.insert') !!}">Thêm mới</a>
						</div>
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead style="border-top:1px solid #dee2e6;">
								<tr>
									<th style="width: 5%;text-align:center;">STT</th>
									<th style="width: 10%;text-align:center;">Hình ảnh</th>
									<th>Tiêu đề / Nội dung tóm tắt</th>
									<th style="width: 15%;text-align: center;">Trong danh mục</th>
									<th style="width: 10%;text-align: center;">Ngày tạo</th>
									<th style="width: 14%;text-align: center;">Tùy chỉnh</th>
								</tr>
								</thead>
								<tbody>
									<?php $count=0;?>
								@foreach($all_news as $key => $val)
								<?php $count++;?>
									<tr class="odd gradeX">
										<td style="text-align:center;">
											<?php echo $count; ?>
										</td>
										<td style="text-align:center;">
											@if($val->picture!='')
											<img style="max-width: 100%;" src="{{ $val->picture }}">
											@endif
										</td>
										<td>
										<a href="{{URL::to('/admin/news/edit/'.$val->id )}}">{{ $val->title }}</a> <a target="_blank" href="{!! route('news.details',array($val->slug)) !!}"><i class="fa fa-external-link-square" aria-hidden="true"></i></a>
										<br/>
										{{ $val->news_desc }}
										</td>
										<td style="text-align:center;vertical-align: middle;">
										<?php
										  $render_menu_top=App\Models\News::fnRenderCatalog($val->fk_cat,$val->id);
										  echo $render_menu_top;
									   ?>
										</td>
										<td style="text-align:center;vertical-align: middle;">
											<?php $dateObject = date('d/m/Y', strtotime($val->created_at)); 
											 echo $dateObject;?>
										</td>
										<td class="center" style="text-align: center;vertical-align: middle;">
											<?php
											if($val->status==0){ ?>
											<a title="Ẩn" href="{!! route('admin.news.active.atc',array($val->id)) !!}"><i style="font-size:18px;" class="fa fa-eye-slash" aria-hidden="true"></i></a>
											<?php
											}else{ ?>
											<a title="Hiển thị" href="{!! route('admin.news.active.atc',array($val->id)) !!}"><i style="font-size:18px;" class="fa fa-eye" aria-hidden="true"></i></a>
											<?php
											}
											?> |
											<a href="{!! route('admin.news.edit',array($val->id)) !!}"><i class="fa fa-edit"></i> Sửa</a> | <a onclick="return confirm('Bạn có thật sự muốn xóa?')" href="{!! route('admin.news.delete',array($val->id)) !!}"><i class="fa fa-trash"></i> Xóa</a></td>
									</tr>
								@endforeach
						
								</tbody>
							</table>
						</div>
						<div class="sppb-row" style="text-align:right;display: block;">
										  <p style="text-align:right;">
											 <nav aria-label="Page navigation">
												{!! $all_news->links() !!}
											</nav>
											 </p>
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
@endsection
