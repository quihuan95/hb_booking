@extends('layout')
@section('content')
<style type="text/css">
	.jsc11 h1{ color: #fff;text-align: center; }
	.wappageslocation{ background: #fff!important; }
	.panel-heading{
		background: #052251 !important;
		color: #fff !important;
		text-transform: uppercase !important;
		text-align: center !important;
		border-top: 4px solid #f0af09 !important;
	}
	
	.list-group-item{
		border: none;
		padding: 0px !important;
	}
	
	.louis-list-item{
		height: 70px;
	}
	.louis-list-item img{
		width: 80px;
		float: left;
		margin-right: 10px;
		/*height: 56px; */
		height: 52px;
	}
	.louis-list-item p{
		font-size: 12px;
	
	}
	.louis-list-item a{
		color: #384776;
		font-weight: bold;
		margin-top: -5px;
		position: relative;
		top: -5px;
	}
	
	.louis-list-item .time{
		margin-top: -5px;
		display: block;
	}
	
	.louis-list-category{
		padding: 5px;
		margin-bottom: 3px;
	}
	
	.louis-list-category a{
		color: #052251;
		font-weight: bold;
		padding: 10px 30px;
		display: block;
		background: #F5F5F5;
	}
	#join-filter .list-body{
		padding-left: 0px;
	}
	
	#join-filter .list-body li{
		list-style-type: none;
		padding: 8px 0px;
		display: flex;
		justify-content: space-between;
	}
	
	#latest-news a.title-href{
			color: #05235F;
			font-weight: bold;
			margin: 10px 0px;
			display: block;
	}
	
	#latest-news div.date{
			color: #b6b9b9;
	
	}
	.panel-title {
		font-size: 18px;
		font-weight: bold;
		color: #052251;
	}
	.panel-title a{ color: red !important;text-decoration: none; }
	.panel-body{ padding: 15px; }
	.panel-body p{ margin: 0 0 10px; }
	.button-join{ text-align: center;
		background: #F0AF09;
		padding: 1px;
		font-size: 0.9em;
		font-weight: bold;
		margin-top: 50px; }
	.button-join a{ text-decoration: none; }
	.item-join {
		border-bottom: 1px solid #e8e9e9;
		margin-bottom: 20px;
	}
	.panel-default {
		border-color: #ddd;
	}
	.panel {
		margin-bottom: 20px;
		background-color: #fff;
		border: 1px solid transparent;
		border-radius: 4px;
		box-shadow: 0 1px 1px rgba(0,0,0,.05);
	}
	.button-join-ask {
		width: 280px;
		background: #052251;
		color: #fff;
		display: block;
		padding: 5px;
		border: none;
		width: 100%;
		padding-top: 8px;
		cursor: pointer;
	}
	.form-group {
		margin-bottom: 15px;
	}
	.ttr{ padding: 10px 0;margin-top: -95px; }
</style>
<div class="wappageslocation">
	<div style="background:url(https://hoanghaihotel.vn/Data/images/tintuc/10032021170917-gioi-thieu-ve-khach-san-hoang-hai.jpg) no-repeat top left;background-size: cover;margin-bottom:15px;">
		<p style="margin:0px;padding:0px;">&nbsp;</p>
		<div class="toppages">
			<div class="jsc11" style="top:40px;">
				<h1>Tuyển dụng</h1>
			</div>
		</div>
		
		
		<div style="width:100%;height:40px;clear:both;"></div>
	</div>
<div>
		
	<div class="container">
		<div class="row">
			<div class="nav-vh">
				<ul>
					<li><a href="/">Trang chủ</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li><span>Tuyển dụng</span></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div style="width:100%;height:20px;clear:both;"></div>
	<div>
		
	<div class="container">
		<div class="news_details">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12 boxlmb">
					<div class="join-description">
					   <div id="join-info">
						   @foreach($data as $k=>$v)
						   <div class="item-join">
								<div class="panel-title title-featured">
								   <a href="{!! route('tuyen.dung.detail',array($v->slug)) !!}">
									  <img src="https://hoabinhbooking.test/icon/hot-red.png">
									  {!! $v->title !!}
								   </a>
								</div>
								<div class="row">
								   <div class="col-md-10">
									  <div class="container-fluid">
										 <div class="panel-body">
											<div class="col-md-12">
											   <p>
												  <i class="fa fa-user" aria-hidden="true"></i>
												  <b>Số lượng</b>: {!! $v->quantity !!} &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-clock-o" aria-hidden="true"></i>
												  <b>Hạn tuyển dụng</b>: {!! $v->deadline !!}
											   </p>
											   <p>
												  <i class="fa fa-map-marker" aria-hidden="true"></i>
												  <b>Địa điểm làm việc</b>: <span title="{!! $v->work_location !!}">{!! $v->work_location !!}</span>
											   </p>
											   <p>
												  <i class="fa fa-home" aria-hidden="true"></i>
												  <b>Công ty</b>: {!! $v->company !!}                 
											   </p>
											   <p>
												  <i class="fa fa-newspaper-o" aria-hidden="true"></i>
												  <b>Nhóm ngành nghề</b>: {!! $v->industry_group !!}             
											   </p>
											</div>
										 </div>
									  </div>
								   </div>
								   <div class="col-md-2">
									  <div class="button-join">
										 <a style="color:#05235F" href="{!! route('tuyen.dung.detail',array($v->slug)) !!}">XEM CHI TIẾT</a>
									  </div>
								   </div>
								</div>
							 </div>
						   @endforeach
					   </div>
					   <div style="clear:both;"></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 boxrmb">
					<div class="row">
					  <div class="col-sm-12 col-md-12">
						<div id="join-filter" class="panel panel-default">
						  <div class="panel-heading ttr">THÔNG TIN LIÊN HỆ</div>
						  <div class="panel-body">
							<ul class="list-body">
								<li><strong>NGƯỜI LIÊN HỆ:</strong><span>Bộ phận tuyển dụng Hà Nội</span></li>
								<li><strong>ĐIỆN THOẠI:</strong><span>0919099566</span></li>
					  <li><strong>EMAIL:</strong><span>Hr@hoabinh-group.com</span></li>
								<li><strong>ĐỊA CHỈ CÔNG TY:</strong><span>27 - 29 Đoàn Thị Điểm - Đống Đa - Hà Nội</span></li>
								
							</ul>
						  </div>
						  <!-- <div class="panel-footer">Panel Footer</div>-->
						</div>
					  </div>
					</div>
					<div class="row">
					  <div class="col-sm-12 col-md-12">
						<div id="ul-tags" class="panel panel-default">
						  <div class="panel-body">
							<div class="form-group">
							  <input onclick="updating();" type="submit" value="HỎI ĐÁP FAQ" class="button-join-ask form-control">
							</div>
							<input onclick="updating();" type="submit" value="TẢI MẪU ĐƠN ỨNG TUYỂN" class="button-join-ask form-control">
						  </div>
						  <!-- <div class="panel-footer">Panel Footer</div>-->
						</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<p style="margin:0px;padding:0px;">&nbsp;</p>
</div>
@endsection
