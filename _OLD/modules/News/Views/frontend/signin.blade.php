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
                $title_page = "Đăng nhập";
            }
        @endphp

        <div class="blog-breadcrumb hidden-xs">
            <div class="container">
                <ul>
                    <li><a href="https://hoabinhbooking.com"> Home</a></li>
                    <li class="active">
                        Đăng nhập
                    </li>
                </ul>
            </div>
        </div>
        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
<style type="text/css">
    .red{ color: red; }
</style>

<div class="row">
     <form style="width:100%;" id="frmsignin" name="frmsignin" method="post" action="{{url(app_get_locale().'/dang-nhap')}}" enctype="multipart/form-data">
         <div id="wapperregister" style="margin-top:10px;width:100%;">
{{ csrf_field() }}
                    
                <div class="form-group" style="clear: both;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php
                    $message=Session::get('message');
                    if($message){
                        echo '<span style="color: red;">'.$message.'</span>';
                        $message=Session::put('message',null);
                    }
                    ?>
                    </div>
                </div>
                <div class="form-group" style="clear: both;">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="error_message_signup"></div>
                    </div>
                </div>
                <div class="form-group" style="clear: both;">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <label>Email <span class="red">*</span>:</label>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" style="margin-bottom:10px;" required="" id="txtEmail" name="txtEmail" placeholder="">
                    </div>
                </div>

                <div class="form-group" style="clear: both;">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <label>Mật khẩu <span class="red">*</span>:</label>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12 dn_y_pass">
                        <input type="password" class="form-control" style="margin-bottom:10px;" required="" id="txtPassword" name="txtPassword" placeholder="">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#forgotpassword" class="forgot_your_password" title="Forgot your password?">Quên mật khẩu?</a>
                    </div>
                </div>

                <div class="form-group" style="clear: both;">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <p style="text-align: left;">
                            <!--<button style="margin-top:10px;text-transform: uppercase;padding: 10px 20px;font-weight: bold;font-size: 18px;background:#00aff0;border: none;" type="submit" class="btn btn-primary">
                            ĐĂNG NHẬP</button>-->
                            <input style="margin-top:10px;text-transform: uppercase;padding: 10px 20px;font-weight: bold;font-size: 18px;background:#00aff0;border: none;" type="submit" name="btnSubmit" class="btn btn-primary" value="ĐĂNG NHẬP">
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <p style="text-align: left;padding-top: 20px;">Nếu bạn chưa có tài khoản, vui lòng <a href="signup">ĐĂNG KÝ</a>.</p>
                    </div>
                </div>
            </div>
     </form>       
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