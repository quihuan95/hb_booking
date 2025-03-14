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
                $title_page = "Cho thuê xe tự lái";
            }
        @endphp

        <div class="blog-breadcrumb hidden-xs">
            <div class="container">
                <ul>
                    <li><a href="https://hoabinhbooking.com"> Home</a></li>
                    <li class="active">
                        Cho thuê xe tự lái
                    </li>
                </ul>
            </div>
        </div>
        <style type="text/css">
            ._2Zw6g{ width: 100%;height: 260px; }
            ._2Zw6hga{ position: relative;float: left;width: 100%;height: auto; }
            ._2Zw6hgb{ position: absolute;width: 100%;height: 180px;background: #fff;border-radius: 5px;box-shadow: 0px 0px 5px 3px #dedede;top:-120px;z-index:999999999; }
            .t-check-in, .t-check-out{ width: 46%; }
            .t-check-in::before{ content: "Ngày bắt đầu";font-weight: bold;color: #000;padding: 0px;margin-right: 10px; }
            .t-check-out::before{ content: "Ngày kết thúc";font-weight: bold;color: #000;padding: 0px; }
            .t-dates{ border: 1px solid #dae1e7;
    border-radius: 3px;
    box-shadow: none;
    font-size: 14px;display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    .t-time{ width: 100%;height: auto;float: left;position: relative; }
    .t-time-2{ width: 160px;height: 100px;background-color: #fff;position: absolute;float: left;z-index: 99999999999999;border-radius: 5px;top: 25px;left: -12px;box-shadow:0px 0px 5px 5px #ccc;padding:10px; }
    .t-time-3{ width: 160px;height: 100px;background-color: #fff;position: absolute;float: left;z-index: 99999999999999;border-radius: 5px;top: 60px;left: 12px;box-shadow:0px 0px 5px 5px #ccc;padding:10px; }
    .pdone{ text-align:right; }
    .pdone a{ margin-top: 10px;display: block; }
        </style>
        <div class="row">
          <img src="https://ik.imagekit.io/tvlk/image/imageResource/2019/11/29/1574993179637-73f1af1f9e2bf8b048b9fbaefaea87c2.png?tr=q-75" alt="Car Rental for All Your Traveling Needs" title="Cho thuê xe tự lái Hòa Bình Booking" class="_2Zw6g">
        </div>
        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="_2Zw6hga">
                            <div class="_2Zw6hgb">
                                <div class="row"  style="margin:0 5px;">
                                    <div class="col-md-4">
                                        <p style="margin-top:15px;margin-bottom: 0px;"><b>Địa điểm thuê xe của bạn</b></p>
                                        <p><select name="diadiem" id="diadiem" class="form-control">
                                            <option value=""></option>
                                            <option value="hanoi">TP. Hà Nội</option>
                                            <option value="hanoi">TP. Đà Nẵng</option>
                                            <option value="hanoi">TP. HCM</option>
                                        </select></p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>&nbsp;</p>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="t-datepicker" style="height:58px;margin-top: 5px;">
                                              <div style="margin-right: 10px;" class="t-check-in"></div>
                                              <div class="t-check-out"></div>
                                            </div>
                                    </div>
                                    <script type="text/javascript">
                                        $( document ).ready(function() {
                                            $('.t-time').click(function()
                                            {
                                                $('.t-time-2').css('display','block');
                                                $('.over').css({ 'width':'100%','height':'100%' });
                                            });
                                            $('.t-time-end').click(function()
                                            {
                                                $('.t-time-3').css('display','block');
                                                $('.over').css({ 'width':'100%','height':'100%' });
                                            });

                                            
                                            $('a#adonebegin11').click(function(e)
                                            {
                                                e.stopImmediatePropagation();
                                                var giobatdau='';
                                                var hbegin=$('#gio').val();
                                                var mbegin=$('#phut').val();
                                                giobatdau+=hbegin<10?'0'+hbegin:hbegin;
                                                giobatdau+=':';
                                                giobatdau+=mbegin=='0'?'00':mbegin;
                                                $('#giobatdau').html(giobatdau);
                                                fnResetTime();
                                            });

                                            $('a#adoneend').click(function(e)
                                            {
                                                e.stopImmediatePropagation();
                                                var gioend='';
                                                var hend=$('#gioend').val();
                                                var mend=$('#phutend').val();
                                                gioend+=hend<10?'0'+hend:hend;
                                                gioend+=':';
                                                gioend+=mend=='0'?'00':mend;
                                                $('#gioketthuc').html(gioend);
                                                fnResetTime();
                                            });

                                            $('.over').click(function()
                                            {
                                                fnResetTime();
                                            });


                                        });
                                        


                                        function fnResetTime(){
                                            $('.t-time-2').css('display','none');
                                            $('.t-time-3').css('display','none');
                                            $('.over').css({ 'width':'0px','height':'0px' });
                                        }
                                    </script>
                                    <div class="col-md-2">
                                        <div style="margin-top: 5px;">
                                            <b>Giờ bắt đầu</b>
                                        <div class="form-control">
                                            <div class="t-time">
                                                <img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/c/c9c73d71b29074cbcfd896d00b95cab3.svg" style="float:left;margin-right: 5px;width: 19px;"> <span id="giobatdau" style="float:left;">09:00</span>
                                                <div class="t-time-2" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <b>Giờ</b>
                                                        <div class="row" style="padding:0 10px;">
                                                            <select class="form-control" id="gio" name="gio">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Phút</b>
                                                        <div class="row" style="padding:0 10px;">
                                                            <select class="form-control" id="phut" name="phut">
                                                                <option value="0">0</option>
                                                                <option value="30">30</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <p class="pdone"><a href="javascript:void(0);" id="adonebegin11" class="adonebegin11">Xong</a></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div style="margin-top: 5px;">
                                            <b>Giờ kết thúc</b>
                                        <div class="form-control">
                                            <div class="t-time-end">
                                                <img src="https://d1785e74lyxkqq.cloudfront.net/_next/static/v2/c/c9c73d71b29074cbcfd896d00b95cab3.svg" style="float:left;margin-right: 5px;width: 19px;"> <span id="gioketthuc" style="float:left;">09:00</span>
                                                <div class="t-time-3" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <b>Giờ</b>
                                                        <div class="row" style="padding:0 10px;">
                                                            <select class="form-control" id="gioend" name="gioend">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <b>Phút</b>
                                                        <div class="row" style="padding:0 10px;">
                                                            <select class="form-control" id="phutend" name="phutend">
                                                                <option value="0">0</option>
                                                                <option value="30">30</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="pdone"><a href="javascript:void(0);" id="adoneend" class="adoneend">Xong</a></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <!--<input type="submit" name="btnTimxe" id="btnTimxe">-->
                                        <button type="submit" name="btnTimxe" id="btnTimxe" class="btn btn-primary" style="background-color: rgb(255, 94, 31);width: 100%;margin-top: 25px;padding: 7px;">
                                            <i class="fa fa-search"></i> Tìm xe
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .mn6hi{ border-radius: 5px;background: #fff;width: 100%;min-height: 100px;box-shadow: 0px 0px 5px 3px #dedede;height: auto;padding: 10px; }
                .mn6hj{ width: 100%;height: 90px;clear: both; }
            </style>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mn6hj"></div>
                        <div><h2>Các loại xe nổi bật</h2></div>
                    </div>
                </div>
                <div class="row" style="margin-bottom:25px;">
                    <div class="col-md-12">
                        <div class="mn6hi">
                            <div class="row">
                                <div class="col-md-4">
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2021/11/18/1637208308735-14c75db4b125d8cc4a19d7b6f6906e96.jpeg?tr=dpr-2,q-75,w-140">
                            </div>
                            <div class="col-md-5">
                                <p><b>VinFast Fadil</b></p>
                                <div style="background-color: rgb(242, 243, 243); border-radius: 14px; padding: 4px 8px;width: 80px;text-align: center;margin-bottom: 10px;"><span style="color:rgb(104, 113, 118);">Tự động</span></div>
                                <div style="display: flex;">
                                    <div style="margin-right: 15px;"><img alt="bag" style="width: 20px;margin-top: -5px;" src="public/icon/bag.png"> 2</div>
                                    <div><img alt="seat" style="width: 20px;margin-top: -5px;" src="public/icon/seat.png"> 4</div>
                                </div>
                                <div style="margin-top: 10px;">
                                    Tự lái
                                </div>
                            </div>
                            <div class="col-md-3" style="font-size: 12px;color: rgb(104, 113, 118);">
                                <div>Giá thuê cơ bản từ</div>
                                <div><span style="color:rgb(255, 94, 31);font-size: 20px;font-weight: bold;">609.600  VND</span> / ngày</div>
                                <div>609.600  VND Tổng</div>
                                <div class="ttbutton">
                                    <a style="background-color: rgb(255, 94, 31);width: 100%;margin-top: 25px;padding: 7px;" class="btn btn-primary" href="javascript:void(0);">Tiếp tục</a>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row" style="margin-bottom:25px;">
                    <div class="col-md-12">
                        <div class="mn6hi">
                            <div class="row">
                                <div class="col-md-4">
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2021/11/18/1637208228956-bb0c51833dc6c7406a6669b40a58fc25.jpeg?tr=dpr-2,q-75,w-140">
                            </div>
                            <div class="col-md-5">
                                <p><b>VinFast Fadil</b></p>
                                <div style="background-color: rgb(242, 243, 243); border-radius: 14px; padding: 4px 8px;width: 80px;text-align: center;margin-bottom: 10px;"><span style="color:rgb(104, 113, 118);">Tự động</span></div>
                                <div style="display: flex;">
                                    <div style="margin-right: 15px;"><img alt="bag" style="width: 20px;margin-top: -5px;" src="public/icon/bag.png"> 2</div>
                                    <div><img alt="seat" style="width: 20px;margin-top: -5px;" src="public/icon/seat.png"> 4</div>
                                </div>
                                <div style="margin-top: 10px;">
                                    Tự lái
                                </div>
                            </div>
                            <div class="col-md-3" style="font-size: 12px;color: rgb(104, 113, 118);">
                                <div>Giá thuê cơ bản từ</div>
                                <div><span style="color:rgb(255, 94, 31);font-size: 20px;font-weight: bold;">609.600  VND</span> / ngày</div>
                                <div>609.600  VND Tổng</div>
                                <div class="ttbutton">
                                    <a style="background-color: rgb(255, 94, 31);width: 100%;margin-top: 25px;padding: 7px;" class="btn btn-primary" href="javascript:void(0);">Tiếp tục</a>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row" style="margin-bottom:25px;">
                    <div class="col-md-12">
                        <div class="mn6hi">
                            <div class="row">
                                <div class="col-md-4">
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2021/11/18/1637208296447-606cf4459b8f5abcde719a333e019725.jpeg?tr=dpr-2,q-75,w-140">
                            </div>
                            <div class="col-md-5">
                                <p><b>VinFast Fadil</b></p>
                                <div style="background-color: rgb(242, 243, 243); border-radius: 14px; padding: 4px 8px;width: 80px;text-align: center;margin-bottom: 10px;"><span style="color:rgb(104, 113, 118);">Tự động</span></div>
                                <div style="display: flex;">
                                    <div style="margin-right: 15px;"><img alt="bag" style="width: 20px;margin-top: -5px;" src="public/icon/bag.png"> 2</div>
                                    <div><img alt="seat" style="width: 20px;margin-top: -5px;" src="public/icon/seat.png"> 4</div>
                                </div>
                                <div style="margin-top: 10px;">
                                    Tự lái
                                </div>
                            </div>
                            <div class="col-md-3" style="font-size: 12px;color: rgb(104, 113, 118);">
                                <div>Giá thuê cơ bản từ</div>
                                <div><span style="color:rgb(255, 94, 31);font-size: 20px;font-weight: bold;">609.600  VND</span> / ngày</div>
                                <div>609.600  VND Tổng</div>
                                <div class="ttbutton">
                                    <a style="background-color: rgb(255, 94, 31);width: 100%;margin-top: 25px;padding: 7px;" class="btn btn-primary" href="javascript:void(0);">Tiếp tục</a>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row" style="margin-bottom:25px;">
                    <div class="col-md-12">
                        <div class="mn6hi">
                            <div class="row">
                                <div class="col-md-4">
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2021/11/18/1637208326192-014d03e4ea8f912c822478949676aca7.jpeg?tr=dpr-2,q-75,w-140">
                            </div>
                            <div class="col-md-5">
                                <p><b>VinFast Fadil</b></p>
                                <div style="background-color: rgb(242, 243, 243); border-radius: 14px; padding: 4px 8px;width: 80px;text-align: center;margin-bottom: 10px;"><span style="color:rgb(104, 113, 118);">Tự động</span></div>
                                <div style="display: flex;">
                                    <div style="margin-right: 15px;"><img alt="bag" style="width: 20px;margin-top: -5px;" src="public/icon/bag.png"> 2</div>
                                    <div><img alt="seat" style="width: 20px;margin-top: -5px;" src="public/icon/seat.png"> 4</div>
                                </div>
                                <div style="margin-top: 10px;">
                                    Tự lái
                                </div>
                            </div>
                            <div class="col-md-3" style="font-size: 12px;color: rgb(104, 113, 118);">
                                <div>Giá thuê cơ bản từ</div>
                                <div><span style="color:rgb(255, 94, 31);font-size: 20px;font-weight: bold;">609.600  VND</span> / ngày</div>
                                <div>609.600  VND Tổng</div>
                                <div class="ttbutton">
                                    <a style="background-color: rgb(255, 94, 31);width: 100%;margin-top: 25px;padding: 7px;" class="btn btn-primary" href="javascript:void(0);">Tiếp tục</a>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row" style="margin-bottom:25px;">
                    <div class="col-md-12">
                        <div class="mn6hi">
                            <div class="row">
                                <div class="col-md-4">
                                <img src="https://ik.imagekit.io/tvlk/image/imageResource/2021/11/18/1637208345239-adfca7e6d8f35ad5ef953e0ca754432f.jpeg?tr=dpr-2,q-75,w-140">
                            </div>
                            <div class="col-md-5">
                                <p><b>VinFast Fadil</b></p>
                                <div style="background-color: rgb(242, 243, 243); border-radius: 14px; padding: 4px 8px;width: 80px;text-align: center;margin-bottom: 10px;"><span style="color:rgb(104, 113, 118);">Tự động</span></div>
                                <div style="display: flex;">
                                    <div style="margin-right: 15px;"><img alt="bag" style="width: 20px;margin-top: -5px;" src="public/icon/bag.png"> 2</div>
                                    <div><img alt="seat" style="width: 20px;margin-top: -5px;" src="public/icon/seat.png"> 4</div>
                                </div>
                                <div style="margin-top: 10px;">
                                    Tự lái
                                </div>
                            </div>
                            <div class="col-md-3" style="font-size: 12px;color: rgb(104, 113, 118);">
                                <div>Giá thuê cơ bản từ</div>
                                <div><span style="color:rgb(255, 94, 31);font-size: 20px;font-weight: bold;">609.600  VND</span> / ngày</div>
                                <div>609.600  VND Tổng</div>
                                <div class="ttbutton">
                                    <a style="background-color: rgb(255, 94, 31);width: 100%;margin-top: 25px;padding: 7px;" class="btn btn-primary" href="javascript:void(0);">Tiếp tục</a>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection