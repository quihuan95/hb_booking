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
</style>
<div class="container">
<div class="row20"></div>
<div class="row">
<div class="col-12">

<div class="box_hotels">
Xacs nhaanj thanh toan
</div>

</div>
</div>
</div>

<div class="row20"></div>
<div class="row20"></div>
<div class="row20"></div>
<div class="row20"></div>
@endsection