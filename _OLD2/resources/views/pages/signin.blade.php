@extends('layout')
@section('content')
<div class="bravo-news">
		
		<div class="blog-breadcrumb hidden-xs">
			<div class="container">
				<ul>
					<li><a href="https://hoabinhbooking.com"> Home</a></li>
					<li class="active">
						Đăng nhập
					</li>
				</ul>
			</div>
		</div>
		<div class="bravo_content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
<style type="text/css">
	.red{ color: red; }
</style>

<div class="row">
	 <form style="width:100%;" id="frmsignin" name="frmsignin" method="post" action="https://hoabinhbooking.com/vi/dang-nhap" enctype="multipart/form-data">
		 <div id="wapperregister" style="margin-top:10px;width:100%;">
		 		{{ csrf_field() }}
					
				<div class="form-group" style="clear: both;">
					<div class="col-md-12 col-sm-12 col-xs-12">
											</div>
				</div>
				<div class="form-group" style="clear: both;">
					<div class="col-md-3 col-sm-3 col-xs-12">
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="error_message_signup"></div>
					</div>
				</div>
				<div class="form-group" style="clear: both;">
					<div class="col-md-3 col-sm-3 col-xs-12">
						<label>Email <span class="red">*</span>:</label>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<input type="text" class="form-control" style="margin-bottom:10px;" required="" id="txtEmail" name="txtEmail" placeholder="">
					</div>
				</div>

				<div class="form-group" style="clear: both;">
					<div class="col-md-3 col-sm-3 col-xs-12">
						<label>Mật khẩu <span class="red">*</span>:</label>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12 dn_y_pass">
						<input type="password" class="form-control" style="margin-bottom:10px;" required="" id="txtPassword" name="txtPassword" placeholder="">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#forgotpassword" class="forgot_your_password" title="Forgot your password?">Quên mật khẩu?</a>
					</div>
				</div>

				<div class="form-group" style="clear: both;">
					<div class="col-md-2 col-sm-2 col-xs-12">
						<p style="text-align: left;">
							<input style="margin-top:10px;text-transform: uppercase;padding: 10px 20px;font-weight: bold;font-size: 18px;background:#00aff0;border: none;" type="submit" name="btnSubmit" class="btn btn-primary" value="ĐĂNG NHẬP">
						</p>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12">
						<p style="text-align: left;padding-top: 20px;">Nếu bạn chưa có tài khoản, vui lòng <a href="signup">ĐĂNG KÝ</a>.</p>
					</div>
				</div>
			</div>
	 </form>       
</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection