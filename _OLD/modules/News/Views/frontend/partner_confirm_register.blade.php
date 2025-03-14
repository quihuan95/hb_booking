<!doctype html>
<html lang="vi">
   <head>
      <meta charset="utf-8"/>
      <link rel="icon" href="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png"/>
      <meta name="viewport" content="width=device-width,initial-scale=1"/>
      <meta name="theme-color" content="#4FC3F7"/>
      <meta name="description" content="Đăng ký miễn phí chỗ nghỉ của bạn trên Hòa Bình Booking! Tiếp cận được hơn 25 triệu khách hàng tiềm năng"/>
      <meta property="og:title" content="Hòa Bình Booking - Hệ thống quản lý khách sạn trực tuyến"/>
      <meta property="og:image" content="https://storage.googleapis.com/tripi-assets/mytour/banner/img_partnership_right_banner.jpg"/>
      <meta property="og:description" content="Đăng ký miễn phí chỗ nghỉ của bạn trên Hòa Bình Booking! Tiếp cận được hơn 25 triệu khách hàng tiềm năng"/>
      <link rel="apple-touch-icon" href="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png"/>
      <link rel="manifest" href="/manifest.json"/>
      <title>Hòa Bình Booking - Hệ thống quản lý khách sạn trực tuyến</title>
      <link href="{{asset('libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('libs/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('libs/icofont/icofont.min.css')}}" rel="stylesheet">
    <style>
        body{ margin:0px;padding:0px;font-family:arial;background:#f6f5f5; }
        .red{ color:red; }
        ::placeholder { color: blue;font-size: 13px; }
        ._bhu{ width: 600px;height: auto;min-height: 400px;margin: 0 auto;border: solid 1px #ccc;border-radius: 10px;padding: 0 100px;background: #fff;box-shadow: 0px 4px 6px rgb(0 0 0 / 10%), 0px 6px 14px rgb(0 0 0 / 20%); }
        ._hghh{ width:100%;text-align:center;margin: 40px 0; }
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        window.onload = function()
        {
            $("#check_circle").css({ "transform": "rotate(-360deg)", "transition": "1.1s", "-ms-transform": "rotate(-360deg)" });
        };
    
    </script>
   </head>
   <body>
   <?php
                    $message=Session::get('message');
                    if($message){
                        $message=Session::put('message',null);
                        ?>   
                            <div style="width:100%;height:auto;margin-top:60px;">
                            <div style="text-align:center;">
                            <img alt="logo hoabinhbooking.com" src="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png" style="width:210px;"/>
                            </div>
                            <div class='_bhu'>
                            <div class="_hghh">
                            <i id="check_circle" style="font-size: 92px;color:#007bff;" class="fa fa-check-circle-o" aria-hidden="true"></i>
                            </div>
                            <div style="text-align:center;margin-bottom: 55px;">
                            Đăng ký tài khoản mới thành công. Bạn vui lòng kiểm tra email và xác nhận.
                            </div>
                            <div style="text-align:center;">
                            <a href="{{ URL::to('/vi/partnership/login') }}" style="padding:.2cm 65px;" class="btn btn-primary">Đăng nhập</a>
                            </div>
                            </div>
                            </div>
                        <?php
                    }else{
                        header('Location: https://hoabinhbooking.com/vi/partnership/login');
                        exit;
                    }
                    ?>
   </body>
</html>