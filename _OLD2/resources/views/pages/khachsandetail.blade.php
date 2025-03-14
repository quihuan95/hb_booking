@extends('layout')
@section('content')
<p style="margin:0px;padding:0px;">&nbsp;</p>
<div class="toppages">
	<div class="jsc11" style="top:10px;">
		<div class="jsc12 wid1300">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="jsc14">
						<div class="jsc13">
							<label for="txtDiadiem">Địa điểm</label>
						</div>
						<div class="jsc15">
							<input type="text" autocomplete="off" id="txtDiadiem" name="txtDiadiem" placeholder="Thành phố, khách sạn, điểm đến" value="">
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="jsc13">
					Ngày đến - Ngày về
					</div>
					<div class="t-datepicker">
					  <div class="t-check-in"><div class="t-dates t-date-check-in"><img alt="" src="https://hoabinhbooking.com/public/icon/icons-calendar.jpg" style="width:15px;margin-bottom: 3px;"><label class="t-date-info-title"></label><span class="t-day-check-in"> 22</span><span class="t-month-check-in"> Tháng 06 </span><span class="t-year-check-in"> 2022</span></div><input type="hidden" class="t-input-check-in" value="22-06-2022" name="t-start"></div>
					  <div class="t-check-out"><div class="t-dates t-date-check-out"><img alt="" src="https://hoabinhbooking.com/public/icon/icons-calendar.jpg" style="width:15px;margin-bottom: 3px;"><label class="t-date-info-title"></label><span class="t-day-check-out"> 23</span><span class="t-month-check-out"> Tháng 06 </span><span class="t-year-check-out"> 2022</span></div><input type="hidden" class="t-input-check-out" value="23-06-2022" name="t-end"></div>
					</div>
					<!--<div class="jsc13">
						Ngày đến - Ngày về
						</div>
						<div class="jsc13">
						Số phòng, số khách
						</div>-->
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="jsc13">
					Số phòng, số khách
					</div>
					<div class="form-content" style="padding: 5px 0 10px 0px;">
						<input type="hidden" name="phong" id="hdphong" value="1">
						<input type="hidden" name="adult" id="hdadult" value="2">
						<input type="hidden" name="child" id="hdchild" value="0">
						<div class="sophongsokhach" id="sophongsokhach">
						<div onclick="fnShowHidePhong()" id="wapsophong"><span id="phong" class="phong">1</span> phòng, <span id="nguoilon" class="nguoilon">2</span> người lớn, <span id="treem" class="treem">0</span> trẻ em</div>
						<div class="spskpopup">
						<table>
						<tbody><tr>
						<td style="text-align:left;">Phòng</td>
						<td class="tdd1"><input type="button" onclick="fnSubphong()" id="subphong" name="subphong" class="btnsplus" value="-"></td>
						<td class="tdd1"><span class="phong">1</span></td>
						<td class="tdd1"><input type="button" onclick="fnPlusphong()" id="plusphong" name="plusphong" class="btnsplus" value="+"></td>
						</tr>
						<tr>
						<td style="text-align:left;">Người lớn</td>
						<td class="tdd1"><input type="button" onclick="fnSubadult()" id="subadult" name="subadult" class="btnsplus" value="-"></td>
						<td class="tdd1"><span class="nguoilon">2</span></td>
						<td class="tdd1"><input onclick="fnPlusadult()" type="button" id="plusadult" name="plusadult" class="btnsplus" value="+"></td>
						</tr>
						<tr>
						<td style="text-align:left;">Trẻ em</td>
						<td class="tdd1"><input onclick="fnSubchildren()" type="button" id="subchildren" name="subchildren" class="btnsplus" value="-"></td>
						<td class="tdd1"><span class="treem">0</span></td>
						<td class="tdd1"><input onclick="fnPluschildren()" type="button" id="pluschildren" name="pluschildren" class="btnsplus" value="+"></td>
						</tr>
						</tbody></table>
						
						</div>
						</div>
					</div>
				</div>
				<div class="col-md-1 col-sm-1 col-xs-12">
					<div class="row mgsub30">
						<div class="g-button-submit">
							<button class="btn btn-primary btn-search" type="submit" style="margin-top: 20px;background-color:forestgreen;border-color:forestgreen;">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div style="width:100%;height:20px;clear:both;"></div>
<div>
	<div class="container">
		<div class="row">
			<div class="nav-vh">
				<ul>
					<li><a href="/">Khách sạn</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li><a href="/">Thanh Hóa</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li><a href="/">Thị Xã Sầm Sơn</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li><span>{!! $hotel_details->title !!}</span></li>
				</ul>
			</div>
		</div>
		
			<div class="nav-vh mgt15">
			<div class="price_good">
				<span style="padding:0 5px;"><i class="fa fa-bolt" aria-hidden="true"></i></span>
				<span>Giá cực tốt</span>
			</div>
			</div>
		<div class="nav-vh mgt15">
		<h1>{!! $hotel_details->title !!}</h1>
		</div>
		<div class="row">
		<div class="col-md-9 col-sm-9 col-xs-12">
		<div class="f__b__l_1_3">
			<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
			<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
			<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
			<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
			<i style="color:#FFBC39;" class="fa fa-star" aria-hidden="true"></i>
		</div>
		<div class="f__b__l_1_5" style="font-size:small;">
			<i class="fa fa-umbrella" aria-hidden="true"></i> <i>Tuyệt vời (88 đánh giá)</i>
		</div>
		<div class="f__b__l_1_5" style="font-size:small;">
			<i class="fa fa-map-marker" aria-hidden="true"></i> <i>{!! $hotel_details->address !!}</i>
		</div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="hbb_select_room"> 
				<a href="{{ $current_url }}#chonphong">
					Chọn phòng
				</a>
			</div>
		</div>
		</div>
		<div class="hbb_wap1124">
		<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="hbb_img123">
						{!! \App\Models\FileHelper::isImgs($hotel_details->image_id) !!}
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="hbb_imgr122">
						<ul>
							@if($hotel_details->gallery!=null)
							{!! \App\Models\FileHelper::imgGalleryFrontend($hotel_details->gallery,$hotel_details->id,'0') !!}
							@endif
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<img style="width:100%;" alt="" src="{{ asset('public/frontend/css/images/danh_gia.png') }}" />
		</div>
		<section id="chonphong">
		<?php $cr=0;?>
		@foreach($bravo_hotel_room_list_calendars as $kr=>$vr)
		<?php $cr++;
		if($cr==1){ ?>
		<div class="row">
			<div class="hbb_duoc_de_xuat_112">
				<div class="hbb112">
					<div class="hbb113">
						<div class="hbb114">
							<span style="display:block;padding-right:15px;"><i class="fa fa-star" aria-hidden="true"></i></span> Được đề xuất
						</div>
						
						<div class="hbb115">
							<div class="row">
								<div class="col-md-2 col-sm-2 col-xs-12">
									<div class="box_phong_o_small">
										<div class="box_imgs_small_11">
											<img alt="Phòng ở KS" src="https://storage.googleapis.com/hms_prod/photo/img/454899HhdamY/3.jpg" />
										</div>
										<div class="box_imgs_small_12">
											<ul>
												<li><img alt="Phòng ở KS" src="https://img.tripi.vn/cdn-cgi/image/width=198,height=150/https://storage.googleapis.com/hms_prod/photo/img/454899SQmNHY/2.jpg" /></li>
												<li><img alt="Phòng ở KS" src="https://img.tripi.vn/cdn-cgi/image/width=198,height=150/https://storage.googleapis.com/hms_prod/photo/img/454899jqcAdy/1.jpg" /></li>
												<li><img alt="Phòng ở KS" src="https://img.tripi.vn/cdn-cgi/image/width=198,height=150/https://storage.googleapis.com/hms_prod/photo/img/454899Mxlmjt/4.jpg" /></li>
											</ul>
										</div>
										<div class="hbb_1032">
											<a href="javascript:void(0);">Xem chi tiết phòng <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										</div>
										<div class="hbb_1030">
										   <div class="hbb_1031">Điều hòa nhiệt độ</div>
										   <div class="hbb_1031">Khăn tắm</div>
										   <div class="hbb_1031">Cửa sổ</div>
										   <div class="hbb_1031">Điện thoại</div>
										</div>
										<div class="hbb_1031 hbb_1033">+17 tiện ích</div>
										
									</div>
								</div>
								<div class="col-md-10 col-sm-10 col-xs-12">
									<div class="contentrightrooom">
										<div class="titleroom">
											{!! $vr->title !!}
										</div>
										<div class="under_title_room">
											<div class="hbb1011">
												<span class="jss1063"><i class="fa fa-users" aria-hidden="true"></i> Sức chứa tối đa {!! $vr->adults !!} người</span>
												<span class="MuiBox-root jss1064" style="color: rgb(0, 182, 243); margin-left: 2px;">(Xem chi tiết)</span>
												
											</div>
											<div class="hbb1011"><span><i class="fa fa-xing-square" aria-hidden="true"></i> {!! $vr->area !!}m2</span></div>
											<div class="hbb1011"><span><i class="fa fa-eye" aria-hidden="true"></i> {!! $vr->view !!}</span></div>
										</div>
										<div class="body_room">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12 br_right">
												<div class="line_arr"><svg width="16" height="16" fill="none"><path d="M13.444 6.111H5.667c-.86 0-1.556.696-1.556 1.556v4.666c0 .86.697 1.556 1.556 1.556h7.777c.86 0 1.556-.697 1.556-1.556V7.667c0-.86-.697-1.556-1.556-1.556z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.556 11.555a1.556 1.556 0 100-3.11 1.556 1.556 0 000 3.11zM11.889 6.111V4.556A1.556 1.556 0 0010.333 3H2.556A1.556 1.556 0 001 4.556v4.666a1.555 1.555 0 001.556 1.556H4.11" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg> Hoàn huỷ một phần</div>
												<div class="line_arr" style="color:#48BB78;"><svg width="16" height="16" fill="none" class="svgFillAll jss1080"><path d="M11.31 11.976l1.862 1.862M3.241 3.908l4.966 4.965M4.483 2.667L7.586 5.77 5.103 8.253 2 5.149M3.241 13.838l10.552-10.55a5.036 5.036 0 01-1.242 4.965c-2.194 2.194-3.724 2.482-3.724 2.482" stroke="#48BB78" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg> Bữa sáng miễn phí</div>
												<div class="line_arr"><svg viewBox="0 0 20 20" fill="none" style="width: 16px; height: 16px;"><path d="M10 17.5a7.5 7.5 0 100-15 7.5 7.5 0 000 15zM10 6.667h.008" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.167 10H10v3.333h.833" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> Chính sách hành khách và trẻ em</div>
												<div class="line_arr" style="color:rgb(237, 137, 54);"><svg width="16" height="16" fill="none" class="svgFillAll jss1088"><path d="M12.739 6.478L6.652 15l1.217-5.478H3L9.087 1 7.87 6.478h4.87z" stroke="#ED8936" stroke-linecap="round" stroke-linejoin="round"></path></svg> Xác nhận ngay</div>
												<div class="line_arr" style="color:#FF3366;display:flex;"><svg width="16" height="16" fill="none" class="svgFillAll" style="stroke: rgb(255, 51, 102);margin-right: 5px;"><path d="M3.333 8l3.334 3.333 6.666-6.666" stroke="##FF3366" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> An tâm đặt phòng, HoaBinh Booking hỗ trợ xuất hoá đơn nhanh chóng, tiết kiệm thời gian cho bạn.</div>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-12 br_right">
													<div class="hbb_11124">
														<div class="hbb_11123">
															@if($vr->bed_num>0)
																@for($ib=0;$ib<=$vr->bed_num;$ib++)
																	<svg width="24" height="24" fill="none" class="svgFillAll jss1106"><path d="M21 11.75H3a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.125 1.45.5.5 0 01.375.483v1.067a1 1 0 102 0v-1a.5.5 0 01.5-.5h13a.5.5 0 01.5.5v1a1 1 0 002 0v-1.064a.5.5 0 01.375-.483A1.5 1.5 0 0022.5 17.25v-4a1.5 1.5 0 00-1.5-1.5zM4 10.25a.5.5 0 00.5.5h15a.5.5 0 00.5-.5v-5a2.5 2.5 0 00-2.5-2.5h-11A2.5 2.5 0 004 5.25v5zm7-3h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75H9.267a.5.5 0 01-.433-.75A2.5 2.5 0 0111 7.25z" fill="#A0AEC0"></path></svg>
																@endfor
															@endif
														</div>
														<div class="center mgtop_5">
															{!! $vr->bed_num !!} {!! $vr->bed_type !!}
														</div>
													</div>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-12">
													<div class="price_room">
														<span>2.078.089 đ </span>
													</div>
													<div style="text-align:right;display:block;">/ đêm </div>
													<div>
														<button class="hbb_1205" type="button" style="margin: 12px 0px 0px;">Đặt phòng</button>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
		<?php }else{ ?>
			<div class="row">
				<div class="hbb_duoc_de_xuat_112">
					<div class="hbb112">
						<div class="hbb113" style="border:1px solid #E2E8F0;">
							<div class="hbb115">
								<div class="row">
									<div class="col-md-2 col-sm-2 col-xs-12">
										<div class="box_phong_o_small">
											<div class="box_imgs_small_11">
												<img alt="Phòng ở KS" src="https://storage.googleapis.com/hms_prod/photo/img/454899HhdamY/3.jpg" />
											</div>
											<div class="box_imgs_small_12">
												<ul>
													<li><img alt="Phòng ở KS" src="https://img.tripi.vn/cdn-cgi/image/width=198,height=150/https://storage.googleapis.com/hms_prod/photo/img/454899SQmNHY/2.jpg" /></li>
													<li><img alt="Phòng ở KS" src="https://img.tripi.vn/cdn-cgi/image/width=198,height=150/https://storage.googleapis.com/hms_prod/photo/img/454899jqcAdy/1.jpg" /></li>
													<li><img alt="Phòng ở KS" src="https://img.tripi.vn/cdn-cgi/image/width=198,height=150/https://storage.googleapis.com/hms_prod/photo/img/454899Mxlmjt/4.jpg" /></li>
												</ul>
											</div>
											<div class="hbb_1032">
												<a href="javascript:void(0);">Xem chi tiết phòng <i class="fa fa-angle-right" aria-hidden="true"></i></a>
											</div>
											<div class="hbb_1030">
											   <div class="hbb_1031">Điều hòa nhiệt độ</div>
											   <div class="hbb_1031">Khăn tắm</div>
											   <div class="hbb_1031">Cửa sổ</div>
											   <div class="hbb_1031">Điện thoại</div>
											</div>
											<div class="hbb_1031 hbb_1033">+17 tiện ích</div>
											
										</div>
									</div>
									<div class="col-md-10 col-sm-10 col-xs-12">
										<div class="contentrightrooom">
											<div class="titleroom">
												{!! $vr->title !!}
											</div>
											<div class="under_title_room">
												<div class="hbb1011">
													<span class="jss1063"><i class="fa fa-users" aria-hidden="true"></i> Sức chứa tối đa {!! $vr->adults !!} người</span>
													<span class="MuiBox-root jss1064" style="color: rgb(0, 182, 243); margin-left: 2px;">(Xem chi tiết)</span>
													
												</div>
												<div class="hbb1011"><span><i class="fa fa-xing-square" aria-hidden="true"></i> {!! $vr->area !!}m2</span></div>
												<div class="hbb1011"><span><i class="fa fa-eye" aria-hidden="true"></i> {!! $vr->view !!}</span></div>
											</div>
											<div class="body_room">
												<div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12 br_right">
													<div class="line_arr"><svg width="16" height="16" fill="none"><path d="M13.444 6.111H5.667c-.86 0-1.556.696-1.556 1.556v4.666c0 .86.697 1.556 1.556 1.556h7.777c.86 0 1.556-.697 1.556-1.556V7.667c0-.86-.697-1.556-1.556-1.556z" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.556 11.555a1.556 1.556 0 100-3.11 1.556 1.556 0 000 3.11zM11.889 6.111V4.556A1.556 1.556 0 0010.333 3H2.556A1.556 1.556 0 001 4.556v4.666a1.555 1.555 0 001.556 1.556H4.11" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg> Hoàn huỷ một phần</div>
													<div class="line_arr" style="color:#48BB78;"><svg width="16" height="16" fill="none" class="svgFillAll jss1080"><path d="M11.31 11.976l1.862 1.862M3.241 3.908l4.966 4.965M4.483 2.667L7.586 5.77 5.103 8.253 2 5.149M3.241 13.838l10.552-10.55a5.036 5.036 0 01-1.242 4.965c-2.194 2.194-3.724 2.482-3.724 2.482" stroke="#48BB78" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg> Bữa sáng miễn phí</div>
													<div class="line_arr"><svg viewBox="0 0 20 20" fill="none" style="width: 16px; height: 16px;"><path d="M10 17.5a7.5 7.5 0 100-15 7.5 7.5 0 000 15zM10 6.667h.008" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9.167 10H10v3.333h.833" stroke="#4A5568" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> Chính sách hành khách và trẻ em</div>
													<div class="line_arr" style="color:rgb(237, 137, 54);"><svg width="16" height="16" fill="none" class="svgFillAll jss1088"><path d="M12.739 6.478L6.652 15l1.217-5.478H3L9.087 1 7.87 6.478h4.87z" stroke="#ED8936" stroke-linecap="round" stroke-linejoin="round"></path></svg> Xác nhận ngay</div>
													<div class="line_arr" style="color:#FF3366;display:flex;"><svg width="16" height="16" fill="none" class="svgFillAll" style="stroke: rgb(255, 51, 102);margin-right: 5px;"><path d="M3.333 8l3.334 3.333 6.666-6.666" stroke="##FF3366" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg> An tâm đặt phòng, HoaBinh Booking hỗ trợ xuất hoá đơn nhanh chóng, tiết kiệm thời gian cho bạn.</div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-12 br_right">
														<div class="hbb_11124">
															<div class="hbb_11123">
																@if($vr->bed_num>0)
																	@for($ib=1;$ib<=$vr->bed_num;$ib++)
																		<svg width="24" height="24" fill="none" class="svgFillAll jss1106"><path d="M21 11.75H3a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.125 1.45.5.5 0 01.375.483v1.067a1 1 0 102 0v-1a.5.5 0 01.5-.5h13a.5.5 0 01.5.5v1a1 1 0 002 0v-1.064a.5.5 0 01.375-.483A1.5 1.5 0 0022.5 17.25v-4a1.5 1.5 0 00-1.5-1.5zM4 10.25a.5.5 0 00.5.5h15a.5.5 0 00.5-.5v-5a2.5 2.5 0 00-2.5-2.5h-11A2.5 2.5 0 004 5.25v5zm7-3h2a2.5 2.5 0 012.166 1.25.5.5 0 01-.433.75H9.267a.5.5 0 01-.433-.75A2.5 2.5 0 0111 7.25z" fill="#A0AEC0"></path></svg>
																	@endfor
																@endif
															</div>
															<div class="center mgtop_5">
																{!! $vr->bed_num !!} {!! $vr->bed_type !!}
															</div>
														</div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-12">
														<div class="price_room">
															<span>2.078.089 đ </span>
														</div>
														<div style="text-align:right;display:block;">/ đêm </div>
														<div>
															<button class="hbb_1205" type="button" style="margin: 12px 0px 0px;">Đặt phòng</button>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>	
		<?php } ?>
		@endforeach
		</section>
	</div>
</div>




@endsection