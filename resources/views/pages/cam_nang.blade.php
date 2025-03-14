@extends('layout')
@section('content')
<script type="text/javascript">
	window.addEventListener('DOMContentLoaded', (event) => { var inputLeft = document.getElementById("input-left");var inputRight = document.getElementById("input-right");var thumbLeft = document.querySelector(".slider_2 > .thumb.left");var thumbRight = document.querySelector(".slider_2 > .thumb.right");var range = document.querySelector(".slider_2 > .range");
	function setLeftValue() { var _this = inputLeft, min = parseInt(_this.min), max = parseInt(_this.max); _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);var percent = ((_this.value - min) / (max - min)) * 100;thumbLeft.style.left = percent+3 + "%";range.style.left = percent + "%";$('#min_value').val(_this.value.replace(/\B(?=(\d{3})+(?!\d))/g, ',')); }
	setLeftValue();
	function setRightValue() { var _this = inputRight, min = parseInt(_this.min), max = parseInt(_this.max);_this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);var percent = ((_this.value - min) / (max - min)) * 100;thumbRight.style.right = (100 - percent)+3 + "%";range.style.right = (100 - percent) + "%";$('#max_value').val(_this.value.replace(/\B(?=(\d{3})+(?!\d))/g, ',')); }
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
		
	<div class="container">
		<div class="row">
			<div class="nav-vh">
				<ul>
					<li><a href="/">Trang chủ</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li><span>Cẩm nang</span></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div style="width:100%;height:20px;clear:both;"></div>
	<div>
		
	<div class="container">
		<div class="news_details">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12 boxlmb">
					<div class="list_news">
						@foreach($all_camnang as $kt=>$kv)
						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-12">
								<a href="{!! route('news.details',array($kv->slug)) !!}">
									<img src="{!! $kv->picture !!}" alt="{!! $kv->title !!}">
								</a>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<div class="box_short">
									<a rel="dofollow" href="{!! route('news.details',array($kv->slug)) !!}"><h2 class="mt-0">{!! $kv->title !!}</h2></a>
									
									<div class="info-detail-category-tour">
										<span>Ngày đăng: {!! $kv->created_at !!}</span>
									</div>
									
									<div class="short_content">{!! $kv->news_desc !!}</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12 boxrmb">
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
												<input type="range" onchange="fnPrice()" id="input-left" min="0" max="5000000" value="0">
												<input type="range" onchange="fnPrice()" id="input-right" min="0" max="5000000" value="5000000">
												<div class="slider_2">
													<div class="track"></div>
													<div class="range" style="left: 0%; right: 0%;"></div>
													<div class="thumb left" style="left: 3%;"></div>
													<div class="thumb right" style="right: 3%;"></div>
												</div>
											</div>
										</div>
										<div class="points">
												<input class="left minmax" onchange="fnPrice()" type="text" id="min_value" name="min" value="" style="text-align:left;">
												<input class="right minmax" onchange="fnPrice()" type="text" id="max_value" name="max" value="" style="text-align:right;">
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
										  <input type="checkbox" id="ansangmp" name="ansangmp" value="0">
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
									  </div>
								   </div>
								   
								   <div class="MuiBox-root jss6528 jss6517">
										 <div class="MuiBox-root jss6535 jss6533">
											 <input type="checkbox" id="ansangmp" name="ansangmp" value="0">
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
										 </div>
									  </div>
								   
								   <div class="MuiBox-root jss6528 jss6517">
										<div class="MuiBox-root jss6535 jss6533">
											<input type="checkbox" id="ansangmp" name="ansangmp" value="0">
										   <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											  <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										   </svg>
										   <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											  <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										   </svg>
										   <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											  <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										   </svg>
										</div>
									 </div>
								   
								   <div class="MuiBox-root jss6528 jss6517">
									   <div class="MuiBox-root jss6535 jss6533">
										   <input type="checkbox" id="ansangmp" name="ansangmp" value="0">
										  <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										  </svg>
										  <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										  </svg>
									   </div>
									</div>
									
									<div class="MuiBox-root jss6528 jss6517">
									   <div class="MuiBox-root jss6535 jss6533">
										   <input type="checkbox" id="ansangmp" name="ansangmp" value="0">
										  <svg width="14" height="14" fill="none" class="svgFillAll jss6534" style="stroke: rgb(255, 188, 57); fill: rgb(255, 188, 57);">
											 <path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path>
										  </svg>
									   </div>
									</div>
							</div>
							
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
							<p class="hbb_6493">Dịch vụ đi kèm</p>
							<div class="waplistulboxright">
								<ul>
									<li><input type="checkbox" id="ansangmp" name="ansangmp" value="0" /> Ăn sáng miễn phí</li>
									<li><input type="checkbox" id="huylinhhoat" name="huylinhhoat" value="1" /> Hủy linh hoạt</li>
									<li><input type="checkbox" id="khuyenmaigiamgia" name="khuyenmaigiamgia" value="2" /> Khuyến mãi - Giảm giá</li>
								</ul>
							</div>
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
							<p class="hbb_6493">Người dùng đánh giá</p>
							<div class="waplistulboxright">
								<ul>
									<li><input type="checkbox" id="tuyetvoi" name="tuyetvoi" value="0" /> Tuyệt vời (9.0+)</li>
									<li><input type="checkbox" id="rattot" name="rattot" value="1" /> Rất tốt (8.0+)</li>
									<li><input type="checkbox" id="tot" name="tot" value="2" /> Tốt (7.0+)</li>
								</ul>
							</div>
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
							<p class="hbb_6493">Loại khách sạn</p>
							<div class="waplistulboxright">
								<ul>
									<li><input type="checkbox" id="lks_khachsan" name="lks_khachsan" value="0" /> Khách sạn</li>
									<li><input type="checkbox" id="lks_khachsancanho" name="lks_khachsancanho" value="1" /> Khách sạn căn hộ</li>
									<li><input type="checkbox" id="lks_khunghiduong" name="lks_khunghiduong" value="2" /> Khu nghỉ dưỡng</li>
									<li><input type="checkbox" id="lks_nhanghi" name="lks_nhanghi" value="3" /> Nhà nghỉ</li>
								</ul>
							</div>
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
							<p class="hbb_6493">Khu vực</p>
							<div class="waplistulboxright">
								<ul>
									<li><input type="checkbox" id="kv_quan2" name="kv_quan2" value="0" /> Quận 2</li>
									<li><input type="checkbox" id="kv_quan3" name="kv_quan3" value="1" /> Quận 3</li>
									<li><input type="checkbox" id="kv_quan_tan_phu" name="kv_quan_tan_phu" value="2" /> Quận Tân Phú</li>
									<li><input type="checkbox" id="kv_quan_go_vap" name="kv_quan_go_vap" value="3" /> Quận Gò Vấp</li>
									<li><input type="checkbox" id="kv_quan_bon" name="kv_quan_bon" value="4" /> Quận 4</li>
								</ul>
							</div>
						</div>
						<div class="hbb_6511"></div>
						<div class="hbb_6492">
							<p class="hbb_6493">Tiện nghi</p>
							<div class="waplistulboxright">
								<ul>
									<li><input type="checkbox" id="tn_duadonkhachsanbay" name="tn_duadonkhachsanbay" value="0" /> Đưa/đón khách sân bay</li>
									<li><input type="checkbox" id="tn_duadonkhachbenpha" name="tn_duadonkhachbenpha" value="1" /> Đưa/đón khách bến phà</li>
									<li><input type="checkbox" id="tn_duadonkhachgatau" name="tn_duadonkhachgatau" value="2" /> Đưa/đón khách ga tàu</li>
									<li><input type="checkbox" id="tn_chothuexemay" name="tn_chothuexemay" value="3" /> Cho thuê xe máy</li>
									<li><input type="checkbox" id="tn_chothuexedap" name="tn_chothuexedap" value="4" /> Cho thuê xe đạp</li>
								</ul>
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
