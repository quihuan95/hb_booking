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
                $title_page = "Đăng ký";
            }
        @endphp

        <div class="blog-breadcrumb hidden-xs">
            <div class="container">
                <ul>
                    <li><a href="https://hoabinhbooking.com"> Home</a></li>
                    <li class="active">
                        Đăng ký
                    </li>
                </ul>
            </div>
        </div>
        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
<style type="text/css">
    .succe{
        font-size: 32px;
    color: darkgreen;
    font-weight: bold;
    text-align: center;
    }
    .undercucce{
        color: darkgreen;
    text-align: center;
    }
</style>

<script type="text/javascript">
    function fnSendRequest() {
        if(!fnVali()){
            return;
        }else{
                $('#btnDangKy').prop('disabled','disabled');
                var val_id="1010";
                var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                $.ajax({
                        url:"https://hoabinhbooking.com/vi/dang-ky",
                        method:"POST",
                        data:{id:val_id,txtFullname:$('#txtFullname').val(),txtPhone:$('#txtPhone').val(),txtEmail:$('#txtEmail').val(),txtRePassword:$('#txtRePassword').val(), _token:_token},
                        success:function(data){
                            if(data=='InsertSuccefully'){
                                $('#wapperregister').html('<p class="succe">Tạo tài khoản mới thành công</p><p class="undercucce">Vui lòng click vào <a href="https://hoabinhbooking.com/vi/signin">đây</a> để đăng nhập tài khoản</p>');
                            }
                            //alert(data);
                        }
                });
        }
    }

    function fnVali(){
        if($('#txtFullname').val()==''){
            $('#error_message_signup').html('Họ & tên không được trống');
            $('#txtFullname').focus();
            return false;
        }
        else if($('#txtPhone').val()==''){
            $('#error_message_signup').html('Di động không được trống');
            $('#txtPhone').focus();
            return false;
        }
        else if($('#txtEmail').val()==''){
            $('#error_message_signup').html('Email không được trống');
            $('#txtEmail').focus();
            return false;
        }
        else if($('#txtPassword').val()==''){
            $('#error_message_signup').html('Mật khẩu không được trống');
            $('#txtPassword').focus();
            return false;
        }
        else if($('#txtPassword').val()!=$('#txtRePassword').val()){
            $('#error_message_signup').html('Mật khẩu không trùng nhau');
            $('#txtRePassword').focus();
            return false;
        }
        else if(($('#chkDieukhoan').is(":checked"))==false){
            $('#error_message_signup').html('Bạn chưa ấn chọn đồng ý điều kiện & điều khoản của Hòa Bình Booking.');
            $('#chkDieukhoan').focus();
            return false;
        }
        return true;
    }
</script>

<style type="text/css">
    .red{ color: red; }
</style>
{{ csrf_field() }}
<div class="row">
     <form style="width:100%;" id="frmsignin" name="frmsignin" method="post" action="/" enctype="multipart/form-data">
         <div id="wapperregister" style="margin-top:10px;width:60%;margin:0 auto;">

                <div class="form-group" style="clear: both;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 style="text-align:center;">Đăng Ký Tài Khoản</h1>
                        <p style="text-align:center;"><i>Nếu đã từng đăng ký tài khoản trên Website trước đây, bạn có thể dùng tính năng "Lấy mật khẩu" để có thể truy cập vào tài khoản bằng email nhé.</i></p>
                    </div>
                </div>
                <div class="form-group" style="clear: both;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <span id="error_message_signup" class="error_message_signup red"></span>
                    </div>
                </div>
                <div class="form-group" style="clear: both;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Họ & tên <span class="red">*</span>:</label>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="text" class="form-control" style="margin-bottom:10px;" required="" id="txtFullname" name="txtFullname" placeholder="">
                    </div>
                </div>
                <div class="form-group" style="clear: both;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Di động <span class="red">*</span>:</label>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="number" class="form-control" style="margin-bottom:10px;" required="" id="txtPhone" name="txtPhone" placeholder="">
                    </div>
                </div>
                <div class="form-group" style="clear: both;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Email <span class="red">*</span>:</label>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="email" class="form-control" style="margin-bottom:10px;" required="" id="txtEmail" name="txtEmail" placeholder="">
                    </div>
                </div>

                <div class="form-group" style="clear: both;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Mật khẩu <span class="red">*</span>:</label>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 dn_y_pass">
                        <input type="password" class="form-control" style="margin-bottom:10px;" required="" id="txtPassword" name="txtPassword" placeholder="">
                    </div>
                </div>

                <div class="form-group" style="clear: both;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Xác nhận mật khẩu <span class="red">*</span>:</label>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 dn_y_pass">
                        <input type="password" class="form-control" style="margin-bottom:10px;" required="" id="txtRePassword" name="txtRePassword" placeholder="">
                    </div>
                </div>
                <div class="form-group" style="clear: both;">
                    <div class="col-md-12 col-sm-12 col-xs-12 dn_y_pass">
                        <label><input required="" type="checkbox" name="chkDieukhoan" id="chkDieukhoan" value="0"> Bằng việc tham gia Hòa Bình Booking, tôi đồng ý tất cả <a href="javascript:void(0);">điều kiện & điều khoản</a>.</label>
                    </div>
                </div>

                <div class="form-group" style="clear: both;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p style="text-align: left;"><button id="btnDangKy" style="margin-top:10px;text-transform: uppercase;padding: 10px 20px;font-weight: bold;font-size: 18px;background:#00aff0;border: none;" type="button" onclick="fnSendRequest();" class="btn btn-primary">
                            ĐĂNG KÝ</button></p>
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