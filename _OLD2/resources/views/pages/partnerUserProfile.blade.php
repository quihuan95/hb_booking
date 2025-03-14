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
	  <title>Thông tin cá nhân </title>
	  <link href="{{asset('libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
		<link href="{{asset('libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
		<link href="{{asset('libs/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
		<link href="{{asset('libs/icofont/icofont.min.css')}}" rel="stylesheet">
	<style>
		body{ margin:0px;padding:0px;font-family:arial;background:rgb(245, 245, 245); }
		.red{ color:red; }
		::placeholder { font-size: 13px; }
		.wapper{ width:100%;height:auto; }
		.header{ width:100%;height:56px;background-color: #04245d;box-shadow: none;border-radius: 0px;border-bottom: 1px solid rgb(224, 224, 224);z-index: 1000; }
		.__right_header{ float:right;margin-right:55px; }
		.__right_header .__tbuser:hover{ background-color:#023373;cursor: pointer; }
		.__bell{ float: left;margin: 8px 15px 0 0;border-radius: 100%;border: solid 1px #ccc;width: 40px;height: 40px;padding-top: 4px;text-align: center;cursor: pointer; }
		.__create_hotel{ width:100%;height:auto;background:#fff; }
		.__create_hotel .__p2ch{ width:92%;margin:0 auto;height:100%; }
		.__create_hotel .__p2ch h2{ margin-top: 23px;font-size: 28px; }
		.___hotel_wait{ width:100%;height:auto;clear:both;background:#64798C;min-height:300px;text-align:center;color:#fff;padding-top:120px; }
		.___hotel_wait a{ color:#fff; }
		.___hotel_wait_ab{ width:100%;height:auto;clear:both;background:#64798C;min-height:300px;text-align:center;color:#fff;padding:20px 0; }
		.___hotel_wait_ab a{ color:#fff; }
		._wap_user_{ float: left;position: relative; }
		._wap_user_in_2{ display: none; }
		._wap_user_in_2 ul{ margin:0px 10px;padding: 0px;list-style-type: none;text-align:center; }
		._wap_user_in_2 ul li{ padding: .3cm 6px; }
		._wap_user_:hover ._wap_user_in_2{ float: left;position: absolute;width: 180px;min-height: 100px;z-index: 99999;background: #fff;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top: solid 3px #F29F05;right: 0px;display: block;box-shadow: 0px 4px 6px rgb(0 0 0 / 10%), 0px 6px 14px rgb(0 0 0 / 20%); }
		._col-u{ border-right: 0.5px solid rgb(189, 189, 189);display: flex;flex-direction: column;margin-bottom: 8px;align-items: flex-start;flex: 1 1 0%;height: 80px;width:150px;float: left;padding:0 10px; }
		.border-right-none{ border-right:none; }
		.row_change_pass{ width:100%;height:auto; }
		.row_change_pass ul{ list-style-type: none;margin: 0px;padding: 0px; }
		.row_change_pass ul li{ float: left; }
		.mgbotom{ margin-bottom:25px; }
	</style>
   </head>
   <body>
	 <div class="wapper">
		<div class="header">
		<a href="/"><img alt="logo hoabinh booking" src="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png" style="height:90%;padding:3px;background:#fff;border-radius:3px;margin:3px 0px 0px 55px;float:left;"/></a>
			<div class="__right_header">
				<div class="__bell">
				<i style="font-size: 20px;margin: 5px 0px 0 0;color: #fff;" class="fa fa-bell" aria-hidden="true"></i>
				</div>
				<div class="_wap_user_">
				<table class="__tbuser" style="color:#fff;padding-right:10px;">
					<tr>
					<td style="text-align:right;vertical-align: middle;font-size:13px;padding:5px 10px;">
						Xin chào,<br/>
						<?php
							$partner_fullname=Session::get('partner_fullname');
							if($partner_fullname){
								echo $partner_fullname;
							}else{
								header("Location: ".route('partner.login'));
								exit;
							}
						?>
					</td>
					<td style="text-align:right;vertical-align: middle;">
						<i style="font-size: 45px;margin: 5px 5px 0 0;color:#fff;" class="fa fa-user-circle-o" aria-hidden="true"></i>
						</td>
					</tr>
				</table>
				<div class="_wap_user_in_2">
				<ul>
				<li style="border-bottom: solid 1px #ccc;"><a href="{{ URL::to('/vi/partnership/profile') }}"><i class="fa fa-address-book" aria-hidden="true"></i> Thông tin cá nhân</a></li>
				<li><a href="{!! route('partner.logout') !!}"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>
				</ul>
				</div>
				</div>
				
			</div>
		</div>
<div class="__create_hotel">
<div class="__p2ch">
<div style="float:left;width:100%;height:auto;">
<h2 style="font-size:21px;">Thông tin cá nhân </h2>
<hr/>
<div class="row">
<div class="col-2">
<i style="font-size: 135px;margin: 5px 5px 0 0;color:#ccc;" class="fa fa-user-circle-o" aria-hidden="true"></i>
</div>
<div class="col-10">
<div style="border-bottom:solid 1px #ccc;height:90px;">
<div class="_col-u">
<span style="color:rgb(189, 189, 189);">ID</span> <br/><?php echo Session::get('partner_id');?>
</div>
<div class="_col-u" style="text-align:center;">
<span style="color:rgb(189, 189, 189);">Người giới thiệu</span> <br/><p>&nbsp;</p>
</div>
<div class="_col-u" style="text-align:center;">
<span style="color:rgb(189, 189, 189);">Ngày đăng ký</span> <br/><p>&nbsp;</p>
</div>
<div class="_col-u border-right-none" style="text-align:center;">
<span style="color:rgb(189, 189, 189);">Lần cập nhật cuối</span> <br/><p>&nbsp;</p>
</div>
<div class="width:100%;height:1px;clear:both;"></div>
</div>

<div class="row_change_pass">
<ul>
<li><a style="margin-top: 20px;padding-right: 50px;padding-left: 50px;background-color: #F29F05;border-color: #F29F05;" href="javascript:void(0);" class="btn btn-primary">
Đổi mật khẩu
</a></li>
<li><a style="margin-top: 25px;margin-right:20px;margin-left:20px;display:block;color:#F29F05;" href="javascript:void(0);"><i class="fa fa-file-image-o" aria-hidden="true"></i> Thay đổi avatar</a></li>
<li><a style="margin-top: 25px;display:block;color:rgb(117, 117, 117);" href="javascript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Dùng ảnh mặc định</a></li>
</ul>
</div>
</div>
</div>
<div class="row mgbotom">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
<div class="row mgbotom">
<div class="col-2">
Giới tính <span style="color:red;">*</span>
</div>
<div class="col-10">
<label style="margin-right:30px;"><input type="radio" id="rdoNam" name="gender" checked /> Nam</label>
<label><input type="radio" id="rdoNu" name="gender" /> Nữ</label>
</div>
</div>
<div class="row mgbotom">
<div class="col-2">
Họ tên <span style="color:red;">*</span>
</div>
<div class="col-3">
<input id="name" name="name" placeholder="Nhập họ tên" type="text" maxlength="100" class="form-control" value="Lê Thanh"/>
</div>
<div class="col-1">
Ngày sinh 
</div>
<div class="col-3">
<input id="birthday" name="birthday" placeholder="Ngày sinh" type="text" maxlength="100" class="form-control" value="01/01/1995"/>
</div>
</div>

<div class="row mgbotom">
<div class="col-2">
Số điện thoại
</div>
<div class="col-3">
<input id="phone" name="phone" placeholder="Số điện thoại" type="text" maxlength="100" class="form-control" value=""/>
</div>
<div class="col-1">
Email
</div>
<div class="col-3">
<input id="email" name="email" placeholder="Email" type="text" maxlength="100" class="form-control" value=""/>
</div>
</div>

<div class="row mgbotom">
<a style="margin-top: 20px;padding-right: 50px;padding-left: 50px;background-color: #F29F05;border-color: #F29F05;" href="javascript:void(0);" class="btn btn-primary">
Lưu lại
</a>
<a style="margin-left:30px;margin-top: 20px;padding-right: 50px;padding-left: 50px;background-color: #fff;border-color: #ccc;color:rgb(117, 117, 117);" href="javascript:void(0);" class="btn btn-primary">
Bỏ qua
</a>
</div>

</div>

</div>

<div style="width:100%;height:20px;clear:both;"></div>
</div>
	 </div>
   </body>
</html>