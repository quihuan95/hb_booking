@extends('layouts.app')
@section('head')
    <link href="{{ asset('module/news/css/news.css?_ver='.config('app.version')) }}" rel="stylesheet">
    <link href="{{ asset('css/app.css?_ver='.config('app.version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/daterange/daterangepicker.css") }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/fotorama/fotorama.css") }}" />
@endsection
@section('content')
    <div class="bravo-news">
        @php
            $title_page = setting_item("news_page_list_title");
            if(!empty($custom_title_page)){
                $title_page = "Gửi yêu cầu thành công";
            }
        @endphp

        <div class="blog-breadcrumb hidden-xs">
            <div class="container">
                <ul>
                    <li><a href="https://hoabinhbooking.com"> Home</a></li>
                    <li class="active">
                        Voucher du lịch
                    </li>
                </ul>
            </div>
        </div>
        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
<style type="text/css">
    ._thumbimgs{ float: left;margin-right: 5px;width: 16%; }
    ._thumbimgs ul{ list-style-type: none; }
    ._thumbimgs li{ overflow: hidden;flex: 0 0 auto;cursor: pointer; }
    ._thumbimgs li img{ width: 82px;height: 82px;object-fit: cover;border-radius: 4px;margin-bottom: 5px; }
    ._thumbimgs li img:hover, ._thumbimgs li img.active { border: 2px solid #26bed6; }
    ._thumbimgs li img.inactive { border: none; }
    ._bigimgs{  float: left;width: 83%; }
    ._right_content{border: solid 1px #ccc;padding: 10px;margin-top: 10px;}
    ._right_content p b{ color: #003c71;font-size: 16px;margin-top: 5px; }
    ._right_content p{ color: #828282;margin: 5px 0px;padding: 0px; }
    ._mau_voucher{ margin-top: 10px;width: 100%;clear: both; }
    ._mau_voucher p{ margin: 0px;padding: 0px;color: #4f4f4f; }
    ._mau_voucher .soluong{ padding: 5px;border: solid 1px #ccc;border-radius: 3px;color: #4f4f4f;width: 100px; }
    ._mau_voucher ul{ list-style-type: none; }
    ._mau_voucher ul li{ float: left;margin-right: 10px; }
    ._mau_voucher ul li label{ padding: 7px;border: solid 1px #ccc;border-radius: 3px;color: #4f4f4f; }
</style>

<div class="row">
                        <div class="col-md-12">

                            <h1 style="text-align: center;font-size: 25px;">Gửi yêu cầu voucher du lịch thành công</h1>
                            <p style="text-align: center;font-size: 18px;">Nhân viên tư vấn sẽ liên hệ với Quý khách trong vòng 60 phút (từ 8h-20h)</p>
                            <p style="text-align: center;font-size: 18px;">Trân trọng cám ơn Quý khách</p>
                        </div>
</div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yêu cầu đặt Voucher</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        ...
        <!--<button type="submit" class="btn btn-primary">Gửi yêu cầu</button>-->
      </div>
    </div>
  </div>
</div>
@endsection