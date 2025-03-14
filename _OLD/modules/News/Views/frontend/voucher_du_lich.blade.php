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
                $title_page = "Voucher du lịch";
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
    ._mau_voucher{ margin-top: 10px;width: 100%;clear: both;box-sizing: border-box; }
    ._mau_voucher p{ margin: 0px;padding: 0px;color: #4f4f4f; }
    ._mau_voucher .soluong{ padding: 5px;border: solid 1px #ccc;border-radius: 3px;color: #4f4f4f;width: 100px; }
    ._mau_voucher ul{ list-style-type: none; }
    ._mau_voucher ul li{ float: left;margin-right: 10px;height: 45px;margin-top: 5px; }
    ._mau_voucher ul li label{ padding: 7px;border: solid 1px #ccc;border-radius: 3px;color: #4f4f4f; }

    @media only screen and (min-width:320px) and (max-width:736px){

    }
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
<script type="text/javascript">
    /*window.onload = function(e){ 
        var nut = document.querySelectorAll('div._thumbimgs ul li');
        for(var i = 0 ; i < nut.length; i++){
            var thoigian = setInterval(function(){
               nut[i].addClass('active'); 
            },2000);
        }
    }*/
    function fnMauClick(v){
        var nut = document.querySelectorAll('div._thumbimgs ul li');
        $('#hdMauvoucher').val($('#mau_'+v).val());
        for(var i = 0 ; i <= nut.length; i++){
            if(i==v){
                 $('#thumbimgs_'+i).removeClass("inactive");
                 $('#thumbimgs_'+i).addClass("active");
                 var rootimg=$('#thumbimgs_'+i).attr("src");
                 $('#_bigimg').attr("src",rootimg);
                 $('#mau_'+i).prop('checked','checked');
                 $('#lblmau_'+i).css('border','2px solid #26bed6');
                 //alert(rootimg);
            }else{
                $('#thumbimgs_'+i).removeClass("active");
                $('#thumbimgs_'+i).addClass("inactive");
                $('#lblmau_'+i).css('border','solid 1px #ccc');
            }
        }
    }
    function fnVv(v){
        $('#hdGtvoucher').val($('#gt_'+v).val());
        for(var i = 1 ; i <= 5; i++){
            if(i==v){
                 $('#lblgt_'+i).css('border','2px solid #26bed6');
            }else{
                 $('#lblgt_'+i).css('border','solid 1px #ccc');
            }
        }
    }

    function fnSendRequest() {
        var val_id="1010";
                    var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                    $.ajax({
                        url:"https://hoabinhbooking.com/admin/module/news/voucher-du-lich/gui-yeu-cau",
                        method:"POST",
                        data:{id:val_id, _token:_token},
                        success:function(data){
                            alert('Gửi yêu cầu thành công');
                        }
                    });
    }



$(document).ready(function(){
  $("#btnSubmit").click(function(){
        if($('#hdMauvoucher').val()==''){
            $('#mau_1').focus();
            $('#lblError').html('Vui lòng lựa chọn mẫu voucher');
            return;
        }
        else if($('#hdGtvoucher').val()==''){
            $('#gt_1').focus();
            $('#lblError').html('Vui lòng lựa chọn giá trị voucher');
            return;
        }else if($('#soluong').val()<=0){
            $('#soluong').focus();
            $('#lblError').html('Vui lòng lựa chọn số lượng');
            return;
        }
        else{
            $('#lblError').html('');
            $("#_wap_right_content").animate({ height: "0px",padding: "0px" });
            $("#_wap_under_right_content").animate({ height: "699px" });
            $('#fullname').focus();
            $("body,html").animate({ scrollTop: 0 }, 50);
        }
  });

  $("#btnQuaylai").click(function(){
        $("#_wap_right_content").animate({ height: "799px" });
        $("#_wap_under_right_content").animate({ height: "0px" });
  });

});
</script>

<div class="row">
                        <div class="col-md-6">
<div class="_thumbimgs">
    <ul>
        <li><img onclick="fnMauClick(1)" id="thumbimgs_1" src="https://hoabinhbooking.com/public/uploads/voucher_1trieu.jpg" name="Mẫu 1"></li>
        <li><img onclick="fnMauClick(2)" id="thumbimgs_2" src="https://hoabinhbooking.com/public/uploads/voucher_2trieu.jpg" name="Mẫu 2"></li>
        <li><img onclick="fnMauClick(3)" id="thumbimgs_3" src="https://hoabinhbooking.com/public/uploads/voucher_3trieu.jpg" name="Mẫu 3"></li>
        <li><img onclick="fnMauClick(4)" id="thumbimgs_4" src="https://hoabinhbooking.com/public/uploads/voucher_4trieu.jpg" name="Mẫu 4"></li>
        <li><img onclick="fnMauClick(5)" id="thumbimgs_5" src="https://hoabinhbooking.com/public/uploads/voucher_5trieu.jpg" name="Mẫu 5"></li>
    </ul>
</div>
<div class="_bigimgs">
    <img id="_bigimg" style="width:100%;" src="https://hoabinhbooking.com/public/uploads/voucher_1trieu.jpg">
</div>

                        </div>
                        <div class="col-md-6">
<div id="_wap_right_content" style="overflow: hidden;">
    <img src="https://hoabinhbooking.com/public/uploads/qua_tang_du_lich.png" style="width:70%;">
    <div class="_right_content">
        <p><b>Lưu giữ khoảnh khắc</b></p>

    <p>Voucher được thiết kế dựa trên hình ảnh và thông điệp mà bạn muốn dành tặng cho những người thân thương</p>

    <p><b>Tận hưởng hành trình</b></p>

    <p>Voucher cho những hành trình, trải nghiệm và khoảnh khắc kỳ diệu được trân trọng mãi mãi</p>

    <p><b>Tự tạo món quà độc đáo của riêng bạn dành tặng cho người thân:</b></p>

    <p>B1: Chọn mẫu Voucher</p>

    <p>B2: Gửi ảnh để HoaBinh Booking thiết kế voucher cho riêng bạn</p>

    <p>B3: Thanh toán và nhận voucher</p>
    </div>
    <div class="_mau_voucher">
    <p>Mẫu voucher</p>
    <ul>
        <li><label id="lblmau_1"><input onclick="fnMauClick(1)" type="radio" name="mau_voucher" id="mau_1" value="mau_1"> Mẫu 1</label></li>
        <li><label id="lblmau_2"><input onclick="fnMauClick(2)" type="radio" name="mau_voucher" id="mau_2" value="mau_2"> Mẫu 2</label></li>
        <li><label id="lblmau_3"><input onclick="fnMauClick(3)" type="radio" name="mau_voucher" id="mau_3" value="mau_3"> Mẫu 3</label></li>
        <li><label id="lblmau_4"><input onclick="fnMauClick(4)" type="radio" name="mau_voucher" id="mau_4" value="mau_4"> Mẫu 4</label></li>
        <li><label id="lblmau_5"><input onclick="fnMauClick(5)" type="radio" name="mau_voucher" id="mau_5" value="mau_5"> Mẫu 5</label></li>
        <!--<li><label id="lblmau_6"><input onclick="fnMauClick(6)" type="radio" name="mau_voucher" id="mau_6" value="mau_6"> Mẫu 6</label></li>-->
    </ul>
</div>
    <div class="_mau_voucher">
        <p>Giá trị voucher</p>
        <ul>
            <li><label id="lblgt_1"><input onclick="fnVv(1)" type="radio" name="gt_voucher" id="gt_1" value="1000000"> 1.000.000</label></li>
            <li><label id="lblgt_2"><input onclick="fnVv(2)" type="radio" name="gt_voucher" id="gt_2" value="2000000"> 2.000.000</label></li>
            <li><label id="lblgt_3"><input onclick="fnVv(3)" type="radio" name="gt_voucher" id="gt_3" value="3000000"> 3.000.000</label></li>
            <li><label id="lblgt_4"><input onclick="fnVv(4)" type="radio" name="gt_voucher" id="gt_4" value="4000000"> 4.000.000</label></li>
            <li><label id="lblgt_5"><input onclick="fnVv(5)" type="radio" name="gt_voucher" id="gt_5" value="5000000"> 5.000.000</label></li>
        </ul>
    </div>

    <div class="_mau_voucher">
        <p>Số lượng</p>
        <p><input type="number" class="soluong" name="soluong" id="soluong" value="0" min="0"></p>
    </div>
    <div class="_mau_voucher">
        <label id="lblError" style="color:red;font-weight: bold;"></label><br/>
        <input style="padding-left: 35px;padding-right: 35px;" type="button" name="btnSubmit" id="btnSubmit" class="btn btn-success" value="Chọn mua">
    </div>
</div>
                                

<!---------->
<div id="_wap_under_right_content" style="width: 100%;height: 0px;overflow: hidden;background-color: #fff;">
    <form id="aspnetForm" action="{{url(app_get_locale().'/voucher-du-lich/gui-yeu-cau')}}" method="post" name="aspnetForm" enctype="multipart/form-data">
        {{ csrf_field() }}
<div class="form-group">
        <h1 style="font-size: 25px;color: ;">Yêu cầu đặt Voucher</h1>
    </div>
        <div class="_mau_voucher">
            <input type="hidden" name="hdMauvoucher" id="hdMauvoucher" value="">
            <input type="hidden" name="hdGtvoucher" id="hdGtvoucher" value="">
        </div>
        <div class="form-group">
                            <label for="fullname" class="font_8">
                                Họ tên <span class="red" style="color: red;">*</span>:</label>
                            <input type="text" class="form-control" required="" id="fullname" name="fullname" placeholder="">
                        </div>
        <div class="form-group">
                            <label for="phone" class="font_8">
                                Số điện thoại <span class="red" style="color: red;">*</span>:</label>
                            <input type="number" class="form-control" required="" id="phone" name="phone" placeholder="">
                        </div>
         <div class="form-group">
                            <label for="email" class="font_8">
                                Email <span class="red" style="color: red;">*</span>:</label>
                            <input type="email" class="form-control" required="" id="email" name="email" placeholder="">
                        </div>
        <div class="form-group">
                            <label for="special_request" class="font_8">
                                Yêu cầu khác <span class="red" style="color: red;">*</span>:</label>
                            <input type="text" class="form-control" required="" id="special_request" name="special_request" placeholder="">
                        </div>
                        <div class="form-group" style="padding: 10px 12px;margin-bottom: 18px;background-color: #F3F3F3;">
                            Nhân viên tư vấn sẽ liên hệ với Quý khách trong vòng 60 phút<br/>(từ 8h-20h)
                        </div>
                        <input type="submit" name="btnSubmit" class="btn btn-primary" value="Gửi yêu cầu"/>
                        <button type="button" name="btnQuaylai" id="btnQuaylai" class="btn btn-link"/><< Quay lại</button>
</form>
</div>
<!---------->


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