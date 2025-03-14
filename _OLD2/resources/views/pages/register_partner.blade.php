<?php
							$partner_fullname=Session::get('partner_fullname');
							if($partner_fullname){
								header("Location: ".route('home.cmscpanel'));
								exit;
							}
						?>
<!doctype html>
<html lang="vi">
   <head>
	  <meta charset="utf-8"/>
	  <link rel="icon" href="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png"/>
	  <meta name="viewport" content="width=device-width,initial-scale=1"/>
	  <meta name="theme-color" content="#4FC3F7"/>
	  <meta name="description" content="Đăng ký miễn phí chỗ nghỉ của bạn trên Hòa Bình Booking! Tiếp cận được hơn 25 triệu khách hàng tiềm năng"/>
	  <meta property="og:title" content="Hòa Bình Booking - Hệ thống quản lý khách sạn trực tuyến"/>
	  <meta property="og:image" content="https://storage.googleapis.com/tripi-assets/mytour/banner/img_partnership_right_banner.jpg"/>
	  <meta property="og:description" content="Đăng ký miễn phí chỗ nghỉ của bạn trên Hòa Bình Booking! Tiếp cận được hơn 25 triệu khách hàng tiềm năng"/>
	  <link rel="apple-touch-icon" href="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png"/>
	  <link rel="manifest" href="/manifest.json"/>
	  <title>Hòa Bình Booking - Hệ thống quản lý khách sạn trực tuyến</title>
	  <link href="{{asset('libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
		<link href="{{asset('libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
		<link href="{{asset('libs/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
		<link href="{{asset('libs/icofont/icofont.min.css')}}" rel="stylesheet">
	<style>
		body{ margin:0px;padding:0px;font-family:arial;background:rgb(245, 245, 245); }
		.red{ color:red; }
		::placeholder { color: blue;font-size: 13px; }
		._gb{ margin-top:110px; }
		.wapregister{ width:770px;height: 460px;box-shadow: 0px 4px 6px rgb(0 0 0 / 10%), 0px 6px 14px rgb(0 0 0 / 20%);margin:0 auto;border-radius:12px; }
		._gh{ position: relative;border-radius: 12px 0px 0px 12px;width: 270px;padding: 32px;vertical-align: middle;height: 100%;text-align: center;float: left; }
		._ghvt{ background: #04245d url(https://hoabinhbooking.com/public/uploads/travel-around-the-world.jpg) no-repeat top left;background-size: cover;position: absolute;width:100%;height:100%;top: 0px;left: 0px;border-top-left-radius: 12px;border-bottom-left-radius: 12px; }
		._ghvttt{ position: absolute;
			top: 10px;
			float: left;
			left: 10px; }        
		._gh ._gg{ width:50px;margin:0 auto;/*border-radius: 12px;background: #fff;*/ }
		._ghh{ width: 500px;float: left;height:460px;padding: 25px 130px 25px 25px;background: #fff; }
		._ghh label{ margin:0px;padding: 0px;font-size: 14px; }
		._ghh input{ margin-bottom:25px; }
		._ghh .fsubmit{ margin-bottom:10px;font-size:14px; }
		._ghh hr{ margin:10px 0; }
	</style>
   </head>
   <body>
<div class="_gb">
<div class="wapregister">
			<div class="_gh" style="">
				<div class="_ghvt">

				</div>
				<div class="_ghvttt">
					<img class="_gg" alt="" src="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png"/>
				</div>
				
			</div>
			<div class="_ghh">
			<form method="post" action="{!! route('home.dang_ky_partnership') !!}"  class="bookcore-form">
				{{csrf_field()}}
				<div class="form">
					<p><b>Đăng ký tài khoản mới </b></p>
				</div>
				<?php
					$message=Session::get('message');
					if($message){
						echo '<span style="color: red;font-size: 14px;background: aliceblue;padding: 5px;border-radius: 3px;margin-bottom: 10px;display: block;">'.$message.'</span>';
						$message=Session::put('message',null);
					}
					?>
				<div class="form">
					<label for="txtEmail">Email <span class="red">*</span></label>
				</div>
				<div class="form">
					<input type="email" required class="form-control" id="txtEmail" name="txtEmail" value="" placeholder="Nhập email"/>
				</div>
				<div class="form">
					<label for="txtHovaTen">Họ và tên <span class="red">*</span></label>
				</div>
				<div class="form">
					<input type="text" required class="form-control" id="txtHovaTen" name="txtHovaTen" value="" placeholder="Nhập họ và tên"/>
				</div>
				<div class="form">
					<label for="txtPhone">Số điện thoại <span class="red">*</span></label>
				</div>
				<div class="form">
					<input type="number" required class="form-control" id="txtPhone" name="txtPhone" value="" placeholder="Nhập số điện thoại"/>
				</div>
				<div class="form">
					<input type="submit" id="btnSubmit" name="btnSubmit" value="Đăng ký tài khoản" class="btn btn-primary fsubmit" />
					<hr/>
					<label>
						Bạn đã có tài khoản? <a href="{!! route('partner.login') !!}">Đăng nhập ngay</a>
					</label>
				</div>
				</form>
			</div>
		</div>
</div>
   </body>
</html>