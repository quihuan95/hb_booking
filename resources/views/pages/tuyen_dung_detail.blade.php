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
	.block-join{ padding: 20px;background: #f2f2f2;margin-bottom: 20px; }
	.block-join h3 { margin-top: 0px;display: block; }
	.block-join ul li { list-style-type: none;padding: 5px 0px; }
	.upload-profile-button {
		background: #F2C800;
		padding: 10px;
		font-weight: bold;
		font-size: 1.6em;
		text-align: center;
		cursor: pointer;
	}
	.npl {
		padding-left: 0;
	}
	.block-join h3{ color: #05235f; }
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
						  <div class="block-join">
							 <h3>{!! $data->title !!}</h3>
							 <div class="row">
								<div class="col-md-9 info-first">  <i class="fa fa-clock-o" aria-hidden="true"></i> Hạn tuyển dụng: {!! $data->deadline !!}</div>
								<div class="col-md-3 npl">
								   <div class="upload-profile-button manualLabel" data-toggle="modal" data-target="#send-cv-modal">NỘP HỒ SƠ</div>
								   <div class="modal fade" id="send-cv-modal">
									  <div class="modal-dialog">
										 <div class="modal-content">
											<!-- Modal Header -->
											<div class="modal-header">
											   <h4 class="modal-title">Thông tin nộp CV</h4>
											   <button type="button" class="close" data-dismiss="modal">×</button>
											</div>
											<!-- Modal body -->
											<div class="modal-body">
											   <div class="wpforms-container wpforms-container-full" id="wpforms-919">
												  <form id="wpforms-form-919" class="wpforms-validate wpforms-form wpforms-ajax-form" data-formid="919" method="post" enctype="multipart/form-data" action="/tuyen-dung/nhan-vien-thi-cong?wpforms_form_id=919" data-token="2fadc4a33e7489a915c32972ae980e3e" novalidate="novalidate">
													 <noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript>
													 <div class="wpforms-field-container">
														<div id="wpforms-919-field_1-container" class="wpforms-field wpforms-field-name" data-field-id="1"><label class="wpforms-field-label" for="wpforms-919-field_1">Họ và tên <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-919-field_1" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][1]" required=""></div>
														<div id="wpforms-919-field_2-container" class="wpforms-field wpforms-field-email" data-field-id="2"><label class="wpforms-field-label" for="wpforms-919-field_2">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-919-field_2" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][2]" required=""></div>
														<div id="wpforms-919-field_3-container" class="wpforms-field wpforms-field-text" data-field-id="3"><label class="wpforms-field-label" for="wpforms-919-field_3">Địa chỉ</label><input type="text" id="wpforms-919-field_3" class="wpforms-field-large" name="wpforms[fields][3]"></div>
														<div id="wpforms-919-field_4-container" class="wpforms-field wpforms-field-phone" data-field-id="4"><label class="wpforms-field-label" for="wpforms-919-field_4">Điện thoại <span class="wpforms-required-label">*</span></label><input type="tel" id="wpforms-919-field_4" class="wpforms-field-large wpforms-field-required" data-rule-int-phone-field="true" name="wpforms[fields][4]" required=""></div>
														<div id="wpforms-919-field_6-container" class="wpforms-field wpforms-field-textarea" data-field-id="6"><label class="wpforms-field-label" for="wpforms-919-field_6">Nội dung</label><textarea id="wpforms-919-field_6" class="wpforms-field-large" name="wpforms[fields][6]"></textarea></div>
														<div id="wpforms-919-field_5-container" class="wpforms-field wpforms-field-file-upload" data-field-id="5">
														   <label class="wpforms-field-label" for="wpforms-919-field_5">Đính kèm CV <span class="wpforms-required-label">*</span></label>
														   <div class="wpforms-uploader dz-clickable" data-field-id="5" data-form-id="919" data-input-name="wpforms_919_5" data-extensions="pdf,doc,docx,png,jpg" data-max-size="10485760" data-max-file-number="2" data-post-max-size="268435456" data-max-parallel-uploads="4" data-parallel-uploads="true" data-file-chunk-size="2097152">
															  <div class="dz-message">
																 <svg viewBox="0 0 1024 1024" focusable="false" data-icon="inbox" width="50px" height="50px" fill="#b1b1b1" aria-hidden="true">
																	<path d="M885.2 446.3l-.2-.8-112.2-285.1c-5-16.1-19.9-27.2-36.8-27.2H281.2c-17 0-32.1 11.3-36.9 27.6L139.4 443l-.3.7-.2.8c-1.3 4.9-1.7 9.9-1 14.8-.1 1.6-.2 3.2-.2 4.8V830a60.9 60.9 0 0 0 60.8 60.8h627.2c33.5 0 60.8-27.3 60.9-60.8V464.1c0-1.3 0-2.6-.1-3.7.4-4.9 0-9.6-1.3-14.1zm-295.8-43l-.3 15.7c-.8 44.9-31.8 75.1-77.1 75.1-22.1 0-41.1-7.1-54.8-20.6S436 441.2 435.6 419l-.3-15.7H229.5L309 210h399.2l81.7 193.3H589.4zm-375 76.8h157.3c24.3 57.1 76 90.8 140.4 90.8 33.7 0 65-9.4 90.3-27.2 22.2-15.6 39.5-37.4 50.7-63.6h156.5V814H214.4V480.1z"></path>
																 </svg>
																 <span class="modern-title">Ấn hoặc kéo thả file của bạn vào đây</span>
																 <span class="modern-hint">Bạn có thể upload tối đa là 2 file</span>
															  </div>
														   </div>
														   <input type="text" autocomplete="off" class="dropzone-input" style="position:absolute!important;clip:rect(0,0,0,0)!important;height:1px!important;width:1px!important;border:0!important;overflow:hidden!important;padding:0!important;margin:0!important;" id="wpforms-919-field_5" name="wpforms_919_5" required="" value="">
														   <div class="wpforms-field-description">(Hỗ trợ file: .doc, .docx, .pdf, .jpg, .png)</div>
														</div>
													 </div>
													 <div class="wpforms-submit-container">
														<input type="hidden" name="wpforms[id]" value="919"><input type="hidden" name="wpforms[author]" value="11"><input type="hidden" name="wpforms[post_id]" value="3388"><button type="submit" name="wpforms[submit]" id="wpforms-submit-919" class="wpforms-submit" data-alt-text="Đang gửi..." data-submit-text="Gửi CV" aria-live="assertive" value="wpforms-submit">Gửi CV</button><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20width='26'%20height='26'%20viewBox='0%200%2026%2026'%3E%3C/svg%3E" class="wpforms-submit-spinner perfmatters-lazy" style="display: none;" width="26" height="26" alt="" data-src="https://hoabinh-group.com/wp-content/plugins/wpforms/assets/images/submit-spin.svg">
														<noscript><img src="https://hoabinh-group.com/wp-content/plugins/wpforms/assets/images/submit-spin.svg" class="wpforms-submit-spinner" style="display: none;" width="26" height="26" alt=""></noscript>
													 </div>
												  </form>
											   </div>
											   <!-- .wpforms-container -->							
											</div>
										 </div>
									  </div>
								   </div>
								</div>
								<p class="info-profile-section-a"></p>
								<ul class="pull-left info-profile-a col-md-6">
								   <li>
									  <i class="fa fa-money" aria-hidden="true"></i>
									  <b>Mức lương</b>: {!! $data->salary !!}
								   </li>
								   <li>
									  <i class="fa fa-star" aria-hidden="true"></i>
									  <b>Yêu cầu kinh nghiệm</b>: {!! $data->experience !!}
								   </li>
								   <li>
									  <i class="fa fa-graduation-cap" aria-hidden="true"></i>
									  <b>Yêu cầu bằng cấp</b>: {!! $data->degree !!}
								   </li>
								   <li>
									  <i class="fa fa-user" aria-hidden="true"></i>
									  <b>Số lượng cần tuyển</b>: {!! $data->quantity !!}
								   </li>
								   <li>
									  <i class="fa fa-object-group" aria-hidden="true"></i>
									  <b>Nhóm ngành nghề</b>: {!! $data->industry_group !!}
								   </li>
								</ul>
								<ul class="pull-right info-profile-a col-md-6">
								   <li>
									  <i class="fa fa-map-marker" aria-hidden="true"></i>
									  <b>Địa điểm làm việc</b>: <span title="{!! $data->title !!}">{!! $data->work_location !!}</span>
								   </li>
								   <li>
									  <i class="fa fa-home" aria-hidden="true"></i>
									  <b>Công ty</b>: {!! $data->company !!}
								   </li>
								   <li>
									  <i class="fa fa-briefcase" aria-hidden="true"></i>
									  <b>Chức vụ</b>: {!! $data->position !!}
								   </li>
								   <li>
									  <i class="fa fa-address-card-o" aria-hidden="true"></i>
									  <b>Hình thức làm việc</b>: {!! $data->form_of_work !!}
								   </li>
								   <li>
									  <i class="fa fa-venus-mars" aria-hidden="true"></i>
									  <b>Yêu cầu giới tính</b>: {!! $data->gender !!}
								   </li>
								   <li>
									  <i class="fa fa-tasks" aria-hidden="true"></i>
									  <b>Yêu cầu độ tuổi</b>: {!! $data->age !!}
								   </li>
								</ul>
								<p></p>
							 </div>
						  </div>
						  <div class="block-join">
							 <p><strong>MÔ TẢ CÔNG VIỆC</strong></p>
							 {!! $data->desc1 !!}
						  </div>
					   </div>
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
								<li><strong>HẠN NỘP HỒ SƠ:</strong><span>{!! $data->deadline !!}</span></li>
								
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
