<!doctype html>
<html lang="vi">
   <head>
	  <meta charset="utf-8"/>
	  <link rel="icon" href="{{asset('public/frontend/css/images/logohoabinhbooking.png')}}"/>
	  <meta name="viewport" content="width=device-width,initial-scale=1"/>
	  <meta name="theme-color" content="#4FC3F7"/>
	  <meta name="description" content="Đăng ký miễn phí khách sạn của bạn trên Hòa Bình Booking! Tiếp cận được hơn 25 triệu khách hàng tiềm năng"/>
	  <meta property="og:title" content="Hòa Bình Booking - Hệ thống quản lý khách sạn trực tuyến"/>
	  <meta property="og:image" content="https://storage.googleapis.com/tripi-assets/mytour/banner/img_partnership_right_banner.jpg"/>
	  <meta property="og:description" content="Đăng ký miễn phí khách sạn của bạn trên Hòa Bình Booking! Tiếp cận được hơn 25 triệu khách hàng tiềm năng"/>
	  <link rel="apple-touch-icon" href="{{asset('public/frontend/css/images/logohoabinhbooking.png')}}"/>
	  <link rel="manifest" href="/manifest.json"/>
	  <title>Chỉnh/sửa thông tin khách sạn</title>
	  <link href="{{asset('libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
	  <link href="{{asset('libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
	  <link href="{{asset('libs/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
	  <link href="{{asset('libs/icofont/icofont.min.css')}}" rel="stylesheet">

<link href="{{asset('libs/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{asset('libs/flags/css/flag-icon.min.css')}}" rel="stylesheet">
<link href="{{asset('dist/admin/css/vendors.css')}}" rel="stylesheet">
<link href="{{asset('dist/admin/css/app.css')}}" rel="stylesheet">
<script>
		var bookingCore  = {
			url:'https://hoabinhbooking.com/',
			map_provider:'gmap',
			map_gmap_key:'',
			csrf:'9gl5oSvUixuYLAFcVAkKx6ZwwpeGeBXYvxxotQVl'
		};
		var i18n = {
			warning:"Warning",
			success:"Success",
			confirm_delete:"Do you want to delete?",
			confirm:"Confirm",
			cancel:"Cancel",
		};
		var bookingCoreApp ={
			showSuccess:function (configs){
				var args = {};
				if(typeof configs == 'object')
				{
					args = configs;
				}else{
					args.message = configs;
				}
				if(!args.title){
					args.title = i18n.success;
				}
				bootbox.alert(args);
			},
			showError:function (configs) {
				var args = {};
				if(typeof configs == 'object')
				{
					args = configs;
				}else{
					args.message = configs;
				}
				if(!args.title){
					args.title = i18n.warning;
				}
				bootbox.alert(args);
			},
			showAjaxError:function (e) {
				if(typeof e.responseJSON !='undefined' && e.responseJSON.message){
					return this.showError(e.responseJSON.message);
				}
				if(e.responseText){
					return this.showError(e.responseText);
				}
			},
			showConfirm:function (configs) {
				var args = {};
				if(typeof configs == 'object')
				{
					args = configs;
				}
				args.buttons = {
					confirm: {
						label: '<i class="fa fa-check"></i> '+i18n.confirm,
					},
					cancel: {
						label: '<i class="fa fa-times"></i> '+i18n.cancel,
					}
				}
				bootbox.confirm(args);
			}
		};
	</script>
<script src="https://hoabinhbooking.com/libs/tinymce/js/tinymce/tinymce.min.js"></script>
	<style>
		body{ margin:0px;padding:0px;font-family:arial;background:rgb(245, 245, 245); }
		.red{ color:red; }
		::placeholder { font-size: 13px; }
		.wapper{ width:100%;height:auto; }
		.header{ width:100%;height:56px;background-color: #04245d;box-shadow: none;border-radius: 0px;border-bottom: 1px solid rgb(224, 224, 224);z-index: 1000; }
		.__right_header{ float:right;margin-right:55px; }
		.__right_header .__tbuser:hover{ background-color:#023373;cursor: pointer; }
		.__bell{ float: left;margin: 8px 15px 0 0;border-radius: 100%;border: solid 1px #ccc;width: 40px;height: 40px;padding-top: 4px;text-align: center;cursor: pointer; }
		.__create_hotel{ width:100%;height:80px;margin-top:10px; }
		.__create_hotel .__p2ch{ width:92%;margin:0 auto;height:30px; }
		.__create_hotel .__p2ch h2{ margin-top: 23px;font-size: 28px; }
		.__create_hotel .__p3ch{ float:left;width:50%; }
		.__create_hotel .__p4ch{ background-color: rgb(117, 117, 117);border-radius: 100%;width: 5px;height: 5px;display: block;float: left;margin: 8px 10px; }
		.__create_hotel .__p5ch{ width:92%;height:auto;clear: both;margin:0 auto; }
		.__create_hotel .__p5ch h2{ margin: 0px;padding: 0px;clear: both;font-size: 20px; }
		.fleft{ float:left; }
		.fsize13{ font-size:13px; }
		.___wapbodyform{ width:94%;margin:0 auto;height:auto; }
		.inner img{ max-width: 100%;height:136px; }
		.text-center img{ max-height:217px; }
		._wap_user_{ float: left;position: relative; }
		._wap_user_in_2{ display: none; }
		._wap_user_in_2 ul{ margin:0px 10px;padding: 0px;list-style-type: none;text-align:center; }
		._wap_user_in_2 ul li{ padding: .3cm 6px; }
		._wap_user_:hover ._wap_user_in_2{ float: left;position: absolute;width: 180px;min-height: 100px;z-index: 99999;background: #fff;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top: solid 3px #F29F05;right: 0px;display: block;box-shadow: 0px 4px 6px rgb(0 0 0 / 10%), 0px 6px 14px rgb(0 0 0 / 20%); }
	</style>
   </head>
   <body>
	 <div class="wapper">
		<div class="header">
		<a href="/">
			<img alt="logo hoabinh booking" src="{{asset('public/frontend/css/images/logohoabinhbooking.png')}}" style="height:90%;padding:3px;background:#fff;border-radius:3px;margin:3px 0px 0px 55px;float:left;"/>
		</a>
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
				<li style="border-bottom: solid 1px #ccc;"><a href="{!! route('partnership.profile') !!}"><i class="fa fa-address-book" aria-hidden="true"></i> Thông tin cá nhân</a></li>
				<li><a href="{!! route('partner.logout') !!}"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>
				</ul>
				</div>
				</div>
				
			</div>
		</div>
<div class="__create_hotel">
<div class="__p2ch">
<div class="__p3ch" style="">
   <span style="color: #04245d;margin-right: 10px;font-size: 20px;" class="fleft"><i style="display: block;" class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></span> <span class="fleft fsize13">Khách sạn</span> <span class="__p4ch"></span> <span class="fleft fsize13">Chỉnh/sửa khách sạn</span>
</div>
<div class="__p3ch" style="text-align:right;">
	
</div>
</div>

</div>


<div class="___wapbodyform">

<div class="row">
  <div class="col-12">
	
<div class="d-flex justify-content-between mb20">
	<h1 class="title-bar">Chỉnh/sửa phòng ở khách sạn: #{{$data->title}}</h1>
	<div class="title-actions"></div>
</div>

	  <div class="row">
<div class="col-md-12">
<form class="needs-validation" action="{!! route('room.create.calendars') !!}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" id="id" name="id" value="{{$data->id}}"/>
<input type="hidden" id="hotel_id" name="hotel_id" value="{{$_IDHotel}}"/>
<input type="hidden" id="code" name="code" value="{{$data->code}}"/>
<input type="hidden" id="created_at" name="created_at" value="{{$data->created_at}}"/>
<input type="hidden" value="publish" id="room_status" name="room_status">

<div class="panel">
<div class="panel-title"><strong>Thông tin cơ bản</strong></div>
<div class="panel-body">

<div class="form-group">
<label>Tên phòng <span class="text-danger">*</span></label>
<input type="text" required="" value="{{$data->title}}" placeholder="Tên phòng" name="title" class="form-control">
</div>

<hr>
<div class="row">
   <div class="col-md-6">
	  <div class="form-group">
		 <label>Diện tích phòng </label>
		 <div class="input-group mb-3">
			<input type="text" class="form-control" name="size" value="{{$data->area}}" placeholder="Diện tích phòng">
			<div class="input-group-append">
			   <span class="input-group-text"> m<sup>2</sup></span>
			</div>
		 </div>
	  </div>
   </div>
   <div class="col-md-6">
	  <div class="form-group">
		 <label>View </label>
		 <input type="text" value="{{$data->view}}" placeholder="View" name="view" class="form-control">
	  </div>
   </div>
   <div class="col-md-6">
	  <div class="form-group">
		 <label>Kiểu gường </label>
		 <select name="bed_type" class="form-control">
		 <?php 
			$type_bed=array("Giường đơn"=>"Giường đơn","Giường đôi nhỏ"=>"Giường đôi nhỏ","Giường đôi"=>"Giường đôi","Giường Queen"=>"Giường Queen","Giường King"=>"Giường King","Giường Grand King"=>"Giường Grand King","Giường tầng"=>"Giường tầng","Giường sofa"=>"Giường sofa","Nệm futon"=>"Nệm futon");
			foreach($type_bed as $tpk=>$tpv){
				if($tpv==$data->bed_type){
					echo '<option selected value="'.$tpv.'">'.$tpv.'</option>';
				}else{
					echo '<option value="'.$tpv.'">'.$tpv.'</option>';
				}
			}
		 ?>
		</select>
	  </div>
   </div>
   <div class="col-md-6">
	  <div class="form-group">
		 <label>Số giường </label>
		 <input type="number" value="{{$data->bed_num}}" min="1" max="10" placeholder="Number" name="beds" class="form-control">
	  </div>
   </div>
   <div class="col-md-6">
	  <div class="form-group">
		 <label>Người lớn </label>
		 <input type="number" min="1" value="{{$data->adults}}" name="adults" class="form-control">
	  </div>
   </div>
   <div class="col-md-6">
	  <div class="form-group">
		 <label>Trẻ em </label>
		 <input type="number" min="0" value="{{$data->children}}" name="children" class="form-control">
	  </div>
   </div>
</div>
</div>
<div class="panel-footer">
<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Cập nhật</button>
</div>
</div>
</form>
</div>

</div>
	  
	  </div>
	
  </div>
</div>

</div>

<div style="width:100%;height:1px;clear:both;"></div>
	 </div>
	 </div>
	
	<script src="https://hoabinhbooking.com/dist/admin/js/manifest.js?_ver=1.4.0"></script>
	<script src="https://hoabinhbooking.com/dist/admin/js/vendor.js?_ver=1.4.0"></script>
	<script src="https://hoabinhbooking.com/dist/admin/js/app.js?_ver=1.4.0"></script>
	<script src="https://hoabinhbooking.com/libs/select2/js/select2.min.js"></script>
	<script src="https://hoabinhbooking.com/libs/bootbox/bootbox.min.js"></script>
	<script type="text/javascript" src="{{ asset('public/js/jquery-1.7.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/slug.js') }}"></script>
	
   </body>
</html>

<?php
function fnCheckTerm($categories,$pId){
	foreach ($categories as $key=>$item){
		if($item->term_id==$pId){
			return true;
		}
	}
	return false;
}
?>