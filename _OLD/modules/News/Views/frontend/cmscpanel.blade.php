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
      <title>Tổng quan</title>
      <link href="{{asset('libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('libs/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('libs/icofont/icofont.min.css')}}" rel="stylesheet">
    <style>
        body{ margin:0px;padding:0px;font-family:arial;background:rgb(245, 245, 245); }
        .red{ color:red; }
        ::placeholder { font-size: 13px; }
        .wapper{ width:100%;height:auto; }
        .header{ width:100%;height:56px;background-color: #04245d;box-shadow: none;border-radius: 0px;border-bottom: 1px solid rgb(224, 224, 224);z-index: 1000; }
        .__right_header{ float:right;margin-right:55px; }
        .__right_header .__tbuser:hover{ background-color:#023373;cursor: pointer; }
        .__bell{ float: left;margin: 8px 15px 0 0;border-radius: 100%;border: solid 1px #ccc;width: 40px;height: 40px;padding-top: 4px;text-align: center;cursor: pointer; }
        .__create_hotel{ width:100%;height:80px;background:#fff; }
        .__create_hotel .__p2ch{ width:92%;margin:0 auto;height:100%; }
        .__create_hotel .__p2ch h2{ margin-top: 23px;font-size: 28px; }
        .___hotel_wait{ width:100%;height:auto;clear:both;background:#64798C;min-height:300px;text-align:center;color:#fff;padding-top:120px; }
        .___hotel_wait a{ color:#fff; }
        .___hotel_wait_ab{ width:100%;height:auto;clear:both;background:#64798C;min-height:300px;text-align:center;color:#fff;padding:20px 0; }
        .___hotel_wait_ab a{ color:#fff; }
        ._wap_user_{ float: left;position: relative; }
        ._wap_user_in_2{ display: none; }
        ._wap_user_in_2 ul{ margin:0px 10px;padding: 0px;list-style-type: none;text-align:center; }
        ._wap_user_in_2 ul li{ padding: .3cm 6px; }
        ._wap_user_:hover ._wap_user_in_2{ float: left;position: absolute;width: 180px;min-height: 100px;z-index: 99999;background: #fff;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top: solid 3px #F29F05;right: 0px;display: block;box-shadow: 0px 4px 6px rgb(0 0 0 / 10%), 0px 6px 14px rgb(0 0 0 / 20%); }
        .wapimgcpanel img{ max-height: 250px;border-radius: 5px; }
        ._wap11{ float:left;width:50%;text-align:right; }
        ._wap12{ margin-top: 20px;padding-right: 50px;padding-left: 50px;background-color: #F29F05;border-color: #F29F05; }
        ._wap55{ position: relative;float: left;margin: 0 10px; }
        ._wap56{ position: absolute;float: left;width: 100%;background: url(https://hoabinhbooking.com/public/icon/bgo.png) repeat top left;bottom: 0px;text-align: left;padding: 5px;overflow: hidden;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;color:#fff; }
        ._wap57{ position: absolute;float: left;top: 5px;right: 5px; }
        ._wap57 a{ color: #fff;background: red;padding: 3px 8px;border-radius: 5px;display: block; }

    </style>
   </head>
   <body>
     <div class="wapper">
        <div class="header">
            <a href="/"><img alt="logo hoabinh booking" src="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png" style="height:90%;padding:3px;background:#fff;border-radius:3px;margin:3px 0px 0px 55px;float:left;"/></a>
            <div class="__right_header">
                <div class="__bell">
                <i style="font-size: 20px;margin: 5px 0px 0 0;color: #fff;" class="fa fa-bell" aria-hidden="true"></i>
                </div>
                <div class="_wap_user_">
                <table class="__tbuser" style="color:#fff;padding-right:10px;">
                    <tr>
                    <td style="text-align:right;vertical-align: middle;font-size:13px;padding:5px 10px;">
                        Xin chào,<br/>
                        <?php
                            $partner_fullname=Session::get('partner_fullname');
                            if($partner_fullname){
                                echo $partner_fullname;
                            }else{
                                header("Location: https://hoabinhbooking.com/vi/partnership/login");
                                exit;
                            }
                        ?>
                    </td>
                    <td style="text-align:right;vertical-align: middle;">
                        <i style="font-size: 45px;margin: 5px 5px 0 0;color:#fff;" class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </td>
                    </tr>
                </table>
                <div class="_wap_user_in_2">
                <ul>
                <li style="border-bottom: solid 1px #ccc;"><a href="{{ URL::to('/vi/partnership/profile') }}"><i class="fa fa-address-book" aria-hidden="true"></i> Thông tin cá nhân</a></li>
                <li><a href="https://hoabinhbooking.com/vi/partnership/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>
                </ul>
                </div>
                </div>
                
            </div>
        </div>
<div class="__create_hotel">
<div class="__p2ch">
<div style="float:left;width:50%;">
<h2>Chỗ nghỉ cần hoàn thiện/chờ duyệt</h2>
</div>
<div class="_wap11">
    <a href="{{ URL::to('vi/cmscpanel/createHotel') }}" class="btn btn-primary _wap12"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tạo mới chỗ nghỉ</a>
</div>

</div>
</div>
<?php $i=0;?>
@if(!empty($dt_draft))
    <div class="___hotel_wait_ab">
        <div class="wapimgcpanel">
        @foreach($dt_draft as $k5=>$v5)
        <?php $i++;?>
            @if($v5->image_id!=null && $v5->image_id!=0)
                {!! \Modules\Media\Helpers\FileHelper::isImgsCpanel($v5->image_id,$v5->id) !!}
            @endif
        @endforeach
        <?php if($i==0){ ?>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            Chưa có chỗ nghỉ nào cần hoàn thiện/chờ duyệt,<br/><a href="{{ URL::to('vi/cmscpanel/createHotel') }}">Vui lòng click vào đây để tạo mới chỗ nghỉ</a>
        <?php } ?>
        </div>
    </div>
@else
<div class="___hotel_wait">
    Chưa có chỗ nghỉ nào cần hoàn thiện/chờ duyệt,<br/><a href="{{ URL::to('vi/cmscpanel/createHotel') }}">Vui lòng click vào đây để tạo mới chỗ nghỉ</a>
</div>
@endif


<div class="__create_hotel">
<div class="__p2ch">
<div style="float:left;width:50%;">
<h2>Chỗ nghỉ đã được duyệt/đang hoạt động</h2>
</div>
<div style="float:left;width:50%;text-align:right;">
<table style="width:100%;height:auto;margin-top:20px;">
<tr>
    <td style="text-align:left;vertical-align: middle;"><input type="text" class="form-control" id="txtSearchHotel" name="txtSearchHotel" placeholder="Tìm kiếm theo họ tên, email, số điện thoại" /></td>
    <td style="text-align:center;vertical-align: middle;"><span style="font-size:14px;">Trạng thái</span></td>
    <td style="text-align:left;vertical-align: middle;">
        <select id="sltTrangThai" name="sltTrangThai" class="form-control">
            <option value="0">Tất cả</option>
            <option value="1">Đóng cửa</option>
            <option value="2">Đang mở bán</option>
            <option value="3">Tạm ngừng kinh doanh</option>
        </select>
    </td>
</tr>
</table>
</div>

<div style="width:100%;clear:both;height:auto;padding: 35px 0;">
@if(!empty($dt_publish))
        <div class="wapimgcpanel">
        @foreach($dt_publish as $k6=>$v6)
        @if($v6->image_id!=null && $v6->image_id!=0)
                {!! \Modules\Media\Helpers\FileHelper::isImgsCpanel($v6->image_id,$v6->id) !!}
            @endif
        @endforeach
        </div>
@endif

<div style="width:100%;height:1px;clear:both;"></div>
</div>


</div>
</div>
     </div>
   </body>
</html>