<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đặt phòng khách sạn - Hòa Bình Booking</title>
	<base href="https://hoabinhbooking.test/" />
	<link rel='shortcut icon' href='https://cdn.hoabinhevents.com/profiles/favicon-1.ico' />
	<meta property="og:title" content="Đặt phòng ở khách sạn giá rẻ trực tuyến HoaBinh Booking"/>
	<meta property="og:description" content="Phòng ở khách sạn giá rẻ trực tuyến thương hiệu HoaBinh Booking lấy chất lượng đặt lên hàng đầu sẽ không làm bạn thất vọng."/>
	<meta property="og:image" content="https://cdn.hoabinhevents.com/logos/hbb%202-8=cropped.png"/>
	<meta property="og:image:width" content="720" />
	<meta property="og:image:height" content="480" />
	<meta property="og:locale" content="vi" />
	<meta property="og:url" content="https://hoabinhbooking.test">
	<meta property="og:type" content="Đặt phòng khách sạn - Hòa Bình Booking" />
	
	<meta name="subject" content="HoaBinh Booking">
	<meta name="robots" content="index,follow" />
	<meta name="abstract" content="HoaBinh Booking">
	<meta name="topic" content="HoaBinh Booking">
	<meta name="author" content="HoaBinh Booking">
	<meta name="reply-to" content="HoaBinh Booking">
	<meta name="owner" content="HoaBinh Booking">
	
	<meta name="title" property="og:title" content="Đặt phòng ở khách sạn giá rẻ trực tuyến HoaBinh Booking" />
	<meta name="keywords" property="og:keywords" content="phòng ở khách sạn, phòng ở khách sạn giá rẻ, HoaBinh Booking" />
	<meta name="description" property="og:description" content="Phòng ở khách sạn giá rẻ trực tuyến thương hiệu HoaBinh Booking lấy chất lượng đặt lên hàng đầu sẽ không làm bạn thất vọng." />
	
	<meta property="article:author" content="HoaBinh Booking" />
	<meta property="article:publisher" content="HoaBinh Booking" />
	
	<meta name="fb:page_id" content="sanvemaybaygiare.hoabinhtourist" />
	<meta name="fb:app_id" content="125686319174086" />
	<meta name="og:email" content="info@hoabinhtourist.com"/>
	<meta name="og:phone_number" content="0913 311 911"/>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"/>
	
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('libs/calendar/css/t-datepicker.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('libs/calendar/css/t-datepicker-blue.css') }}" rel="stylesheet" type="text/css">
	<style type="text/css">
		.jss5 { object-fit: none; }
		.jss5 video { object-fit: cover; }
		.user_box{ margin-left: 15px;float: right; }
		.user_box a{ color: #fff;font-size: 14px; }
		.user_box a:hover{ text-decoration: none; }
		.acc_box{ position: relative;float: left; }
		.acc_box_2{ width: 220px;height: auto;float: left;position: absolute;z-index: 999;height: 0px;overflow: hidden;left: -50px;border-radius: 0px; }
		.acc_box_2:before{ border-bottom: 10px solid white;border-left: 15px solid transparent;border-right: 15px solid transparent;content: "";display: inline-block;position: absolute;top: 1px;left: 40px;z-index: 99999999; }
		.acc_box_3{ background-color: white;position: absolute;width: 100%;float: left;top: 10px;left: 0px;border-radius: 5px; }
		.t-check-in, .t-check-out{ border-width:0px; }
		.t-dates{ padding: 10px 0px; }
		.panel-body input[type='text'],.panel-body input[type='number'],.panel-body select,.panel-body textarea,.panel-body  hr{ margin-bottom: 10px; }
		
	</style>
	<script type="text/javascript">
		status='false';
		function fnAccount() {
			if (status == "false") {
				$("#acc_box_2").animate({ height: "150px" });
				status = "true";
			}else {
				$("#acc_box_2").animate({ height: "0px" });
				status = "false";
			}
		}
		
		var flag='false';
		function fnShowHidePhong() {
			if (flag == "false") {
				$(".spskpopup").css("display", "block");
				$(".abfullpage").css("display", "block");
				$("#room_over").css("display", "block");
				flag = "true";
			}else{
				$(".spskpopup").css("display", "none");
				$(".abfullpage").css("display", "none");
				$("#room_over").css("display", "none");
				flag = "false";
			}
		}
		function fnHidePhong() {
			$(".spskpopup").css("display", "none");
			$(".abfullpage").css("display", "none");
			$("#room_over").css("display", "none");
			flag = "false";
		}
		
		function fnSubphong() {
			var phong = $('#hdphong').val();
			var adul=$('#hdadult').val();
			 if(phong==1){
				$('#subphong').prop('disabled','disabled');
			 }else{
				 phong--;
				 $('#plusphong').prop('disabled','');
				$(".phong").html(phong); 
				$('#hdphong').val(phong);
			 }
		}

		function fnPlusphong() {
			var phong = $('#hdphong').val();
			var adul=$('#hdadult').val();
			 phong++;
			if(phong>9){
				$('#plusphong').prop('disabled','disabled');
			}else{
				if(phong>2){
					if(adul<9){adul++;}
					$('#hdadult').val(adul);
				}
				$('#subphong').prop('disabled','');
				$(".phong").html(phong); 
				$(".nguoilon").html(adul); 
				$('#hdphong').val(phong);
			
			}
		}
		
		function fnPlusadult() {
			$("#subadult").prop('disabled','');
			var adult=$('#hdadult').val();
			if(adult<36){
				adult++;
				$('#hdadult').val(adult);
				$(".nguoilon").html(adult); 
			}else{
				$("#plusadult").prop('disabled','disabled');
			}
		}
		
		function fnSubadult() {
			var adult=$('#hdadult').val();
			$("#plusadult").prop('disabled','');
			if(adult>1){
				adult--;
				$('#hdadult').val(adult);
				$(".nguoilon").html(adult); 
			}else{
				$("#subadult").prop('disabled','disabled');
			}
		}
		
		function fnPluschildren() {
			var child=$('#hdchild').val();
			$("#subchildren").prop('disabled','');
			if(child<9){
				child++;
				$('#hdchild').val(child);
				$(".treem").html(child); 
			}else{
				$("#pluschildren").prop('disabled','disabled');
			}
		}
		
		function fnSubchildren() {
			$("#subchildren").click(function(){
				var child=$('#hdchild').val();
				$("#pluschildren").prop('disabled','');
				if(child>0){
					child--;
					$('#hdchild').val(child);
					$(".treem").html(child);
				}else{
					$("#subchildren").prop('disabled','disabled');
				}
			 });
		}
		
	</script>
	
</head>
<body>
	<div onclick="fnHidePhong()" class="room_over" id="room_over"></div>
<div class="toppages">
	<div class="menutop">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<a href="/">
						<img class="logo" alt="" src="https://cdn.hoabinhevents.com/logos/hbbooking%204@2x-8-cropped.png"/>
					</a>
				</div>
				<div class="col-md-10 col-sm-10 col-xs-12">
					<div class="___mn">
						<div class="ul_left">
							<div class="sticky-wrapper">
							<nav class="horizontalMenu clearfix d-md-flex">
								<ul class="horizontalMenu-list">
									<?php
										$menu_top=App\Models\Menus::render_menu();
										echo $menu_top;
									?>
								</ul>
							</nav>
							</div>
						</div>
						
						<div class="ul_right">
							<ul>
								<li>
									<a rel="nofollow" href="{!! route('home.partnership') !!}"><img alt="" src="https://hoabinhbooking.test/uploads/handshake.png" style="
										width: 20px;
										color: #fff;
									"> Hợp tác với chúng tôi</a>
								</li>
								<li>
									<div class="user_box">
										<div id="acc_box" class="acc_box">
											<a onclick="fnAccount()" href="javascript:void(0);"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Tài khoản <i class="fa fa-angle-down"></i></a>
											<div class="acc_box_2" id="acc_box_2" style="height: 0px;">
												<div class="acc_box_3">
													<p style="text-align: center;width:100%;margin: 0px;"><a style="width: 92%;margin: 15px 10px;color: #fff;" href="{!! route('home.partnership') !!}" class="btn btn-primary">Đăng nhập</a></p>
													<p style="text-align: center;width:100%;font-size: 11px;">Chưa có tài khoản? <a class="a_acc" style="color: blue;" href="{!! route('home.partnership') !!}">Đăng ký</a> ngay</p>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
	<div class="MuiBox-root jss16 jss5">
		<!--<img alt="" src="{{ asset('frontend/css/images/banner_top.jpg') }}" />-->
		<video width="100%" height="488px" type="video/mp4" autoplay="" muted="" loop=""><source src="frontend/css/images/video-hbbooking-119.mp4">Your browser does not support the video tag.</video>
	</div>
	<div class="jsc11">
		@include('inc.search')
	</div>
</div>
<div class="h35"></div>
<div class="container">
<div class="row">
	<div class="col-md-3 col-sm-3 col-xs-12">
		<div class="box_intro">
			<span class="MuiBox-root jss163"><img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_total_hotel.svg" alt="logo_total_hotel" style="width:52px;height:52px"></span>
			<div class="MuiBox-root jss164 jss160"><span class="MuiBox-root jss165">Hơn 8000+ khách sạn dọc Việt Nam</span><span class="MuiBox-root jss166 jss159">Hàng nghìn khách sạn, đặc biệt là 4 sao và 5 sao, cho phép bạn thoải mái lựa chọn, giá cạnh tranh, phong phú.</span></div>
		</div>
	</div>
	<div class="col-md-3 col-sm-3 col-xs-12">
		<div class="box_intro">
			<span class="MuiBox-root jss163"><img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_best_price.svg" alt="logo_total_hotel" style="width:52px;height:52px"></span>
			<div class="MuiBox-root jss164 jss160"><span class="MuiBox-root jss165">Giá tốt sát ngày</span><span class="MuiBox-root jss166 jss159">Cam kết giá tốt nhất khi đặt gần ngày cho chuyến đi của bạn.</span></div>
		</div>
	</div>
	<div class="col-md-3 col-sm-3 col-xs-12">
		<div class="box_intro">
			<span class="MuiBox-root jss163"><img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_support_247.svg" alt="logo_total_hotel" style="width:52px;height:52px"></span>
			<div class="MuiBox-root jss164 jss160"><span class="MuiBox-root jss165">Hỗ trợ khách hàng 24/7
</span><span class="MuiBox-root jss166 jss159">Chat là có, gọi là nghe, không quản đêm hôm, ngày nghỉ và ngày lễ.</span></div>
		</div>
	</div>
	<div class="col-md-3 col-sm-3 col-xs-12">
		<div class="box_intro">
			<span class="MuiBox-root jss163"><img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_payment.svg" alt="logo_total_hotel" style="width:52px;height:52px"></span>
			<div class="MuiBox-root jss164 jss160"><span class="MuiBox-root jss165">Thanh toán dễ dàng, đa dạng</span><span class="MuiBox-root jss166 jss159">Bao gồm thêm chuyển khoản ngân hàng và tiền mặt tại cửa hàng.</span></div>
		</div>
	</div>
</div>
</div>

<div class="h35"></div>
<div class="bestsale">
	<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="title">Chỗ nghỉ bán chạy nhất</div>
			<div class="sub-title">Top chỗ nghỉ được quan tâm nhất</div>
		</div>
	</div>
	<div class="row">
		@foreach($cho_nghi_ban_chay_nhat as $k=>$v)
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="f__b__l">
				<div class="f__b__l_1_1">
					<a href="{!! route('khachsan.details',array($v->slug)) !!}">
					{!! \App\Models\FileHelper::isImgs($v->image_id) !!}
					</a>
				</div>
				<div class="f__b__l_1_2">
					<h3><a href="{!! route('khachsan.details',array($v->slug)) !!}">{!! $v->title !!}</a></h3>
					<div class="f__b__l_1_3">
						<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
						<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
						<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
						<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
						<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
					</div>
					<div class="f__b__l_1_4">
						<i class="fa fa-map-marker" aria-hidden="true"></i> {!! \App\Models\FileHelper::fnLocation($v->id) !!}
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
		@endforeach
		
	</div>
	</div>
</div>

<div class="h35"></div>
<div class="bestsale" style="background: #fff!important;">
	<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="title">Điểm đến ưa thích</div>
			<div class="sub-title">Top địa điểm du lịch hấp dẫn, không thể bỏ lỡ</div>
		</div>
	</div>
	<div>
		<div class="row">
		   <div class="col-lg-3 col-md-6">
			  <div class="destination-item ">
				 <a href="https://hoabinhbooking.test/k/vung-tau">
					<div class="image" style="background: url(https://thangmuoihotel.vn/wp-content/uploads/2019/08/vung-tau.jpg)">
					   <div class="effect"></div>
					   <div class="content">
						  <h4 class="title">Vũng Tàu</h4>
						  <div class="desc">14 Hotels</div>
					   </div>
					</div>
				 </a>
			  </div>
		   </div>
		   <div class="col-lg-3 col-md-6">
			  <div class="destination-item ">
				 <a href="https://hoabinhbooking.test/k/phu-quoc">
					<div class="image" style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Bai-sao-phu-quoc-tuonglamphotos.jpg/1200px-Bai-sao-phu-quoc-tuonglamphotos.jpg)">
					   <div class="effect"></div>
					   <div class="content">
						  <h4 class="title">Phú Quốc</h4>
						  <div class="desc">12 Hotels</div>
					   </div>
					</div>
				 </a>
			  </div>
		   </div>
		   <div class="col-lg-3 col-md-6">
			  <div class="destination-item ">
				 <a href="https://hoabinhbooking.test/k/ho-chi-minh">
					<div class="image" style="background: url(https://cdnimg.vietnamplus.vn/t1200/Uploaded/ngtmbh/2021_10_24/ttxvn_du_lich_tphcm.jpg)">
					   <div class="effect"></div>
					   <div class="content">
						  <h4 class="title">Hồ Chí Minh</h4>
						  <div class="desc">12 Hotels</div>
					   </div>
					</div>
				 </a>
			  </div>
		   </div>
		   <div class="col-lg-3 col-md-6">
			  <div class="destination-item ">
				 <a href="https://hoabinhbooking.test/k/da-lat">
					<div class="image" style="background: url(https://antuongxuyenviet.com/wp-content/uploads/2019/11/du-lich-da-lat-1-1.jpg)">
					   <div class="effect"></div>
					   <div class="content">
						  <h4 class="title">Đà Lạt</h4>
						  <div class="desc">28 Hotels</div>
					   </div>
					</div>
				 </a>
			  </div>
		   </div>
		   
		</div>
	</div>
	</div>
</div>
<div class="h35"></div>
<div class="bestsale" style="background: #fff!important;">
	<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="title">Cảm hứng cho những chuyến đi</div>
			<div class="sub-title">Bí quyết du lịch, những câu chuyện thú vị đang chờ đón bạn</div>
		</div>
	</div>
	<div>
		<div class="row">
			<?php $count=0;$str_content_right=''; ?>
			@foreach($cam_hung_cho_moi_chuyen_di as $kch=>$vch)
			<?php $count++;
			if($count==1){
			?>
			<div class="col-md-6 col-sm-6 col-xs-12">
				   <div class="bi_quyet_du_lich_8811">
					   <div class="bi_quyet_du_lich_8816">
						   <a href="{!! route('news.details',array($vch->slug)) !!}"><img alt="{!! $vch->title !!}" src="{!! $vch->picture !!}"/></a>
					   </div>
					   <div class="bi_quyet_du_lich_8813">
						   <h3><a href="{!! route('news.details',array($vch->slug)) !!}">{!! $vch->title !!}</a></h3>
					   </div>
				   </div>
			   </div>
			<?php	
			}else{
				$str_content_right.='<div class="col-md-6 col-sm-6 col-xs-12">
						  <div class="bi_quyet_du_lich_8813">
							  <div class="bi_quyet_du_lich_8814">
								  <a href="'.route('news.details',array($vch->slug)).'">
									  <img src="'.$vch->picture.'" class="jss208 jss2869 jss2832" alt="'.$vch->title.'">
								  </a>
							  </div>
							  <div class="bi_quyet_du_lich_8815">
								  <a href="'.route('news.details',array($vch->slug)).'">'.$vch->title.'</a>
							  </div>
						  </div>
				  </div>';
				
			}
			
			?>
			
			@endforeach
			
		   
		   <div class="col-md-6 col-sm-6 col-xs-12">
			   <div class="bi_quyet_du_lich_8812">
				   <div class="row">
					   <?php echo $str_content_right; ?>
				   </div>
			   </div>
			</div>
		</div>
	</div>
	</div>
</div>


<div class="h35"></div>
<div class="bravo_footer" style="background: url(https://hoabinhbooking.test/images/bgfoot-6991.jpeg) no-repeat top center;padding: 5px 0px 0px 0px;background-size: 100% 100% !important;">
	<div class="h35"></div>
		<div class="main-footer">
		<div class="container">
			<div class="row">
			<div class="col-lg-5 col-md-12">
			<div style="width:100%;clear:both;">
			<img style="width: 200px;border-radius: 5px;" alt="logo" src="https://cdn.hoabinhevents.com/logos/hbbooking%204@2x-8-cropped.png">
			</div>
			<div style="width:100%;clear:both;color:#fff;padding: 10px 0;">
			<i>Thương hiệu của Hoabinh-Group.com</i>
			</div>
			<div style="width:100%;clear:both;color:#fff;line-height
			ĐKKD: 0102720141<br>
			Ngày cấp: 14/04/2008 | Nơi cấp: Sở kế hoạch và đầu tư TP. Hà Nội <br>
			</div>
			<div style="width:100%;clear:both;color:#fff;line-height:30px;">
			<i style="color:#ffcd46;" class="fa fa-map-marker" aria-hidden="true"></i> Hà Nội: 29 Đoàn Thị Điểm - Quốc Tử Giám - Đống Đa - Hà Nội<br>
			<i style="color:#ffcd46;" class="fa fa-map-marker" aria-hidden="true"></i> Đà Nẵng: 217 Trần Phú, Quận Hải Châu<br>
			<i style="color:#ffcd46;" class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh: 05 Hoa Cau, Phường 7, Quận Phú Nhuận
			</div>
			</div>
			<div class="col-lg-2 col-md-12">
			<div class="infomation">
			<p style="border-bottom: solid 1px #fff;margin-bottom: 15px;"><b style="font-size:20px;">Dịch vụ</b></p>
			<p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Tours du lịch</a></p>
			<p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Cho thuê xe</a></p>
			<p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Vé máy bay</a></p>
			
			<div class="suport_footer" style="float:left;position: relative;">
			<div style="float: left;position: absolute;width: 250px;">
			<p style="margin-top:40px;"><b>Bạn cần trợ giúp? Hãy gọi ngay:</b></p>
			<p>
				<a href="tel:0918640988">
				<img style="width: 40px;background: transparent;float: left;" alt="hotline" src="https://hoabinhbooking.test/images/calling.gif">
				<span style="color: #fff;font-size: 20px;padding-top: 5px;padding-left: 10px;display: block;float: left;">
					0918 640 988
				</span>
				</a>
			</p>
			</div>
			</div>

			</div>
			</div>
			<div class="col-lg-3 col-md-12">
			<div class="infomation">
			<p style="border-bottom: solid 1px #fff;margin-bottom: 15px;"><b style="font-size:20px;">Thông tin cần biết</b></p>
			<p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Giới thiệu</a></p>
			<p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Điều khoản &amp; quy chế</a></p>
			<p><a rel="nofolow" href="/vi/signup"><i class="fa fa-caret-right" aria-hidden="true"></i> Đăng ký tài khoản</a></p>
			<p><a rel="nofolow" href="/vi/partnership"><i class="fa fa-caret-right" aria-hidden="true"></i> Hợp tác đại lý</a></p>
			
			</div>
			</div>
			<div class="col-lg-2 col-md-12">
			<div class="infomation">
			<p style="border-bottom: solid 1px #fff;margin-bottom: 15px;"><b style="font-size:20px;">Chính sách</b></p>
			<p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Điều khoản sử dụng</a></p>
			<p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Chính sách bảo hành</a></p>
			<p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Chính sách đổi trả</a></p>
			<p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Chính sách bảo mật</a></p>
			<p>
			<img style="width:199px;margin-top: 20px;" alt="cong thuong" src="https://hoabinhbooking.test/images/congthuong-7841.png">
			</p>
			
			</div>
			</div>
			</div>
		</div>
	</div>
		<div class="copy-right" style="background: rgba(0, 0, 0, 0.1);">
		<div class="container context" style="padding: 20px 15px!important;color: #fff;">
			<div class="row">
				<div class="col-md-12">
					Copyright © 2021 by Hoabinh Booking - HoabinhBooking.com
					<div class="f-visa">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://hoabinhbooking.test/libs/calendar/js/t-datepicker.min.js"></script>

<script>
 $(document).ready(function(){
	// Call global the function
	$('.t-datepicker').tDatePicker({
	  // options here
	});
  });
</script>
</body>
</html>