@extends('layout')
@section('content')
<script type="text/javascript">
	window.addEventListener('DOMContentLoaded', (event) => { var inputLeft = document.getElementById("input-left");var inputRight = document.getElementById("input-right");var thumbLeft = document.querySelector(".slider_2 > .thumb.left");var thumbRight = document.querySelector(".slider_2 > .thumb.right");var range = document.querySelector(".slider_2 > .range");
	function setLeftValue() { var _this = inputLeft, min = parseInt(_this.min), max = parseInt(_this.max); _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);var percent = ((_this.value - min) / (max - min)) * 100;thumbLeft.style.left = percent+3 + "%";range.style.left = percent + "%";$('#min_value').val(_this.value.replace(/\B(?=(\d{3})+(?!\d))/g, ',')+' đ'); }
	setLeftValue();
	function setRightValue() { var _this = inputRight, min = parseInt(_this.min), max = parseInt(_this.max);_this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);var percent = ((_this.value - min) / (max - min)) * 100;thumbRight.style.right = (100 - percent)+3 + "%";range.style.right = (100 - percent) + "%";$('#max_value').val(_this.value.replace(/\B(?=(\d{3})+(?!\d))/g, ',')+' đ'); }
	setRightValue();inputLeft.addEventListener("input", setLeftValue); inputRight.addEventListener("input", setRightValue); });
</script>
<div class="wappageslocation">
	<div style="background:url(https://hoanghaihotel.vn/Data/images/tintuc/10032021170917-gioi-thieu-ve-khach-san-hoang-hai.jpg) no-repeat top left;background-size: cover;margin-bottom:15px;">
		<p style="margin:0px;padding:0px;">&nbsp;</p>
		<div class="toppages">
			<div class="jsc11" style="top:10px;">
				@include('inc.search')
			</div>
		</div>
		<div style="width:100%;height:40px;clear:both;"></div>
	</div>
<div>
	<input type="hidden" id="hdCurrentUrl" name="hdCurrentUrl" value="{!! $urlfull !!}" />	
	<div class="container">
		<div class="row">
			<div class="nav-vh">
				<ul>
					<li><a href="/">Trang chủ</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li><a href="/">Khách sạn</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div style="width:100%;height:20px;clear:both;"></div>
	<div>
		
	<div class="container">
		<div class="news_details">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="box_right_location">
						<div class="hbb_6490">
							Bộ lọc
							<a href="/">Xóa tất cả lọc</a>
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
								<p class="hbb_6493">Khoảng giá (1 đêm)</p>
								<div style="width: 100%;height: 60px;padding-top: 20px;">
									<div class="wapmnleftcat">
										<div class="middle">
											<div class="multi-range-slider">
												<input type="range" onchange="fnSpacePrice()" id="input-left" min="0" max="5000000" value="{{$min_price}}">
												<input type="range" onchange="fnSpacePrice()" id="input-right" min="0" max="5000000" value="{{$max_price}}">
												<div class="slider_2">
													<div class="track"></div>
													<div class="range" style="left: 0%; right: 0%;"></div>
													<div class="thumb left" style="left: 3%;"></div>
													<div class="thumb right" style="right: 3%;"></div>
												</div>
											</div>
										</div>
										<div class="points">
												<input class="left minmax" onchange="fnSpacePrice()" type="text" id="min_value" name="min" value="{{$min_price}}" style="text-align:left;">
												<input class="right minmax" onchange="fnSpacePrice()" type="text" id="max_value" name="max" value="{{$max_price}}" style="text-align:right;">
										</div>
									</div>
									<div style="width: 100%;" class="clearfix"></div>
								</div>
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6512">
							<div class="hbb_6513">
								Hạng khách sạn
							</div>
							<div class="hbb_6512">
								   <div class="MuiBox-root jss6528 jss6517">
									  <div class="MuiBox-root jss6535 jss6533">
										  <input type="checkbox" id="ansangmp5" name="ansangmp5" value="0">
										  
										 <label for="ansangmp5" class="lblable">
											 <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
												 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
											  </svg>
											  <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
												 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
											  </svg>
											  <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
												 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
											  </svg>
											  <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
												 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
											  </svg>
											  <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
												 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
											  </svg>
										 </label>
									  </div>
								   </div>
								   
								   <div class="MuiBox-root jss6528 jss6517">
										 <div class="MuiBox-root jss6535 jss6533">
											 <input type="checkbox" id="ansangmp4" name="ansangmp4" value="0">
											 <label for="ansangmp4" class="lblable">
											<svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											   <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
											</svg>
											<svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											   <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
											</svg>
											<svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											   <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
											</svg>
											<svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											   <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
											</svg>
											 </label>
										 </div>
									  </div>
								   
								   <div class="MuiBox-root jss6528 jss6517">
										<div class="MuiBox-root jss6535 jss6533">
											<input type="checkbox" id="ansangmp3" name="ansangmp3" value="0">
											<label for="ansangmp3" class="lblable">
										   <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											  <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										   </svg>
										   <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											  <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										   </svg>
										   <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											  <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										   </svg>
											</label>
										</div>
									 </div>
								   
								   <div class="MuiBox-root jss6528 jss6517">
									   <div class="MuiBox-root jss6535 jss6533">
										   <input type="checkbox" id="ansangmp2" name="ansangmp2" value="0">
										   <label for="ansangmp2" class="lblable">
										  <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										  </svg>
										  <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										  </svg>
										   </label>
									   </div>
									</div>
									
									<div class="MuiBox-root jss6528 jss6517">
									   <div class="MuiBox-root jss6535 jss6533">
										   <input type="checkbox" id="ansangmp1" name="ansangmp1" value="0">
										   <label for="ansangmp1" class="lblable">
										  <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										  </svg>
										   </label>
									   </div>
									</div>
							</div>
							
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
							<p class="hbb_6493">Dịch vụ đi kèm</p>
							<div class="waplistulboxright">
								<ul>
									<li>
										<label><input type="checkbox" id="ansangmp" name="ansangmp" value="0" /> Ăn sáng miễn phí</label>
										</li>
									<li><label><input type="checkbox" id="huylinhhoat" name="huylinhhoat" value="1" /> Hủy linh hoạt</label></li>
									<li><label><input type="checkbox" id="khuyenmaigiamgia" name="khuyenmaigiamgia" value="2" /> Khuyến mãi - Giảm giá</label></li>
								</ul>
							</div>
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
							<p class="hbb_6493">Người dùng đánh giá</p>
							<div class="waplistulboxright">
								<ul>
									<li><label><input type="checkbox" id="tuyetvoi" name="tuyetvoi" value="0" /> Tuyệt vời (9.0+)</label></li>
									<li><label><input type="checkbox" id="rattot" name="rattot" value="1" /> Rất tốt (8.0+)</label></li>
									<li><label><input type="checkbox" id="tot" name="tot" value="2" /> Tốt (7.0+)</label></li>
								</ul>
							</div>
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
							<p class="hbb_6493">Loại khách sạn</p>
							<div class="waplistulboxright">
								<ul>
									<li><label><input type="checkbox" id="lks_khachsan" name="lks_khachsan" value="0" /> Khách sạn</label></li>
									<li><label><input type="checkbox" id="lks_khachsancanho" name="lks_khachsancanho" value="1" /> Khách sạn căn hộ</label></li>
									<li><label><input type="checkbox" id="lks_khunghiduong" name="lks_khunghiduong" value="2" /> Khu nghỉ dưỡng</label></li>
									<li><label><input type="checkbox" id="lks_nhanghi" name="lks_nhanghi" value="3" /> Nhà nghỉ</label></li>
								</ul>
							</div>
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
							<p class="hbb_6493">Khu vực</p>
							<div class="waplistulboxright">
								<ul>
									<li><label><input type="checkbox" id="kv_quan2" name="kv_quan2" value="0" /> Quận 2</label></li>
									<li><label><input type="checkbox" id="kv_quan3" name="kv_quan3" value="1" /> Quận 3</label></li>
									<li><label><input type="checkbox" id="kv_quan_tan_phu" name="kv_quan_tan_phu" value="2" /> Quận Tân Phú</label></li>
									<li><label><input type="checkbox" id="kv_quan_go_vap" name="kv_quan_go_vap" value="3" /> Quận Gò Vấp</label></li>
									<li><label><input type="checkbox" id="kv_quan_bon" name="kv_quan_bon" value="4" /> Quận 4</label></li>
								</ul>
							</div>
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
							<p class="hbb_6493">Tiện nghi</p>
							<div class="waplistulboxright">
								<ul>
									<li><label><input type="checkbox" id="tn_duadonkhachsanbay" name="tn_duadonkhachsanbay" value="0" /> Đưa/đón khách sân bay</label></li>
									<li><label><input type="checkbox" id="tn_duadonkhachbenpha" name="tn_duadonkhachbenpha" value="1" /> Đưa/đón khách bến phà</label></li>
									<li><label><input type="checkbox" id="tn_duadonkhachgatau" name="tn_duadonkhachgatau" value="2" /> Đưa/đón khách ga tàu</label></li>
									<li><label><input type="checkbox" id="tn_chothuexemay" name="tn_chothuexemay" value="3" /> Cho thuê xe máy</label></li>
									<li><label><input type="checkbox" id="tn_chothuexedap" name="tn_chothuexedap" value="4" /> Cho thuê xe đạp</label></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12">
					@foreach($all_hotels as $k=>$v)
					<div class="hbb_19865">
						<a href="{!! route('khachsan.details',array($v->slug)) !!}">
							<div class="hbb_19644">
								<div class="hbb_19645">
									{!! \App\Models\FileHelper::isImgs($v->image_id) !!}
								</div>
								<div class="hbb_19651">
									<div class="hbb_19652">
										<div class="hbb_19654_1">
											<div class="hbb_19654">Giá cực hiếm</div>
											<div class="hbb_19654" style="background-color: rgb(133, 71, 236); margin-right: 6px;margin-left:6px;">Giá độc quyền</div>
											<div class="hbb_19654" style="background-color: rgb(229, 62, 62); ">Giá cực tốt</div>
										</div>
										<div class="hbb19655">
											{!! $v->title !!}
										</div>
										<div class="hbb19655_2">
											<?php 
											if($v->star_rate>0){
												for($i=0;$i<=$v->star_rate;$i++){ ?>
													<svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);"><path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path></svg>
												<?php } } ?>
										</div>
										<div class="hbb_19656">
											<span class="hbb_19657">
												<svg width="21" height="16" fill="none" style="margin-right: 3px;"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.825 8.157c.044-.13.084-.264.136-.394.31-.783.666-1.548 1.118-2.264.3-.475.606-.95.949-1.398.474-.616 1.005-1.19 1.635-1.665.27-.202.55-.393.827-.59.019-.015.034-.033.038-.08-.036.015-.078.025-.111.045-.506.349-1.024.68-1.51 1.052A15.241 15.241 0 006.627 4.98c-.408.47-.78.97-1.144 1.474-.182.249-.31.534-.474.818-1.096-1.015-2.385-1.199-3.844-.77.853-2.19 2.291-3.862 4.356-5.011 3.317-1.843 7.495-1.754 10.764.544 2.904 2.041 4.31 5.497 4.026 8.465-1.162-.748-2.38-.902-3.68-.314.05-.92-.099-1.798-.3-2.67a14.842 14.842 0 00-.834-2.567 16.416 16.416 0 00-1.225-2.345l-.054.028c.103.193.21.383.309.58.402.81.642 1.67.8 2.553.152.86.25 1.724.287 2.595.027.648.003 1.294-.094 1.936-.01.066-.018.133-.027.219-1.223-1.305-2.68-2.203-4.446-2.617a9.031 9.031 0 00-5.19.29l-.033-.03z" fill="#F36"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10 12.92h-.003c.31-1.315.623-2.627.93-3.943.011-.052-.015-.145-.052-.176a1.039 1.039 0 00-.815-.247c-.082.01-.124.046-.142.135-.044.216-.088.433-.138.646-.285 1.207-.57 2.413-.859 3.62l.006.001c-.31 1.314-.623 2.626-.93 3.942-.011.052.016.145.052.177.238.196.51.285.815.247.082-.01.125-.047.142-.134.044-.215.088-.433.138-.648.282-1.208.567-2.414.857-3.62z" fill="#F36"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.983 19.203s-8.091-6.063-17.978-.467c0 0-.273.228.122.241 0 0 8.429-4.107 17.739.458-.002 0 .282.034.117-.232z" fill="#F36"></path></svg>8.6
											</span>
											<span class="hbb_19658">Rất tốt</span>
											<span class="hbb_19659">(396 đánh giá)</span>
										</div>
										<div class="hbb_19685">
											<div class="hbb_19660">
												<span style="style="width: 16px; height: 16px;""><svg width="16" height="16" fill="none"><path d="M8.467 3.8V2a1 1 0 00-1-1h-.8a1 1 0 00-1 1v1.8" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 7.467a1 1 0 001 1h9.838a1 1 0 00.64-.232l1.6-1.333a1 1 0 000-1.537l-1.6-1.333a1 1 0 00-.64-.232H2a1 1 0 00-1 1v2.667zM5.667 10.333V14a1 1 0 001 1h.8a1 1 0 001-1v-3.667" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
												<span class="hbb_19661">{!! $v->address !!}</span>
											</div>
											<div class="hbb_19660">
												<span style="width: 16px; height: 16px;"><svg width="16" height="16" fill="none"><path d="M2.667 7.556V6.222a.889.889 0 01.888-.889h3.556a.889.889 0 01.889.89v1.333" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 7.556V6.222a.889.889 0 01.889-.889h3.555a.889.889 0 01.89.89v1.333" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.518 7.556h10.963a1.185 1.185 0 011.186 1.185v2.815H1.333V8.74a1.185 1.185 0 011.185-1.185v0zM1.333 11.556v1.777M14.666 11.556v1.777" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.333 7.556v-4a.889.889 0 00-.889-.89H3.555a.889.889 0 00-.889.89v4" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
												<span class="hbb_19661">Deluxe City View</span>
											</div>
											<div class="hbb_19662">
												<span><svg width="16" height="16" fill="none" class="svgFillAll jss19663"><path d="M11.31 11.976l1.862 1.862M3.241 3.908l4.966 4.965M4.483 2.667L7.586 5.77 5.103 8.253 2 5.149M3.241 13.838l10.552-10.55a5.036 5.036 0 01-1.242 4.965c-2.194 2.194-3.724 2.482-3.724 2.482" stroke="#48BB78" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
												<span class="hbb_19661">Bữa sáng miễn phí</span>
											</div>
											<div class="hbb_19683">
												<svg width="16" height="16" fill="none"><path d="M12.739 6.478L6.652 15l1.217-5.478H3L9.087 1 7.87 6.478h4.87z" stroke="#ED8936" stroke-linecap="round" stroke-linejoin="round"></path></svg>
												<span class="hbb_19661">Xác nhận ngay</span>
											</div>
										</div>
									</div>
									<div class="hbb_19672">
										<div class="hbb_19673">
											-78%
											<span class="hbb_19674"></span>
										</div>
										<span class="hbb_19675">10.472.727đ</span>
										<span class="hbb_19676">2.360.187đ</span>
										<div class="hbb_19778">
											<div class="hbb_19861">
												<span>Mã:</span>
												<div class="hbb_19781">SALEHE</div>
												<span class="hbb_19779">
													-5%
												</span>
											</div>
											<div class="hbb_19774">
												2.242.177đ 
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>

	<p style="margin:0px;padding:0px;">&nbsp;</p>
</div>
@endsection