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


<div style="width:100%;height:40px;clear:both;"></div>
<div>
	
<div class="container">
	<div class="row">
		<div class="nav-vh">
			<ul>
				<li><a href="/">Trang chủ</a></li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li><a href="/">{!! $news_catalog->title !!}</a></li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li><span>{!! $all_news->title !!}</span></li>
			</ul>
		</div>
	</div>
</div>

<div style="width:100%;height:20px;clear:both;"></div>
<div>
	
<div class="container">
	<div class="news_details">
		<div class="row">
			<h1>{!! $all_news->title !!}</h1>
			<div class="txt-nhat italic">Đăng ngày : <span>{!! $all_news->created_at !!}</span></div>
		</div>
		<div class="row">
			{!! $all_news->news_content !!}
		</div>
	</div>
</div>



@endsection