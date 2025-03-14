@extends('layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
<style type="text/css">
	.slick-prev,.slick-next{ z-index: 99999; }
	.slick-prev:before, .slick-next:before{ font-size: 30px;color: #0d6efd; }
	.wap-ss-img img{ display: block;width: 110px;height: 110px;border-radius: 100%;margin: 0 auto; }
	.textleft{ text-align: center; }
	.titlelocation{ font-weight: bold;font-size: 22px; }
	.f__b__l{ width: 96%!important; }
</style>

<div class="wappageslocation">
	<div style="background:url(https://hoanghaihotel.vn/Data/images/tintuc/10032021170917-gioi-thieu-ve-khach-san-hoang-hai.jpg) no-repeat bottom left;background-size: cover;margin-bottom:15px;height:515px;">
		<p style="margin:0px;padding:0px;">&nbsp;</p>
		<div class="toppages">
			<div class="jsc11" style="top:110px;">
				<div class="container" style="margin-bottom:5px;">
					<span style="color:#fff;font-size:28px;font-weight:bold;">Khách sạn</span>
				</div>
				@include('inc.search')
				<div class="container" style="margin-top:15px;">
					<span style="color:#fff;font-size:28px;font-weight:bold;">Đăng nhập để nhận thêm ưu đãi 15%<br/>khi đặt phòng khách sạn</span><br/>
					<a style="padding:10px 25px;margin-top:25px;" href="https://hoabinhbooking.com/partnership" class="btn btn-primary">Đăng nhập / Đăng ký</a>
				</div>
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
					<li><span>Khách sạn</span></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div style="width:100%;height:20px;clear:both;"></div>
	<div>
		<div class="container">
			<p>&nbsp;</p>
			<div class="titlelocation">Khách sạn theo địa điểm</div>
			<p style="margin:0px;padding:0px;">&nbsp;</p>
			<div id="wapper">
						<div class="row filtering">
			<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="row">
							<div class="wap-items-ss brbox">
								<div class="wap-ss-img">
									<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tripi-assets/mytour/images/locations/binh-dinh.png">
								</div>
							<div class="textleft">
								<div style="margin-top:10px;">Bình Định</div>
								
							</div>
							</div>
						</div>
					</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
								<div class="wap-items-ss brbox">
									<div class="wap-ss-img">
										<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tripi-assets/mytour/images/locations/can-tho.png">
									</div>
								<div class="textleft">
									<div style="margin-top:10px;">Cần Thơ</div>
									
								</div>
								</div>
							</div>
						</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="row">
									<div class="wap-items-ss brbox">
										<div class="wap-ss-img">
											<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tripi-assets/mytour/images/locations/hue.png">
										</div>
									<div class="textleft">
										<div style="margin-top:10px;">Thừa Thiên - Huế</div>
										
									</div>
									</div>
								</div>
							</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row">
										<div class="wap-items-ss brbox">
											<div class="wap-ss-img">
												<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tourcdn/destinations/ninh-binh.jpg">
											</div>
										<div class="textleft">
											<div style="margin-top:10px;">Ninh Bình</div>
											
										</div>
										</div>
									</div>
								</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="row">
											<div class="wap-items-ss brbox">
												<div class="wap-ss-img">
													<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tripi-assets/mytour/images/locations/quang-binh.png">
												</div>
											<div class="textleft">
												<div style="margin-top:10px;">Quảng Bình</div>
												
											</div>
											</div>
										</div>
									</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="row">
											<div class="wap-items-ss brbox">
												<div class="wap-ss-img">
													<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tripi-assets/mytour/images/locations/thanh-hoa.png">
												</div>
											<div class="textleft">
												<div style="margin-top:10px;">Thanh Hóa</div>
											</div>
											</div>
										</div>
									</div>
							
			<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="row">
												<div class="wap-items-ss brbox">
													<div class="wap-ss-img">
														<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tourcdn/destinations/ha-giang.jpg">
													</div>
												<div class="textleft">
													<div style="margin-top:10px;">Hà Giang</div>
												</div>
												</div>
											</div>
										</div>
							
			<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="row">
													<div class="wap-items-ss brbox">
														<div class="wap-ss-img">
															<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tripi-assets/mytour/images/locations/phu-yen.png">
														</div>
													<div class="textleft">
														<div style="margin-top:10px;">Phú Yên</div>
													</div>
													</div>
												</div>
											</div>
							
			<div class="col-md-12 col-sm-12 col-xs-12">
												<div class="row">
														<div class="wap-items-ss brbox">
															<div class="wap-ss-img">
																<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tripi-assets/mytour/images/locations/tam-dao.png">
															</div>
														<div class="textleft">
															<div style="margin-top:10px;">Tam Đảo</div>
															
														</div>
														</div>
													</div>
												</div>
												
			<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="row">
															<div class="wap-items-ss brbox">
																<div class="wap-ss-img">
																	<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tourcdn/destinations/hoa-binh.jpg">
																</div>
															<div class="textleft">
																<div style="margin-top:10px;">Hòa Bình</div>
																
															</div>
															</div>
														</div>
													</div>
												
			<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="row">
															<div class="wap-items-ss brbox">
																<div class="wap-ss-img">
																	<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tourcdn/destinations/ninh-thuan.jpg">
																</div>
															<div class="textleft">
																<div style="margin-top:10px;">Ninh Thuận</div>
																
															</div>
															</div>
														</div>
													</div>
											
			<div class="col-md-12 col-sm-12 col-xs-12">
														<div class="row">
																<div class="wap-items-ss brbox">
																	<div class="wap-ss-img">
																		<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tourcdn/destinations/an-giang.jpg">
																	</div>
																<div class="textleft">
																	<div style="margin-top:10px;">An Giang</div>
																</div>
																</div>
															</div>
														</div>
											
			<div class="col-md-12 col-sm-12 col-xs-12">
															<div class="row">
																	<div class="wap-items-ss brbox">
																		<div class="wap-ss-img">
																			<img alt="" src="https://img.tripi.vn/cdn-cgi/image/width=320,height=320/https://storage.googleapis.com/tripi-assets/mytour/images/locations/nghe-an.png">
																		</div>
																	<div class="textleft">
																		<div style="margin-top:10px;">Nghệ An</div>
																	
																	</div>
																	</div>
																</div>
															</div>
											
		</div>
				  </div>   
		</div>
		<p>&nbsp;</p>
	<div class="container">
		<p>&nbsp;</p>
		<div class="titlelocation">Các khách sạn độc quyền trên Hòa Bình Booking</div>
		<p style="margin:0px;padding:0px;">&nbsp;</p>
		<div id="wapper2">
			<div class="row filtering22">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="f__b__l">
						<div class="f__b__l_1_1">
							<a href="https://hoabinhbooking.com/khach-san/khach-san-diamond-legend.html">
							<img alt="public/uploads/img/21952662399.jpg" src="/public/uploads/img/21952662399.jpg">
							</a>
						</div>
						<div class="f__b__l_1_2">
							<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-diamond-legend.html">Khách Sạn Diamond Legend</a></h3>
							<div class="f__b__l_1_3">
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="f__b__l_1_4">
								<i class="fa fa-map-marker" aria-hidden="true"></i> Thành Phố Hà Nội
							</div>
							<div class="f__b__l_1_5">
								<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
							</div>
							<div class="f__b__l_1_6">
								<p><span class="f__b__l_1_7">1.225.308đ</span></p>
								<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="f__b__l">
						<div class="f__b__l_1_1">
							<a href="https://hoabinhbooking.com/khach-san/khach-san-caravelle-sai-gon.html">
							<img alt="public/uploads/img/177238220.jpg" src="/public/uploads/img/177238220.jpg">
							</a>
						</div>
						<div class="f__b__l_1_2">
							<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-caravelle-sai-gon.html">Khách Sạn Caravelle Sài Gòn</a></h3>
							<div class="f__b__l_1_3">
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="f__b__l_1_4">
								<i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh
							</div>
							<div class="f__b__l_1_5">
								<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
							</div>
							<div class="f__b__l_1_6">
								<p><span class="f__b__l_1_7">1.225.308đ</span></p>
								<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="f__b__l">
						<div class="f__b__l_1_1">
							<a href="https://hoabinhbooking.com/khach-san/khach-san-flc-grand-sam-son.html">
							<img alt="public/uploads/img/da91511235544_khach_san_flc_grand_sam_son26.jpg" src="/public/uploads/img/da91511235544_khach_san_flc_grand_sam_son26.jpg">
							</a>
						</div>
						<div class="f__b__l_1_2">
							<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-flc-grand-sam-son.html">Khách Sạn FLC Grand Sầm Sơn</a></h3>
							<div class="f__b__l_1_3">
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="f__b__l_1_4">
								<i class="fa fa-map-marker" aria-hidden="true"></i> Thanh Hóa
							</div>
							<div class="f__b__l_1_5">
								<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
							</div>
							<div class="f__b__l_1_6">
								<p><span class="f__b__l_1_7">1.225.308đ</span></p>
								<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="f__b__l">
						<div class="f__b__l_1_1">
							<a href="https://hoabinhbooking.com/khach-san/khach-san-flc-luxury-sam-son.html">
							<img alt="public/uploads/img/42328_9387DUY8WP_flc75.jpg" src="/public/uploads/img/42328_9387DUY8WP_flc75.jpg">
							</a>
						</div>
						<div class="f__b__l_1_2">
							<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-flc-luxury-sam-son.html">Khách Sạn FLC Luxury Sầm Sơn</a></h3>
							<div class="f__b__l_1_3">
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="f__b__l_1_4">
								<i class="fa fa-map-marker" aria-hidden="true"></i> Thanh Hóa
							</div>
							<div class="f__b__l_1_5">
								<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
							</div>
							<div class="f__b__l_1_6">
								<p><span class="f__b__l_1_7">1.225.308đ</span></p>
								<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-------------------------------------------------->
				<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="f__b__l">
							<div class="f__b__l_1_1">
								<a href="https://hoabinhbooking.com/khach-san/khach-san-diamond-legend.html">
								<img alt="public/uploads/img/21952662399.jpg" src="/public/uploads/img/21952662399.jpg">
								</a>
							</div>
							<div class="f__b__l_1_2">
								<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-diamond-legend.html">Khách Sạn Diamond Legend</a></h3>
								<div class="f__b__l_1_3">
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="f__b__l_1_4">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Thành Phố Hà Nội
								</div>
								<div class="f__b__l_1_5">
									<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
								</div>
								<div class="f__b__l_1_6">
									<p><span class="f__b__l_1_7">1.225.308đ</span></p>
									<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
								</div>
							</div>
						</div>
					</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="f__b__l">
							<div class="f__b__l_1_1">
								<a href="https://hoabinhbooking.com/khach-san/khach-san-caravelle-sai-gon.html">
								<img alt="public/uploads/img/177238220.jpg" src="/public/uploads/img/177238220.jpg">
								</a>
							</div>
							<div class="f__b__l_1_2">
								<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-caravelle-sai-gon.html">Khách Sạn Caravelle Sài Gòn</a></h3>
								<div class="f__b__l_1_3">
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="f__b__l_1_4">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh
								</div>
								<div class="f__b__l_1_5">
									<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
								</div>
								<div class="f__b__l_1_6">
									<p><span class="f__b__l_1_7">1.225.308đ</span></p>
									<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
								</div>
							</div>
						</div>
					</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="f__b__l">
							<div class="f__b__l_1_1">
								<a href="https://hoabinhbooking.com/khach-san/khach-san-flc-grand-sam-son.html">
								<img alt="public/uploads/img/da91511235544_khach_san_flc_grand_sam_son26.jpg" src="/public/uploads/img/da91511235544_khach_san_flc_grand_sam_son26.jpg">
								</a>
							</div>
							<div class="f__b__l_1_2">
								<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-flc-grand-sam-son.html">Khách Sạn FLC Grand Sầm Sơn</a></h3>
								<div class="f__b__l_1_3">
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="f__b__l_1_4">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Thanh Hóa
								</div>
								<div class="f__b__l_1_5">
									<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
								</div>
								<div class="f__b__l_1_6">
									<p><span class="f__b__l_1_7">1.225.308đ</span></p>
									<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
								</div>
							</div>
						</div>
					</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="f__b__l">
							<div class="f__b__l_1_1">
								<a href="https://hoabinhbooking.com/khach-san/khach-san-flc-luxury-sam-son.html">
								<img alt="public/uploads/img/42328_9387DUY8WP_flc75.jpg" src="/public/uploads/img/42328_9387DUY8WP_flc75.jpg">
								</a>
							</div>
							<div class="f__b__l_1_2">
								<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-flc-luxury-sam-son.html">Khách Sạn FLC Luxury Sầm Sơn</a></h3>
								<div class="f__b__l_1_3">
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="f__b__l_1_4">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Thanh Hóa
								</div>
								<div class="f__b__l_1_5">
									<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
								</div>
								<div class="f__b__l_1_6">
									<p><span class="f__b__l_1_7">1.225.308đ</span></p>
									<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
								</div>
							</div>
						</div>
					</div>
				<!-------------------------------------------------->
			</div>
			  </div>   
	</div>

<p>&nbsp;</p>
	<div class="container">
		<p>&nbsp;</p>
		<div class="titlelocation">Các khách sạn được tìm kiếm & đặt nhiều nhất trên Hòa Bình Booking</div>
		<p style="margin:0px;padding:0px;">&nbsp;</p>
		<div id="wapper2">
			<div class="row filtering33">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="f__b__l">
						<div class="f__b__l_1_1">
							<a href="https://hoabinhbooking.com/khach-san/khach-san-diamond-legend.html">
							<img alt="public/uploads/img/21952662399.jpg" src="/public/uploads/img/21952662399.jpg">
							</a>
						</div>
						<div class="f__b__l_1_2">
							<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-diamond-legend.html">Khách Sạn Diamond Legend</a></h3>
							<div class="f__b__l_1_3">
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="f__b__l_1_4">
								<i class="fa fa-map-marker" aria-hidden="true"></i> Thành Phố Hà Nội
							</div>
							<div class="f__b__l_1_5">
								<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
							</div>
							<div class="f__b__l_1_6">
								<p><span class="f__b__l_1_7">1.225.308đ</span></p>
								<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="f__b__l">
						<div class="f__b__l_1_1">
							<a href="https://hoabinhbooking.com/khach-san/khach-san-caravelle-sai-gon.html">
							<img alt="public/uploads/img/177238220.jpg" src="/public/uploads/img/177238220.jpg">
							</a>
						</div>
						<div class="f__b__l_1_2">
							<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-caravelle-sai-gon.html">Khách Sạn Caravelle Sài Gòn</a></h3>
							<div class="f__b__l_1_3">
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="f__b__l_1_4">
								<i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh
							</div>
							<div class="f__b__l_1_5">
								<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
							</div>
							<div class="f__b__l_1_6">
								<p><span class="f__b__l_1_7">1.225.308đ</span></p>
								<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="f__b__l">
						<div class="f__b__l_1_1">
							<a href="https://hoabinhbooking.com/khach-san/khach-san-flc-grand-sam-son.html">
							<img alt="public/uploads/img/da91511235544_khach_san_flc_grand_sam_son26.jpg" src="/public/uploads/img/da91511235544_khach_san_flc_grand_sam_son26.jpg">
							</a>
						</div>
						<div class="f__b__l_1_2">
							<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-flc-grand-sam-son.html">Khách Sạn FLC Grand Sầm Sơn</a></h3>
							<div class="f__b__l_1_3">
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="f__b__l_1_4">
								<i class="fa fa-map-marker" aria-hidden="true"></i> Thanh Hóa
							</div>
							<div class="f__b__l_1_5">
								<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
							</div>
							<div class="f__b__l_1_6">
								<p><span class="f__b__l_1_7">1.225.308đ</span></p>
								<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="f__b__l">
						<div class="f__b__l_1_1">
							<a href="https://hoabinhbooking.com/khach-san/khach-san-flc-luxury-sam-son.html">
							<img alt="public/uploads/img/42328_9387DUY8WP_flc75.jpg" src="/public/uploads/img/42328_9387DUY8WP_flc75.jpg">
							</a>
						</div>
						<div class="f__b__l_1_2">
							<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-flc-luxury-sam-son.html">Khách Sạn FLC Luxury Sầm Sơn</a></h3>
							<div class="f__b__l_1_3">
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="f__b__l_1_4">
								<i class="fa fa-map-marker" aria-hidden="true"></i> Thanh Hóa
							</div>
							<div class="f__b__l_1_5">
								<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
							</div>
							<div class="f__b__l_1_6">
								<p><span class="f__b__l_1_7">1.225.308đ</span></p>
								<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
							</div>
						</div>
					</div>
				</div>
				<!-------------------------------------------------->
				<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="f__b__l">
							<div class="f__b__l_1_1">
								<a href="https://hoabinhbooking.com/khach-san/khach-san-diamond-legend.html">
								<img alt="public/uploads/img/21952662399.jpg" src="/public/uploads/img/21952662399.jpg">
								</a>
							</div>
							<div class="f__b__l_1_2">
								<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-diamond-legend.html">Khách Sạn Diamond Legend</a></h3>
								<div class="f__b__l_1_3">
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="f__b__l_1_4">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Thành Phố Hà Nội
								</div>
								<div class="f__b__l_1_5">
									<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
								</div>
								<div class="f__b__l_1_6">
									<p><span class="f__b__l_1_7">1.225.308đ</span></p>
									<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
								</div>
							</div>
						</div>
					</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="f__b__l">
							<div class="f__b__l_1_1">
								<a href="https://hoabinhbooking.com/khach-san/khach-san-caravelle-sai-gon.html">
								<img alt="public/uploads/img/177238220.jpg" src="/public/uploads/img/177238220.jpg">
								</a>
							</div>
							<div class="f__b__l_1_2">
								<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-caravelle-sai-gon.html">Khách Sạn Caravelle Sài Gòn</a></h3>
								<div class="f__b__l_1_3">
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="f__b__l_1_4">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh
								</div>
								<div class="f__b__l_1_5">
									<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
								</div>
								<div class="f__b__l_1_6">
									<p><span class="f__b__l_1_7">1.225.308đ</span></p>
									<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
								</div>
							</div>
						</div>
					</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="f__b__l">
							<div class="f__b__l_1_1">
								<a href="https://hoabinhbooking.com/khach-san/khach-san-flc-grand-sam-son.html">
								<img alt="public/uploads/img/da91511235544_khach_san_flc_grand_sam_son26.jpg" src="/public/uploads/img/da91511235544_khach_san_flc_grand_sam_son26.jpg">
								</a>
							</div>
							<div class="f__b__l_1_2">
								<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-flc-grand-sam-son.html">Khách Sạn FLC Grand Sầm Sơn</a></h3>
								<div class="f__b__l_1_3">
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="f__b__l_1_4">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Thanh Hóa
								</div>
								<div class="f__b__l_1_5">
									<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
								</div>
								<div class="f__b__l_1_6">
									<p><span class="f__b__l_1_7">1.225.308đ</span></p>
									<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
								</div>
							</div>
						</div>
					</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="f__b__l">
							<div class="f__b__l_1_1">
								<a href="https://hoabinhbooking.com/khach-san/khach-san-flc-luxury-sam-son.html">
								<img alt="public/uploads/img/42328_9387DUY8WP_flc75.jpg" src="/public/uploads/img/42328_9387DUY8WP_flc75.jpg">
								</a>
							</div>
							<div class="f__b__l_1_2">
								<h3><a href="https://hoabinhbooking.com/khach-san/khach-san-flc-luxury-sam-son.html">Khách Sạn FLC Luxury Sầm Sơn</a></h3>
								<div class="f__b__l_1_3">
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
									<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="f__b__l_1_4">
									<i class="fa fa-map-marker" aria-hidden="true"></i> Thanh Hóa
								</div>
								<div class="f__b__l_1_5">
									<i class="fa fa-umbrella" aria-hidden="true"></i> Tuyệt vời (88 đánh giá)
								</div>
								<div class="f__b__l_1_6">
									<p><span class="f__b__l_1_7">1.225.308đ</span></p>
									<p class="f__b__l_1_9"><span class="f__b__l_1_8">1.175.071đ</span></p>
								</div>
							</div>
						</div>
					</div>
				<!-------------------------------------------------->
			</div>
			  </div>   
	</div>


	<p style="margin:0px;padding:0px;">&nbsp;</p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script type="text/javascript">
$('.filtering').slick({
  slidesToShow: 8,
  slidesToScroll: 3,
  autoplay: true,
  cssEase: 'linear',
  arrows:true,
  speed:200
});

$('.filtering22').slick({
  slidesToShow: 4,
  slidesToScroll: 3,
  autoplay: true,
  cssEase: 'linear',
  arrows:true,
  speed:200
});

$('.filtering33').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  cssEase: 'linear',
  arrows:true,
  speed:200
});
</script>
@endsection