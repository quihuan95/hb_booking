@extends('dashboard')
@section('admin_content')
<div class="main-content">
   <nav class="main-breadcrumb" aria-label="breadcrumb">
	  <ol class="breadcrumb">
		 <li class="breadcrumb-item"><a href="{!! route('admin.show.dashboard') !!}"><i class="fa fa-home"></i> Dashboard</a></li>
		 <li class="breadcrumb-item ">
			<a href="{!! route('admin.rec.list') !!}">Tuyển dụng</a>
		 </li>
		 <li class="breadcrumb-item active">
			Quản lý tuyển dụng
		 </li>
	  </ol>
   </nav>
   <div id="menu-app" data-id="1" class="container-fluid">
	  <div class="row">
		 <div class="col-md-12 col-xl-12">
			<div class="lang-content-box">
			   <div class="panel">
				  <div class="panel-title">Danh sách tuyển dụng</div>
				  <div class="panel-body">
					 <div style="text-align: right;margin-bottom: 10px;">
						   <a class="btn btn-primary" href="{!! route('admin.rec.insert') !!}">Thêm mới</a>
						</div>
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead style="border-top:1px solid #dee2e6;">
								<tr>
									<th style="width: 5%;text-align:center;">STT</th>
									<th>Tiêu đề</th>
									<th style="width: 10%;text-align: center;">Ngày tạo</th>
									<th style="width: 14%;text-align: center;">Tùy chỉnh</th>
								</tr>
								</thead>
								<tbody>
									<?php $count=0;?>
								@foreach($all_recruitment as $key => $val)
								<?php $count++;?>
									<tr class="odd gradeX">
										<td style="text-align:center;">
											<?php echo $count; ?>
										</td>
										<td>
										<a href="{!! route('admin.rec.edit',array($val->id)) !!}">{{ $val->title }}</a> <a target="_blank" href="{!! route('tuyen.dung',array($val->slug)) !!}"><i class="fa fa-external-link-square" aria-hidden="true"></i></a>
										
										</td>
										<td style="text-align:center;vertical-align: middle;">
											<?php $dateObject = date('d/m/Y', strtotime($val->created_at)); 
											 echo $dateObject;?>
										</td>
										<td class="center" style="text-align: center;vertical-align: middle;">
											<a href="{!! route('admin.rec.edit',array($val->id)) !!}"><i class="fa fa-edit"></i> Sửa</a> | <a onclick="return confirm('Bạn có thật sự muốn xóa?')" href="{!! route('admin.rec.delete',array($val->id)) !!}"><i class="fa fa-trash"></i> Xóa</a></td>
									</tr>
								@endforeach
						
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
			$message=Session::get('message');
			if($message){
				echo '<script type="text/javascript">updateSuccess("'.$message.'");</script>';
				$message=Session::put('message',null);
			}
			?>
@endsection
