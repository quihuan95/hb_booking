<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="{{asset('public/libs/calendar/css/jquerysctipttop.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/libs/calendar/css/t-datepicker.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('public/libs/calendar/css/t-datepicker-blue.css')}}" rel="stylesheet" type="text/css">
<style type="text/css">
    .user_box{ margin-left: 15px;float: right; }
    .user_box a{ color: #fff;font-size: 14px; }
    .user_box a:hover{ text-decoration: none; }
    .acc_box{ position: relative;float: left; }
    .acc_box_2{ width: 220px;height: auto;float: left;position: absolute;z-index: 999;height: 0px;overflow: hidden;left: -50px;border-radius: 0px; }
    .acc_box_2:before{ border-bottom: 10px solid white;border-left: 15px solid transparent;border-right: 15px solid transparent;content: "";display: inline-block;position: absolute;top: 1px;left: 40px;z-index: 99999999; }
    .acc_box_3{ background-color: white;position: absolute;width: 100%;float: left;top: 10px;left: 0px;border-radius: 5px; }

    .popup_wap{ position: relative;width: 100%;height: 100%;float: left; }
    .popup_clear{ position: fixed;width: 100%;height: 100%;float: left;z-index: 99999999;background-color: #000;opacity: 0.8;text-align: center; }
    .popup_img{ position: fixed;width: 100%;height: 100%;float: left;z-index: 999999999;text-align: center; }
    .close_img{ position: fixed;float: left;z-index: 999999999;right: 30%;top: 100px; }
    .contentnewsdt ul{ margin: 0 0 0 15px!important; }
    @media only screen and (min-width:320px) and (max-width:736px){
        #popup{ display: none!important; }
    }
    .cooperate{ float: left; }
    .cooperate a{ color:#fff;font-size:13px;text }
    .cooperate a:hover{ text-decoration: none; }
    /*-------------- FORM SEARCH ---------------*/
    .bravo_wrap .bravo_form .form-content{ padding: 5px 0 10px 55px; }
    .bravo_wrap .bravo_form .smart-search .bravo-autocomplete, .bravo_wrap .bravo_form .input-search .bravo-autocomplete{ margin-top: 10px; }
    .t-check-in{ border-width: 0; }
    .t-check-in::before{ content: "Ngày đến";color: #5e6d77;padding: 0 15px; }
    .t-check-out{ border-width: 0; }
    .t-check-out::before{ content:"Ngày về";color: #5e6d77;padding: 0 15px; }
    .t-datepicker{ color: #5191FA;  }
    .t-check-in .t-date-info-title, .t-check-out .t-date-info-title{ opacity:9!important;font-size: 15px;font-family: inherit; }
    .sophongsokhach{ color: #5191FA;padding-top: 4px;font-size: 15px;position: relative;float: left;z-index: 99999; }
    .spskpopup{ display:none; position: absolute;float: left;width: 300px;height: auto;min-height: 200px;background-color: #fff;z-index: 9999;top: 47px;left: -15px;border-radius: 5px;box-shadow: 0px 4px 6px rgb(0 0 0 / 10%), 0px 6px 14px rgb(0 0 0 / 20%);padding:15px; }
    .spskpopup td{ vertical-align: middle;padding:10px 0px; }
    .spskpopup tr{ border-bottom: solid 1px #EDF2F7; }
    input.btnsplus{ width: 35px;height: 35px;border: none;border-radius: 100%;text-align: center;background: #E2E8F0; }

</style>
<script type="text/javascript">
$(document).ready(function() {
    status='false';
      $("#wapsophong").click(function(){
        if (status == "false") {
            $(".spskpopup").css("display", "block");
            $(".abfullpage").css("display", "block");
            status = "true";
        }else {
            $(".spskpopup").css("display", "none");
            $(".abfullpage").css("display", "none");
            status = "false";
        }
    });
    
    
    $(".abfullpage").click(function(){
        $(".spskpopup").css("display", "none");
        $(".abfullpage").css("display", "none");
        status = "false";
    }
    
     $("#subphong").click(function(){
        var phong = $('#hdphong').val();
        var adul=$('#hdadult').val();
         if(phong==1){
            $('#subphong').prop('disabled','disabled');
         }else{
             phong--;
             $('#plusphong').prop('disabled','');
            $(".phong").html(phong); 
            $('#hdphong').val(phong);
         }
     });
     $("#plusphong").click(function(){
        var phong = $('#hdphong').val();
        var adul=$('#hdadult').val();
         phong++;
        if(phong>9){
            $('#plusphong').prop('disabled','disabled');
        }else{
            if(phong>2){
                if(adul<9){adul++;}
                $('#hdadult').val(adul);
            }
            $('#subphong').prop('disabled','');
            $(".phong").html(phong); 
            $(".nguoilon").html(adul); 
            $('#hdphong').val(phong);

        }
     });

     $("#plusadult").click(function(){
        $("#subadult").prop('disabled','');
        var adult=$('#hdadult').val();
        if(adult<36){
            adult++;
            $('#hdadult').val(adult);
            $(".nguoilon").html(adult); 
        }else{
            $("#plusadult").prop('disabled','disabled');
        }
     });
     
     $("#subadult").click(function(){
        var adult=$('#hdadult').val();
        $("#plusadult").prop('disabled','');
        if(adult>1){
            adult--;
            $('#hdadult').val(adult);
            $(".nguoilon").html(adult); 
        }else{
            $("#subadult").prop('disabled','disabled');
        }
     });
     
     $("#pluschildren").click(function(){
        var child=$('#hdchild').val();
        $("#subchildren").prop('disabled','');
        if(child<9){
            child++;
            $('#hdchild').val(child);
            $(".treem").html(child); 
        }else{
            $("#pluschildren").prop('disabled','disabled');
        }
     });

     $("#subchildren").click(function(){
        var child=$('#hdchild').val();
        $("#pluschildren").prop('disabled','');
        if(child>0){
            child--;
            $('#hdchild').val(child);
            $(".treem").html(child);
        }else{
            $("#subchildren").prop('disabled','disabled');
        }
     });

});

</script>
<script type="text/javascript">
    /*var url=location.href;
    if(url=='https://hoabinhbooking.com/vi' || url=='https://hoabinhbooking.com/en' || url=='https://hoabinhbooking.com/'){
        var myVar = setInterval(myTimer, 5000);
    }*/
    $(document).ready(function(){
        status='false';
      $("#acc_box").click(function(){
        if (status == "false") {
            $("#acc_box_2").animate({ height: "150px" });
            status = "true";
        }else {
            $("#acc_box_2").animate({ height: "0px" });
            status = "false";
        }

      });
});

    function myTimer() {
        $('#popup').css({'display':'block'});
    }
    function myStopFunction() {
        clearInterval(myVar);
    }
    function fnClose() {
        $('#popup').css({'display':'none'});
        clearInterval(myVar);
    }
</script>
<div style="display: none;" id="popup" class="popup_wap"><div class="popup_clear"><div style="width: 100%;height: 1px;clear: both;"></div></div><div class="popup_img"><a rel="nofollow" href="https://hoabinhbooking.com/vi/signup"><img class="img_popup" style="width: 688px;" src="https://hoabinhbooking.com/public/uploads/popup_giam_ngay.png"></a></div><div class="close_img"><a href="javascript:void(0);" onclick="fnClose()"><img style="width: 50px;" src="https://hoabinhairlines.vn/public/frontend/css/images/icon-close.png"></a></div></div>
<div class="bravo_topbar">
    <div class="container">
        <div class="content">
            <div class="topbar-left">
                {!! setting_item_with_lang("topbar_left_text") !!}
            </div>
            <div class="topbar-right">
                <div class="cooperate">
                <a rel="nofollow" href="https://hoabinhbooking.com/public/vi/partnership"><img alt="" src="https://hoabinhbooking.com/public/uploads/handshake.png" style="
    width: 20px;
    color: #fff;
"> Hợp tác với chúng tôi</a>
                </div>
                <ul class="topbar-items">
                    @include('Language::frontend.switcher')
                </ul>
                <div class="user_box">
                    <div id="acc_box" class="acc_box">
                        <?php
                            $message=Session::get('admin_name');
                            if($message){
                        ?>
                        <a href="javascript:void(0);"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Xin chào, <?php echo $message;?> <i class="fa fa-angle-down"></i></a>
                        <div class="acc_box_2" id="acc_box_2">
                            <div class="acc_box_3">
                                <div style="margin-top: 20px;">
                                    <p style="text-align: center;width:100%;"><a style="color: blue;" href="javascript:void(0);"><i class="fa fa-user fa-fw"></i> Thông tin cá nhân</a></p>
                                <p style="text-align: center;width:100%;"> <a style="color: blue;" href="{{ URL::to('vi/logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }else{
                    ?>
<a href="javascript:void(0);"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Tài khoản <i class="fa fa-angle-down"></i></a>
                        <div class="acc_box_2" id="acc_box_2">
                            <div class="acc_box_3">
                                <p style="text-align: center;width:100%;margin: 0px;"><a style="width: 92%;margin: 15px 10px;color: #fff;" href="{{ URL::to('vi/signin')}}" class="btn btn-primary">Đăng nhập</a></p>
                                <p style="text-align: center;width:100%;">Chưa có tài khoản? <a style="color: blue;" href="{{ URL::to('vi/signup')}}">Đăng ký</a> ngay</p>
                            </div>
                        </div>
                        <?php
                    }

                    ?>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
