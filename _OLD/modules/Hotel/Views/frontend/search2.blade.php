@extends('layouts.app')
@section('head')
    <link href="{{ asset('module/hotel/css/hotel.css?_ver='.config('app.version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
@endsection
@section('content')
<p style="margin:0px;padding:0px;">&nbsp;</p>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-heading"></h1>
                <div class="sub-heading"></div>
                <div class="g-form-control">
                @include('Hotel::frontend.layouts.search.form-search2')
                </div>
            </div>
        </div>
    </div>
    <p style="margin:0px;padding:0px;">&nbsp;</p>

    <div class="bravo_search_hotel">
        
<link href="{{asset('public/libs/calendar/css/jquerysctipttop.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/libs/calendar/css/t-datepicker.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/libs/calendar/css/t-datepicker-blue.css')}}" rel="stylesheet" type="text/css">
<style type="text/css">
    .bravo_wrap .bravo_form .form-content{ padding: 5px 0 10px 55px; }
    .bravo_wrap .bravo_form .smart-search .bravo-autocomplete, .bravo_wrap .bravo_form .input-search .bravo-autocomplete{ margin-top: 10px; }
    .t-check-in, .t-check-out{ border-width: 0; }
    .t-datepicker{ color: #5191FA;  }
    .t-check-in .t-date-info-title, .t-check-out .t-date-info-title{ opacity:9!important;font-size: 15px;font-family: inherit; }
    .wap_phong{ width:100%;overflow-x: auto;margin-top: 5px;display: -webkit-box; }
    .wap_phong .phongp1{ width: 85px;height: 100px;text-align: center;border: solid 1px #0071c2;font-size: 11px;border-radius:3px;float:left;margin-right: 5px; }
    .wap_phong .pDate{ margin:0px;padding:1px;width:100%;padding: 1px 3px; }
    .wap_phong .pPrice{ background:#0071c2;color:#fff;text-align:center;height: auto; }
    .chocolate{ width: 100%;height: auto;clear: both;font-size: 11px;color: chocolate; }
</style>
<div class="container" style="margin-top:30px;">
<div class="row">
<div class="col-lg-3 col-md-12">
<div class="bravo_filter">
<form action="https://hoabinhbooking.com/vi/hotel" class="bravo_form_filter">
<div class="filter-title">
Lọc thông tin
</div>
<div class="g-filter-item">
<div class="item-title">
<h4>Lọc theo giá</h4>
<i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
<div class="item-content">
<div class="bravo-filter-price">
    <input type="hidden" class="filter-price" name="price_range" data-symbol=" đ" data-min="70000.00" data-max="8500000.00" data-from="70000.00" data-to="8500000.00" readonly="" value="70000;8500000" tabindex="-1" />
    <button type="submit" class="btn btn-link btn-apply-price-range">Đồng ý</button>
</div>
</div>
</div>
<div class="g-filter-item">
<div class="item-title">
<h4>Hạng khách sạn</h4>
<i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
<div class="item-content">
<ul>
<li>
<div class="bravo-checkbox">
<label>
<input name="star_rate[]" type="checkbox" value="5">
<span class="checkmark"></span>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</label>
</div>
</li>
<li>
<div class="bravo-checkbox">
<label>
<input name="star_rate[]" type="checkbox" value="4">
<span class="checkmark"></span>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</label>
</div>
</li>
<li>
<div class="bravo-checkbox">
<label>
<input name="star_rate[]" type="checkbox" value="3">
<span class="checkmark"></span>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</label>
</div>
</li>
<li>
<div class="bravo-checkbox">
<label>
<input name="star_rate[]" type="checkbox" value="2">
<span class="checkmark"></span>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</label>
</div>
</li>
<li>
<div class="bravo-checkbox">
<label>
<input name="star_rate[]" type="checkbox" value="1">
<span class="checkmark"></span>
<i class="fa fa-star"></i>
</label>
</div>
</li>
</ul>
</div>
</div>
<div class="g-filter-item">
<div class="item-title">
<h4> Tiện nghi </h4>
<i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
<div class="item-content">
<ul>
<li>
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="21"> Wi-Fi miễn phí
<span class="checkmark"></span>
</label>
</div>
</li>
<li>
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="22"> Wi-Fi ở nơi công cộng
<span class="checkmark"></span>
</label>
</div>
</li>
<li>
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="23"> Bãi biển riêng
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="24"> Bể bơi trong nhà
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
 <label>
<input type="checkbox" name="terms[]" value="25"> Bể bơi ngoài trời
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="26"> Phòng tập thể dục
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="27"> Spa
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="40"> Sòng bạc
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="41"> Hội nghị hội thảo
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="42"> Sân Golf
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="43"> Sân Tennis
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="44"> Nhà hàng, Khu ăn uống
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
 <input type="checkbox" name="terms[]" value="45"> Quán Bar
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="46"> Khu vui chơi trẻ em
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="47"> Bãi đậu xe ô tô
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="48"> Dịch vụ xe đưa đón sân bay
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="49"> Dịch vụ giữ đồ
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="50"> Dọn phòng hàng ngày
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="51"> Dịch vụ giặt là
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
<input type="checkbox" name="terms[]" value="52"> Dịch vụ đặt vé máy bay, tour du lịch
<span class="checkmark"></span>
</label>
</div>
</li>
<li class="hide">
<div class="bravo-checkbox">
<label>
 <input type="checkbox" name="terms[]" value="53"> Dịch vụ Karaoke
<span class="checkmark"></span>
</label>
</div>
</li>
</ul>
<button type="button" class="btn btn-link btn-more-item">Xem thêm <i class="fa fa-caret-down"></i></button>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-9 col-md-12">
<div class="bravo-list-item">
<div class="topbar-search">
<div class="text">
@if(!empty($data))
<?php echo count($data);?> chỗ nghỉ phù hợp
@endif
</div>
<div class="control">
</div>
</div>
<div class="list-item">
<div class="row">

<?php 
$extn='';
if(isset($_GET['t-start'])){
    $extn='?location_id='.$_GET['location_id'].'&t-start='.$_GET['t-start'].'&t-end='.$_GET['t-end'].'&phong='.$_GET['phong'].'&adult='.$_GET['adult'].'&child='.$_GET['child'];
}
?>

@foreach($data as $kk=>$vv)
<div class="col-lg-4 col-md-12">
<div class="item-loop ">
<div class="thumb-image ">
<a href="{{URL::to('vi/hotel/'.$vv->slug.$extn)}}">
{!! \Modules\Media\Helpers\FileHelper::isImgsSearch($vv->image_id,$vv->title) !!}
</a>
@if($vv->star_rate)
            <div class="star-rate">
                <div class="list-star">
                    <ul class="booking-item-rating-stars">
                        @for ($star = 1 ;$star <= $vv->star_rate ; $star++)
                            <li><i class="fa fa-star"></i></li>
                        @endfor
                    </ul>
                </div>
            </div>
        @endif
<div class="service-wishlist " data-id="100" data-type="hotel">
<i class="fa fa-heart"></i>
</div>
</div>
<div class="item-title">
<a href="{{URL::to('vi/hotel/'.$vv->slug.$extn)}}">
{{$vv->title}}
</a>
<div class="sale_info">19%</div>
</div>
<div class="location">
Cát Bà - Hải Phòng
</div>
<div class="info">
        <div class="g-price" style="text-align:right;">
        <?php /*if($vv->sale_price!=null){
                        echo '<span style="color:red;" class="text-price"><span style="text-decoration: line-through;">'.number_format($vv->price).'</span><sup>đ</sup></span><br/>';
                    }*/?>
            
            <div class="price">
            <?php 
            $formDate=$_GET['t-start'];
            $toDate=$_GET['t-end'];
            $price=\Modules\Media\Helpers\FileHelper::checkRoomFrontend($vv->id,$formDate,$toDate);
            if($price!=''){
                ?>
                Giá từ <span class="text-price"> <?php echo number_format($price);?> <sup>đ</sup> <span class="unit">đêm</span></span>
                <?php
            }else{ echo '<span style="color:red;">Hết phòng</span>'; }
            ?>
                
            </div>
            @if($vv->sale_price!=null)
            <!--<div class="prefix">
                <span class="fr_text">từ</span>
            </div>
            <div class="price">
                <span class="text-price"><?php echo number_format($vv->sale_price);?><sup>đ</sup> <span class="unit">đêm</span></span>
            </div>-->
            @endif
            
        </div>
        
        
</div>
</div>
</div>
@endforeach
</div>
</div>
<!--<div class="bravo-pagination">
<span class="count-string">Trang 1 - 3 trên 3 chỗ nghỉ</span>
</div>-->
</div>
</div>
</div>
</div>
    </div>
@endsection

@section('footer')
    <script type="text/javascript" src="{{ asset("libs/ion_rangeslider/js/ion.rangeSlider.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset('module/hotel/js/hotel.js?_ver='.config('app.version')) }}"></script>
@endsection