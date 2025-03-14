<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đặt phòng khách sạn - Hòa Bình Booking</title>
	<base href="https://hoabinhbooking.test/" />
	<link rel='shortcut icon' href='https://cdn.hoabinhevents.com/profiles/favicon-1.ico' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
	<link rel="stylesheet" href="frontend/css/style.css"/>
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link href="https://hoabinhbooking.test/libs/calendar/css/t-datepicker.min.css" rel="stylesheet" type="text/css">
	<link href="https://hoabinhbooking.test/libs/calendar/css/t-datepicker-blue.css" rel="stylesheet" type="text/css">
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
		.toppages{ height: 87px!important; }
		.logo{ 	background-color: #fff!important;width: 108px!important;margin: 10px 0!important;border-radius: 5px!important; }
		.menutop{ background-color: #04245d!important; }
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
			$("#dbo_contents").css("display", "none");
			
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
						<img class="logo" alt="" src="https://cdn.hoabinhevents.com/logos/hbb%202-8=cropped.png"/>
					</a>
				</div>
				<div class="col-md-10 col-sm-10 col-xs-12">
					<div class="___mn">
						<div class="ul_left">
							<nav class="horizontalMenu clearfix d-md-flex">
								<ul class="horizontalMenu-list">
									<?php
										$menu_top=App\Models\Menus::render_menu();
											echo $menu_top;
									?>
								</ul>
							</nav>
							<!--
							<ul>
								<li><a href="/">Trang chủ</a></li>
								<li><a href="https://hoabinhbooking.test/location/vung-tau">Khách sạn</a></li>
								<li><a href="/">Tours</a></li>
								<li><a href="/">Cẩm nang</a></li>
								<li><a href="/">Liên hệ</a></li>
							</ul>	-->
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
													<p style="text-align: center;width:100%;margin: 0px;"><a style="width: 92%;margin: 15px 10px;color: #fff;" href="{!! route('home.signin') !!}" class="btn btn-primary">Đăng nhập</a></p>
													<p style="text-align: center;width:100%;font-size: 11px;">Chưa có tài khoản? <a class="a_acc" style="color: blue;" href="{!! route('home.signup') !!}">Đăng ký</a> ngay</p>
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
	
</div>

@yield('content')


<div class="h35"></div>
<div class="bravo_footer" style="background: url(https://hoabinhbooking.test//images/bgfoot-6991.jpeg) no-repeat top center;padding: 5px 0px 0px 0px;background-size: 100% 100% !important;">
	<div class="h35"></div>
		<div class="main-footer">
		<div class="container">
			<div class="row">
			<div class="col-lg-5 col-md-12">
			<div style="width:100%;clear:both;">
			<a href="/"><img style="width: 150px;background: #fff;border-radius: 5px;" alt="logo" src="https://cdn.hoabinhevents.com/logos/hbb%202-8=cropped.png"></a>
			</div>
			<div style="width:100%;clear:both;color:#fff;padding: 10px 0;">
			<i>Thương hiệu của Hoabinh-Group.com</i>
			</div>
			<div style="width:100%;clear:both;color:#fff;line-height:30px;">
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
				<img style="width: 40px;background: transparent;float: left;" alt="hotline" src="https://hoabinhbooking.test//images/calling.gif">
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
			<img style="width:199px;margin-top: 20px;" alt="cong thuong" src="https://hoabinhbooking.test//images/congthuong-7841.png">
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

<script src="{{ asset('public/js/js.min.js') }}"></script>
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