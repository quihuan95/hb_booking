@extends('layout')
@section('content')
<p style="margin:0px;padding:0px;">&nbsp;</p>
<div class="toppages">
	<div class="jsc11" style="top:10px;">
		@include('inc.search')
	</div>
</div>


<div style="width:100%;height:40px;clear:both;"></div>
<div>
	
<div class="container">
	<div class="row">
		<div class="nav-vh">
			<ul>
				<li><a href="/">Trang chủ</a></li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li><span>Liên hệ</span></li>
			</ul>
		</div>
	</div>
</div>

<div style="width:100%;height:20px;clear:both;"></div>
<div>
<style type="text/css">
	.contact-form input,.contact-form textarea{ margin-bottom: 15px; }
</style>
	
<div class="container">
	<div class="news_details">
		<div class="row">
			<div class="col-md-6 col-sm-3 col-xs-12">
				<div role="form" class="form_wrapper" lang="en-US" dir="ltr">
					<?php
					$message=Session::get('message');
					if($message){
						echo '<div style="text-align: center;width: 440px;margin: 0 auto;border-radius: 5px;border: solid 1px #dedede;padding: 10px 5px;margin-bottom: 15px;max-width: 100%;background: green;color: #fff;"><span>'.$message.'</span></div>';
						$message=Session::put('message',null);
					}
					?>
					<form method="post" action="{!! route('res.contact') !!}" class="bookcore-form">
						{{ csrf_field() }}
						<div class="contact-form">
							<div class="contact-header">
								<h3>Ngại ngần chi mà không liên hệ ngay!</h3>
								<p>Lời nhắn của bạn sẽ được phản hồi sớm nhất có thể</p>
							</div>
							<div class="contact-form">
								<div class="form-group">
									<input type="text" required value="" placeholder=" Họ tên " name="name" autocomplete="off" class="form-control">
								</div>
								<div class="form-group">
									<input type="text" required value="" placeholder="Phone" name="phone" autocomplete="off" class="form-control">
								</div>
								<div class="form-group">
									<input type="text" required value="" placeholder="Email" name="email" autocomplete="off" class="form-control">
								</div>
				
								<div class="form-group">
									 <textarea name="message" cols="40" rows="10" class="form-control textarea" autocomplete="off" placeholder="Lời nhắn"></textarea>
								</div>
								<div class="form-group">
									
								</div>
								<p><input type="submit" value="Gửi lời nhắn" class="form-control submit btn btn-primary"></p></div></div>
						</form>
				</div>
			</div>
			<div class="col-md-6 col-sm-3 col-xs-12">
				<div class="contact-info">
										<div class="info-bg">
										<img style="max-width: 100%;" src="https://kovaland.com/wp-content/uploads/2020/03/contact-bg.jpg" class="img-responsive" alt="Ngại ngần chi mà không liên hệ ngay!">
																	</div>
										<div class="info-content">
											<div class="sub">
												<p></p><h3>Booking Hotel</h3>
				
				<p>Điện thoại: 0913.311.911</p>
				<p>Email: info@hoabinhtourist.com</p>
				<p>Address: 29 Đoàn Thị Điểm - Đống Đa - Hà nội</p><p></p>
											</div>
										</div>
									</div>
			</div>
		</div>
	</div>
</div>



@endsection