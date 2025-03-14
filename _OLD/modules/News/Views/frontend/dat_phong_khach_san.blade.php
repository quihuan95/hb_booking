@extends('layouts.app')
@section('head')
    <link href="{{ asset('module/news/css/news.css?_ver='.config('app.version')) }}" rel="stylesheet">
    <link href="{{ asset('css/app.css?_ver='.config('app.version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/daterange/daterangepicker.css") }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/fotorama/fotorama.css") }}" />
@endsection
@section('content')
<style type="text/css">
.mgtop{ width:100%;margin-top:10px; }
.row20{ width:100%;height:20px;clear: both; }
.row10{ width:100%;height:10px;clear: both; }
.box_hotels{ width:100%;min-height:130px;background-color:#fff;box-shadow: 0px 4px 6px rgb(0 0 0 / 10%), 0px 6px 14px rgb(0 0 0 / 20%);border-radius:5px;padding: 15px; }
.boximghotels{ float: left; }
.boximghotels img{ width:100px;margin:10px;border-radius:5px; }
.boxrightimghotels{ float: right;width: 79%; }
.boxrightimghotels h1{ font-size:18px;margin: 10px 0 0 0; }
.boxrightimghotels .star-rate i{ color:#fa5636; }
.rowundernamehotel{  }
.rowundernamehotel .box1{ float: left;border-left:solid 1px #ccc;padding: 0 15px; }
.rowundernamehotel .box1 p{ margin:0px;padding:0px; }
.box_info_contact{ width:100%;min-height:130px;height:auto;background-color:#fff;box-shadow: 0px 4px 6px rgb(0 0 0 / 10%), 0px 6px 14px rgb(0 0 0 / 20%);border-radius:5px;padding: 15px; }
.box_info_contact h2{font-size:18px;margin: 10px 0 0 0;}
.form-control1{ border:none;border-bottom:solid 1px #ccc;    width: 100%; }
.box_input_form p{ margin:0px;padding:0px; }
.box_info_room{ width:100%;min-height:130px;background-color:#fff;box-shadow: 0px 4px 6px rgb(0 0 0 / 10%), 0px 6px 14px rgb(0 0 0 / 20%);border-radius:5px;padding: 15px; }
.box_info_room img{ width:100%;height:114px; }
.box_info_room h2{font-size:18px;margin: 10px 0 0 0;}
.box_info_room p{ margin:0px;padding:0px; }
.w-right{ position: sticky;top:5px; }
</style>
<div class="container">
<div class="row20"></div>
<div class="row">
<div class="col-7">
<!---- form --->
<form id="aspnetForm" action="{!! route('booking.room') !!}" method="post" name="aspnetForm" enctype="multipart/form-data">
<div class="box_hotels">
<div class="boximghotels">
<img alt="" src="https://www.googleapis.com/download/storage/v1/b/hotel_image/o/logo%2F4%2F10976.jpg?generation=1563769073064379&alt=media"/>
</div>
<div class="boxrightimghotels">
<h1>{{ $data_hotel->title }}</h1>
@if($data_hotel->star_rate==1)
<div class="star-rate">
<i class="fa fa-star"></i>
</div>
@elseif($data_hotel->star_rate==2)
<div class="star-rate">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
@elseif($data_hotel->star_rate==3)
<div class="star-rate">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
@elseif($data_hotel->star_rate==4)
<div class="star-rate">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
@elseif($data_hotel->star_rate>=5)
<div class="star-rate">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</div>
@endif

<div class="rowundernamehotel">
<div class="box1">
<p><b>Nhận phòng</b></p>
<p>29-06-2021</p>
</div>
<div class="box1">
<p><b>Trả phòng</b></p>
<p>30-06-2021</p>
</div>
<div class="box1">
<p><b>Số đêm</b></p>
<p>1</p>
</div>
</div>


</div>
</div>
<div class="row20"></div>
<div class="box_info_contact">
<div class="box_input_form">
<h2 style="margin-bottom:10px;">Thông tin liên hệ</h2>
<div class="row20"></div>
<div>
<label for="txtHoten">Họ tên</label>
<input type="text" required="" id="txtHoten" name="txtHoten" value="" class="form-control1" placeholder=""/>
</div>
<div class="row20"></div>
<div class="row">
<div class="col-6">
<label for="txtPhone">Số điện thoại</label>
<input type="text" required=""  id="txtPhone" name="txtPhone" value="" class="form-control1" placeholder=""/>
</div>
<div class="col-6">
<label for="txtEmail">Email</label>
<input type="email" required=""  id="txtEmail" name="txtEmail" value="" class="form-control1" placeholder=""/>
</div>
</div>
<div class="row20"></div>
<!-- Date range -->
<div class="row">
            <div class="col-12">
                <div class="input-group input-daterange"> <label class="">Ngày nhận trả phòng :</label> <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" readonly /> </div>
</div>
</div>
<div class="row20"></div>
<h2 style="margin-bottom:10px;">Yêu cầu đặc biệt</h2>
<div class="row20"></div>
<p><label><input type="checkbox" id="y1" name="y1" value="Phòng không hút thuốc"/> Phòng không hút thuốc</label></p>
<p><label><input type="checkbox" id="y2" name="y2" value="Phòng ở tầng cao"/> Phòng ở tầng cao</label></p>
<div class="row10"></div>
<h2 style="margin-bottom:10px;">Yêu cầu riêng của bạn</h2>
<textarea style="height:100px;" id="rq_other" name="rq_other" row="5" cols="5" class="form-control"></textarea>
<div class="row20"></div>
</div>
</div>
<div class="row20"></div>
<div class="box_info_contact">
<h2>Phương thức thanh toán</h2>
<p><i style="color:#48BB78;">Sau khi hoàn tất thanh toán, mã xác nhận phòng sẽ được gửi ngay qua Email của bạn.</i></p>
<p style="border-bottom:solid 1px #ccc;margin:0px;padding:0px;"></p>
<div class="row20"></div>
<div class="row">
<div class="col-11">
<label for="payment1">Thẻ Visa, Master Card</label>
</div>
<div class="col-1">
<input type="radio" required=""  id="payment1" name="pay" value="Online"/>
</div>
</div>
<p style="border-bottom:solid 1px #ccc;margin:0px;padding:0px;"></p>
<div class="row20"></div>
<div class="row">
<div class="col-11">
<label for="payment2">Chuyển khoản ngân hàng</label>
</div>
<div class="col-1">
<input type="radio" required=""  id="payment2" name="pay" value="Tranfer"/>
</div>
</div>
<p style="border-bottom:solid 1px #ccc;margin:0px;padding:0px;"></p>
<div class="row20"></div>
<div class="">
<div style="float:right;margin-right:10px;display: block;text-align: right;">
<input style="background:rgb(255, 51, 102);border:rgb(255, 51, 102);" type="submit" class="btn btn-primary" id="btnPay" name="btnPay" value="Thanh toán"/>
<div class="row10"></div>
<p><i>Bằng cách nhấn nút Thanh toán, bạn đồng ý với <a href="javascript:void(0);" style="color: rgb(0, 182, 243);">Điều kiện và điều khoản</a> của chúng tôi</i></p>
</div>
</div>
<div class="row20"></div>
</div>
<input type="hidden" id="price" name="price" value="{{ $data_room->price }}"/>
</form>
<!--- endform --->
</div>
<div class="col-5">
<div class="w-right">
<div class="box_info_room">
<img alt="" src="https://i.travelapi.com/hotels/1000000/210000/200900/200805/34c850dc_z.jpg"/>
<h2>Phòng {{ $data_room->title }}, {{ $data_room->beds }} {{ $data_room->bed_type }}, {{ 'Quang cảnh '.$data_room->view }}</h2>
<div class="row10"></div>
<p>{{ $data_room->number }} người | {{ 'Quang cảnh '.$data_room->view }}</p>
<p>{{ $data_room->beds }} {{ $data_room->bed_type }}</p>
<p>Không hỗ trợ hoàn huỷ</p>
<p>Không bao gồm bữa ăn sáng</p>
<div class="row10"></div>
</div>
<div class="row10"></div>
<div class="box_info_room">
<table style="width:100%;height:auto;margin-bottom:10px;">
<tr>
<td style="text-align:left;vertical-align: middle;">1 phòng x 1 đêm</td>
<td style="text-align:right;vertical-align: middle;"><?php echo number_format($data_room->price);?></td>
</tr>
</table>
<p style="border-bottom:solid 1px #ccc;margin:0px;padding:0px;"></p>

<div class="row10"></div>
<table style="width:100%;height:auto;margin-bottom:10px;">
<tr>
<td style="text-align:left;vertical-align: middle;">
<p><b>Tổng tiền thanh toán</b></p>
<p><i>Đã bao gồm thuế, phí, VAT</i></p>
</td>
<td style="text-align:right;vertical-align: middle;"><?php echo number_format($data_room->price);?>đ</td>
</tr>
</table>
</div>

</div>


</div>
</div>
</div>

<div class="row20"></div>
<div class="row20"></div>
<div class="row20"></div>
<div class="row20"></div>

<style>
input {
    padding: 10px 15px !important;
    border: 1px solid #CFD8DC !important;
    border-radius: 4px !important;
    box-sizing: border-box;
    background-color: #fff !important;
    color: #000 !important;
    font-size: 16px !important;
    letter-spacing: 1px;
    position: relative;
    width: 100%
}

input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #FFA000 !important;
    outline-width: 0
}

.daterangepicker {
    background-color: #fff;
    border-radius: 0 !important;
    align-content: center !important;
    padding: 0 !important
}

thead tr:nth-child(2) {
    color: #BDBDBD !important
}

tbody tr td {
    padding: 5px 7px !important
}

.month {
    font-size: 16px !important;
    padding-bottom: 10px !important;
    padding-top: 10px !important
}

.start-date,
.end-date {
    border-radius: 0px !important
}

.available:hover {
    border-radius: 0px !important
}

.off {
    color: #EEEEEE !important
}

.off:hover {
    background-color: #EEEEEE !important;
    color: #fff !important
}

.drp-buttons {
    display: none !important
}
</style>


<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
$(document).ready(function(){
$(function() {
    var today = new Date();
    var startDate=today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
    //var endDate=(today.addDays()+1)+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
$('input[name="daterange"]').daterangepicker({
"startDate": startDate,
"endDate": startDate,
opens: 'right',
locale: {
format: 'DD/MM/YYYY'
}
});
});
});
</script>
@endsection