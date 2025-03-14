<!doctype html>
<html lang="vi">
   <head>
      <meta charset="utf-8"/>
      <link rel="icon" href="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png"/>
      <meta name="viewport" content="width=device-width,initial-scale=1"/>
      <meta name="theme-color" content="#4FC3F7"/>
      <meta name="description" content="Đăng ký miễn phí khách sạn của bạn trên Hòa Bình Booking! Tiếp cận được hơn 25 triệu khách hàng tiềm năng"/>
      <meta property="og:title" content="Hòa Bình Booking - Hệ thống quản lý khách sạn trực tuyến"/>
      <meta property="og:image" content="https://storage.googleapis.com/tripi-assets/mytour/banner/img_partnership_right_banner.jpg"/>
      <meta property="og:description" content="Đăng ký miễn phí khách sạn của bạn trên Hòa Bình Booking! Tiếp cận được hơn 25 triệu khách hàng tiềm năng"/>
      <link rel="apple-touch-icon" href="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png"/>
      <link rel="manifest" href="/manifest.json"/>
      <title>Chỉnh/sửa thông tin khách sạn</title>
      <link href="{{asset('libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
      <link href="{{asset('libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
      <link href="{{asset('libs/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
      <link href="{{asset('libs/icofont/icofont.min.css')}}" rel="stylesheet">

        <link href="https://hoabinhbooking.com/libs/select2/css/select2.min.css" rel="stylesheet">
        <link href="https://hoabinhbooking.com/libs/flags/css/flag-icon.min.css" rel="stylesheet">
        <link href="https://hoabinhbooking.com/dist/admin/css/vendors.css" rel="stylesheet">
        <link href="https://hoabinhbooking.com/dist/admin/css/app.css" rel="stylesheet">
    <script>
        var bookingCore  = {
            url:'https://hoabinhbooking.com/',
            map_provider:'gmap',
            map_gmap_key:'',
            csrf:'9gl5oSvUixuYLAFcVAkKx6ZwwpeGeBXYvxxotQVl'
        };
        var i18n = {
            warning:"Warning",
            success:"Success",
            confirm_delete:"Do you want to delete?",
            confirm:"Confirm",
            cancel:"Cancel",
        };
        var bookingCoreApp ={
            showSuccess:function (configs){
                var args = {};
                if(typeof configs == 'object')
                {
                    args = configs;
                }else{
                    args.message = configs;
                }
                if(!args.title){
                    args.title = i18n.success;
                }
                bootbox.alert(args);
            },
            showError:function (configs) {
                var args = {};
                if(typeof configs == 'object')
                {
                    args = configs;
                }else{
                    args.message = configs;
                }
                if(!args.title){
                    args.title = i18n.warning;
                }
                bootbox.alert(args);
            },
            showAjaxError:function (e) {
                if(typeof e.responseJSON !='undefined' && e.responseJSON.message){
                    return this.showError(e.responseJSON.message);
                }
                if(e.responseText){
                    return this.showError(e.responseText);
                }
            },
            showConfirm:function (configs) {
                var args = {};
                if(typeof configs == 'object')
                {
                    args = configs;
                }
                args.buttons = {
                    confirm: {
                        label: '<i class="fa fa-check"></i> '+i18n.confirm,
                    },
                    cancel: {
                        label: '<i class="fa fa-times"></i> '+i18n.cancel,
                    }
                }
                bootbox.confirm(args);
            }
        };

        function updateSuccess() {
                    setTimeout(function () {
                        $('.popupnotifyhead').css("margin-right", "-250px").show().animate({ marginRight: "+=250px", opacity: "1.0" }, 500, function () {
                            setTimeout(function () {
                                $('.popupnotifyhead').animate({ marginRight: "-=250px", opacity: "0.0" }, 1000);
                            }, 2000);
                        });
                    }, 10);
        }
    </script>
    <script src="https://hoabinhbooking.com/libs/tinymce/js/tinymce/tinymce.min.js"></script>
    <style>
        body{ margin:0px;padding:0px;font-family:arial;background:rgb(245, 245, 245); }
        .red{ color:red; }
        ::placeholder { font-size: 13px; }
        .wapper{ width:100%;height:auto; }
        .header{ width:100%;height:56px;background-color: #04245d;box-shadow: none;border-radius: 0px;border-bottom: 1px solid rgb(224, 224, 224);z-index: 1000; }
        .__right_header{ float:right;margin-right:55px; }
        .__right_header .__tbuser:hover{ background-color:#023373;cursor: pointer; }
        .__bell{ float: left;margin: 8px 15px 0 0;border-radius: 100%;border: solid 1px #ccc;width: 40px;height: 40px;padding-top: 4px;text-align: center;cursor: pointer; }
        .__create_hotel{ width:100%;height:80px;margin-top:10px; }
        .__create_hotel .__p2ch{ width:92%;margin:0 auto;height:30px; }
        .__create_hotel .__p2ch h2{ margin-top: 23px;font-size: 28px; }
        .__create_hotel .__p3ch{ float:left;width:50%; }
        .__create_hotel .__p4ch{ background-color: rgb(117, 117, 117);border-radius: 100%;width: 5px;height: 5px;display: block;float: left;margin: 8px 10px; }
        .__create_hotel .__p5ch{ width:92%;height:auto;clear: both;margin:0 auto; }
        .__create_hotel .__p5ch h2{ margin: 0px;padding: 0px;clear: both;font-size: 20px; }
        .fleft{ float:left; }
        .fsize13{ font-size:13px; }
        .___wapbodyform{ width:94%;margin:0 auto;height:auto; }
        .inner img{ max-width: 100%;height:136px; }
        .text-center img{ max-height:217px; }
        ._wap_user_{ float: left;position: relative; }
        ._wap_user_in_2{ display: none; }
        ._wap_user_in_2 ul{ margin:0px 10px;padding: 0px;list-style-type: none;text-align:center; }
        ._wap_user_in_2 ul li{ padding: .3cm 6px; }
        ._wap_user_:hover ._wap_user_in_2{ float: left;position: absolute;width: 180px;min-height: 100px;z-index: 99999;background: #fff;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border-top: solid 3px #F29F05;right: 0px;display: block;box-shadow: 0px 4px 6px rgb(0 0 0 / 10%), 0px 6px 14px rgb(0 0 0 / 20%); }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link{ color: #fff;background-color: #28a745; }
        .nav-pills .nav-link{ background: #4AD98F;margin-top: 10px;margin-bottom:10px;color:#fff; }

        .i21u{ position: relative;float: left;width: 100%;height: 1px; }
        .i21u .i22p{ position: absolute;float: left;width: 450px;height: 150px;border: solid 1px #ccc;border-radius: 5px;background: #fff;top: -60px;padding:10px;right:0px; }
        .i21u .i22p .ii11{ display:block;width:3px;height:3px;background:#000;border-radius:100%;float: left;margin-top: 8px;margin-right: 10px; }
        .nav-pills .nav-link{ margin-top:0px; }
        .nav-v{ margin-right: 10px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 0px!important;;border-bottom-right-radius: 0px!important;; }
    </style>
   </head>
   <body>
   <?php
                    $message=Session::get('message');
                    if($message){
                        ?>
                        <script>
                        updateSuccess();
                        </script>
                        <?php
                        //echo '<div class="form-group"><span style="color: red;">'.$message.'</span></div>';
                        $message=Session::put('message',null);
                    }
                    ?>
     <div class="wapper">
        <div class="header">
        <a href="https://hoabinhbooking.com/">
            <img alt="logo hoabinh booking" src="https://hoabinhbooking.com/uploads/0000/21/2021/04/15/logohoabinhbooking.png" style="height:90%;padding:3px;background:#fff;border-radius:3px;margin:3px 0px 0px 55px;float:left;"/>
        </a>
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
<div class="__p3ch" style="">
   <span style="color: #04245d;margin-right: 10px;font-size: 20px;" class="fleft"><a href="https://hoabinhbooking.com/vi/cmscpanel"><i style="display: block;" class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></span> <span class="fleft fsize13">Khách sạn</span></a> <span class="__p4ch"></span> <span class="fleft fsize13">Chỉnh/sửa khách sạn</span>
</div>
<div class="__p3ch" style="text-align:right;">
    
</div>
</div>
<div class="__p5ch">
<h2>Chỉnh/sửa khách sạn: <i>#{{ $data->title }}</i></h2>

</div>
</div>


<div class="___wapbodyform">
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
    function fnSendRequest() {
                var fd = new FormData($('#form11')[0]);    

                $.ajax({
                url: 'https://hoabinhbooking.com/vi/ajaxupload/action',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data){
                    alert(data);
                }
                });
    }
</script>

<form role="form" method="post" id="form11" name="form11" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="text-center">
    <input type="file" id="file" onchange="fnSendRequest()" name="file" value="" style="display:none;"/>
<div id="message"></div>
<div id="uploaded_image"></div>
</div>
</form>
-->

<?php
        $tab1=' active';$tab2='';$tab11='';$tab12='';$tab13='';$tab14='';
        if($qqq!=''){
            if($qqq==1){
                $tab1=' active';$tab2='';$tab11=' active';$tab12='';$tab13='';$tab14='';
            }else if($qqq==2){
                $tab1='';$tab2=' active';$tab11=' active';$tab12='';$tab13='';$tab14='';
            }else if($qqq==11){
                $tab1=' active';$tab2='';$tab11=' active';$tab12='';$tab13='';$tab14='';
            }else if($qqq==12){
                $tab1=' active';$tab2='';$tab11='';$tab12=' active';$tab13='';$tab14='';
            }else if($qqq==13){
                $tab1=' active';$tab2='';$tab11='';$tab12='';$tab13=' active';$tab14='';
            }else if($qqq==14){
                $tab1=' active';$tab2='';$tab11='';$tab12='';$tab13='';$tab14=' active';
            }
        }
    ?>

<div class="row">
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link  <?php echo $tab1;?>" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Điều chỉnh thông tin khách sạn</a>
      <a class="nav-link  <?php echo $tab2;?>" id="v-setting-room-tab" data-toggle="pill" href="#v-setting-room" role="tab" aria-controls="v-setting-room" aria-selected="false">Điều chỉnh tình trạng phòng trống</a>
    </div>
  </div>
  <div class="col-10">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show  <?php echo $tab1;?>" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

    <div style="width:100%;min-height:300px;clear:both;height:auto;">
    <div class="nav nav-pills" id="tab" role="tablist">
      <a class="nav-link nav-v <?php echo $tab11;?>" id="home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin chung</a>
      <a class="nav-link nav-v <?php echo $tab12;?>" id="settings-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Thư viện ảnh</a>
      <a class="nav-link nav-v <?php echo $tab13;?>" id="setting-room" data-toggle="pill" href="#settingroom" role="tab" aria-controls="profile" aria-selected="false">Thiết lập phòng</a>
      <a class="nav-link nav-v <?php echo $tab14;?>" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Chính sách</a>
    </div>

    <div class="tab-content" id="tabContent">
      <div class="tab-pane fade <?php echo 'show '.$tab11;?>" id="home" role="tabpanel" aria-labelledby="home-tab">
      <form action="https://hoabinhbooking.com/vi/partnership/update-hotel" method="post" id="form11" name="form11"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="id" id="id" value="{{ $data->id }}" />
    <input type="hidden" name="hd_image_id" id="hd_image_id" value="{{ $data->image_id }}" />
    <input type="hidden" name="hd_banner_image_id" id="hd_banner_image_id" value="{{ $data->banner_image_id }}" />
    <input type="hidden" name="hd_gallery" id="hd_gallery" value="{{ $data->gallery }}" />
    <input type="hidden" name="r_status" id="r_status" value="publish" />
      <div class="row">
      <div class="col-md-9">
<div class="panel">
<div class="panel-title"><strong>Thông tin chung</strong></div>
<div class="panel-body">

<div class="form-group">
<label>Tiêu đề</label>
<input type="text" value="{{ $data->title }}" placeholder="Tên của khách sạn" name="title" class="form-control">
<input type="hidden" name="slug" id="slug" value="{{ $data->slug }}"/>
</div>
<div class="form-group">
<label class="control-label">Mô tả khách sạn</label>
<div class="">
<textarea name="content" class="d-none has-ckeditor" cols="30" rows="10">{!! $data->content !!}</textarea>
</div>
</div>
<div class="form-group">
<label class="control-label">Youtube Video</label>
<input type="text" name="video" class="form-control" value="{{ $data->video }}" placeholder="Youtube link video">
</div>

</div>
</div>
<div class="panel">
<div class="panel-title"><strong>Chính sách khách sạn</strong></div>
<div class="panel-body">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Tiêu chuẩn xếp hạng khách sạn (Hạng sao)</label>
<input type="number" min="0" max="5" value="{{ $data->star_rate }}" placeholder="Eg: 5" name="star_rate" class="form-control">
</div>
</div>
</div>
<div class="form-group-item">
<label class="control-label">Chính sách</label>
<div class="g-items-header">
<div class="row">
<div class="col-md-5">Tiêu đề</div>
<div class="col-md-5">Nội dung</div>
<div class="col-md-1"></div>
</div>
</div>
<div class="g-items">
@if($data->policy!='' || $data->policy!=null)
<?php $de_policy=json_decode($data->policy);?>
@foreach($de_policy as $policy_k=>$policy_v)
<div class="item" data-number="{{$policy_k}}">
<div class="row">
<div class="col-md-5">
<input type="text" name="policy[{{$policy_k}}][title]" class="form-control" value="{{ $policy_v->title }}" placeholder="Eg: What kind of foowear is most suitable ?">
</div>
<div class="col-md-6">
<textarea name="policy[{{$policy_k}}][content]" class="form-control" placeholder="...">{{ $policy_v->content }}</textarea>
</div>
<div class="col-md-1">
<span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
</div>
</div>
</div>
@endforeach
@else
<div class="item" data-number="0">
<div class="row">
<div class="col-md-5">
<input type="text" name="policy[0][title]" class="form-control" value="Hướng dẫn nhận phòng" placeholder="Eg: What kind of foowear is most suitable ?">
</div>
<div class="col-md-6">
<textarea name="policy[0][content]" class="form-control" placeholder="...">Quý khách vui lòng xuất trình Hộ chiếu/CMND và Phiếu nhận phòng của HBG khi nhận phòng tại khách sạn. (Khách sạn có thể sẽ yêu cầu Quý khách số thẻ tín dụng hoặc tiền đặt cọc cho các dịch vụ phát sinh trong thời gian lưu trú của Quý khách)</textarea>
</div>
<div class="col-md-1">
<span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
</div>
</div>
</div>
<div class="item" data-number="1">
<div class="row">
<div class="col-md-5">
<input type="text" name="policy[1][title]" class="form-control" value="Chính sách phụ thu trẻ em" placeholder="Eg: What kind of foowear is most suitable ?">
</div>
<div class="col-md-6">
<textarea name="policy[1][content]" class="form-control" placeholder="..."></textarea>
 </div>
<div class="col-md-1">
<span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
</div>
</div>
</div>
<div class="item" data-number="2">
<div class="row">
<div class="col-md-5">
<input type="text" name="policy[2][title]" class="form-control" value="Chính sách trả phòng muộn" placeholder="Eg: What kind of foowear is most suitable ?">
</div>
<div class="col-md-6">
<textarea name="policy[2][content]" class="form-control" placeholder="...">Yêu cầu trả phòng muộn sẽ được đáp ứng tùy theo điều kiện sẵn có của chỗ nghỉ.
Trả phòng từ 12:00 đến 18:00: phụ thu 50% tiền phòng
Trả phòng sau 18:00: phụ thu 100% tiền phòng</textarea>
</div>
<div class="col-md-1">
<span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
</div>
</div>
</div>
@endif

</div>
<div class="text-right">
<span class="btn btn-info btn-sm btn-add-item"><i class="icon ion-ios-add-circle-outline"></i> Add item</span>
</div>
<div class="g-more hide">
<div class="item" data-number="__number__">
<div class="row">
<div class="col-md-5">
<input type="text" __name__="policy[__number__][title]" class="form-control" placeholder="Eg: What kind of foowear is most suitable ?">
</div>
<div class="col-md-6">
<textarea __name__="policy[__number__][content]" class="form-control" placeholder=""></textarea>
</div>
<div class="col-md-1">
<span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="panel">
<div class="panel-title"><strong>Địa điểm</strong></div>
<div class="panel-body">
<div class="form-group">
<label class="control-label">Vị trí</label>
<div class="">
<select name="location_id" class="form-control">
   <option value="">-- Vui lòng lựa chọn --</option>
   {!! \Modules\Media\Helpers\FileHelper::isLocation($data->location_id) !!}
</select>
</div>
</div>
<div class="form-group">
<label class="control-label">Địa chỉ</label>
<input type="text" name="address" class="form-control" placeholder="Địa chỉ" value="{{ $data->address }}">
</div>
<!--<div class="form-group">
<label class="control-label">Địa chỉ</label>
<input type="text" name="address" class="form-control" placeholder="Địa chỉ" value="{{ $data->address }}">
</div>
<div class="form-group">
<label class="control-label">Bản đồ</label>
<div class="control-map-group"></div>
<input type="text" placeholder="Search by name..." class="bravo_searchbox form-control pac-target-input" autocomplete="off" onkeydown="return event.key !== 'Enter';">
<div class="g-control">
 <div class="form-group">
<label>Map Lat:</label>
<input type="text" name="map_lat" class="form-control" value="{{ $data->map_lat }}" onkeydown="return event.key !== 'Enter';">
</div>
<div class="form-group">
<label>Map Lng:</label>
<input type="text" name="map_lng" class="form-control" value="{{ $data->map_lng }}" onkeydown="return event.key !== 'Enter';">
</div>
<div class="form-group">
<label>Map Zoom:</label>
<input type="text" name="map_zoom" class="form-control" value="{{ $data->map_zoom }}" onkeydown="return event.key !== 'Enter';">
</div>
</div>
</div>-->
</div>
</div>
<div class="panel">
<div class="panel-title"><strong>Giờ nhận - trả phòng</strong></div>
<div class="panel-body">
<div class="form-group d-none">
<label>Được phép đặt trước cả ngày</label>
<br>
<label>
<input type="checkbox" name="allow_full_day" value="1"> Cho phép đặt trước cả ngày
</label>
<div class="small">
Bạn có thể đặt phòng cả ngày <br>
Ví dụ: Đặt từ ngày 22-23 thì hết ngày 22 và 23, các người khác không đặt được.
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Giờ nhận phòng</label>
<?php $h_nhan_phong=$data->check_in_time==''?'14:00PM':$data->check_in_time; ?>
<input type="text" value="<?php echo $h_nhan_phong;?>" placeholder="Eg: 14:00PM" name="check_in_time" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Giờ trả phòng</label>
<?php $h_tra_phong=$data->check_out_time==''?'12:00AM':$data->check_out_time; ?>
<input type="text" value="<?php echo $h_tra_phong;?>" placeholder="Eg: 12:00AM" name="check_out_time" class="form-control">
</div>
</div>
</div>
</div>
</div>
<script>
function format_curency(a) {
    a1.value=a.value.replace(',', '');
    a.value = a1.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}
</script>
<div class="panel">
<div class="panel-title"><strong>Giá phòng ở khách sạn</strong></div>
<div class="panel-body">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label class="control-label">Giá</label>

<input type="text" step="any" min="0" name="price" onChange="format_curency(this);" class="form-control" value="<?php echo number_format($data->price);?>" placeholder="Giá khách sạn">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="control-label">Giá khuyến mãi</label>
<input type="text" step="any" name="sale_price" onChange="format_curency(this);" class="form-control" value="<?php echo number_format($data->sale_price);?>" placeholder="Giá khuyến mãi">
<span><i>Nếu giá khuyến mãi nhỏ hơn giá, khách sạn sẽ hiển thị giá khuyến mãi</i></span>
</div>
</div>
</div>
</div>
</div>
<div class="panel">
<div class="panel-title"><strong>Quản lý SEO</strong></div>
<div class="panel-body">
<div class="row">
<div class="col-md-6">
<div class="form-group  ">
<label class="control-label">
Cho phép công cụ tìm kiếm hiển thị dịch vụ này trong kết quả tìm kiếm?
</label>
<select name="seo_index" class="form-control">
<option value="1">Cho phép</option>
<option value="0">Không cho phép</option>
</select>
</div>
</div>
</div>
<ul class="nav nav-tabs" data-condition="seo_index:is(1)">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#seo_1">Cấu hình chung</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#seo_2">Share Facebook</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#seo_3">Share Twitter</a>
</li>
</ul>
<div class="tab-content" data-condition="seo_index:is(1)">
<div class="tab-pane active" id="seo_1">
<div class="form-group">
<label class="control-label">Tiêu đề SEO</label>
<input type="text" name="seo_title" class="form-control" placeholder="Để trống để sử dụng tiêu đề khách sạn" value="">
</div>
<div class="form-group">
<label class="control-label">Mô tả SEO</label>
<textarea name="seo_desc" rows="3" class="form-control" placeholder="Nhập mô tả SEO..."></textarea>
</div>
</div>
<div class="tab-pane" id="seo_2">
<div class="form-group">
<label class="control-label">Tiêu đề facebook</label>
<input type="text" name="seo_share[facebook][title]" class="form-control" placeholder="Nhập tiêu đề..." value="">
</div>
<div class="form-group">
<label class="control-label">Mô tả facebook</label>
<textarea name="seo_share[facebook][desc]" rows="3" class="form-control" placeholder="Nhập mô tả..."></textarea>
</div>
</div>
<div class="tab-pane" id="seo_3">
<div class="form-group">
<label class="control-label">Tiêu đề twitter</label>
<input type="text" name="seo_share[twitter][title]" class="form-control" placeholder="Nhập tiêu đề..." value="">
</div>
<div class="form-group">
<label class="control-label">Mô tả twitter</label>
<textarea name="seo_share[twitter][desc]" rows="3" class="form-control" placeholder="Nhập mô tả..."></textarea>
</div>
</div>
</div>
</div>
</div>

</div> 
      

<div class="col-md-3">

<div class="panel">
<div class="panel-title"><strong>Attribute: Tiện nghi</strong></div>
<?php $total=sizeof($data_bravo_terms);$ii=0;?>
<input type="hidden" value="<?php echo $total;?>" id="ttTerms" name="ttTerms"/>
<div class="panel-body">
<div class="terms-scrollable">
@foreach($data_bravo_terms as $bravo_terms)
<?php $ii++;?>
@if(fnCheckTerm($data_bravo_hotel_term,$bravo_terms->id))
<label class="term-item">
<input type="checkbox" checked id="terms_<?php echo $ii;?>" name="terms[]" value="{{ $bravo_terms->id }}">
 <span class="term-name">{{ $bravo_terms->name }}</span>
</label>
@else
<label class="term-item">
<input type="checkbox" id="terms_<?php echo $ii;?>" name="terms[]" value="{{ $bravo_terms->id }}">
 <span class="term-name">{{ $bravo_terms->name }}</span>
</label>
@endif

@endforeach

</div>
<p id="select_all" style="text-align: right;"><a onclick="fnselectall()" href="javascript:void(0);">Chọn toàn bộ</a></p>
<input type="hidden" value="1" id="flag">
<hr/>
<div class="text-right">
<input type="hidden" name="status" value="publish"/>
<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Lưu & Tiếp tục</button>
</div>
</div>
</div>
<script type="text/javascript">
        function fnselectall() {
            var tt=$('#ttTerms').val();
            if($('#flag').val()==1){
                var j=0;
                for(j=0;j<=tt;j++){
                    $('#terms_' + j).prop('checked', 'checked');
                }
                $('#flag').val(0);
                $('#select_all').html('<a onclick="fnselectall()" href="javascript:void(0);">Bỏ chọn toàn bộ</a>');
            }else{
                var j=0;
                for(j=0;j<=tt;j++){
                    $('#terms_' + j).prop('checked', '');
                }
                $('#flag').val(1);
                $('#select_all').html('<a onclick="fnselectall()" href="javascript:void(0);">Chọn toàn bộ</a>');
            }

        }
</script>

</div>
</div>

</form>
      
      </div>
      <div class="tab-pane fade <?php echo 'show '.$tab12;?>" id="settings" role="tabpanel" aria-labelledby="settings">
      <div class="row" style="margin-bottom:20px;">
      <div class="col-md-12">
<div class="panel">
<div class="panel-title"><strong>Ảnh đại diện</strong></div>
<div class="panel-body">
<div class="form-group">


<div class="text-center">
<form action="https://hoabinhbooking.com/vi/ajaxupload/avatar" method="post" id="form11" name="form11"  enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" value="{{ $data->id }}" id="id_hotel_avatar" name="id_hotel_avatar">
<input type="hidden" value="publish" id="avatar_status" name="avatar_status">
<input type="file" onchange="fnSendRequest()" id="file_avatar" name="file_avatar" value="" style="display:none;"/>
@if($data->image_id!=null || $data->image_id!=0)
<label for="file_avatar">
{!! \Modules\Media\Helpers\FileHelper::isImgs($data->image_id) !!}
</label>
@else
<div class="text-center">
    <label for="file_avatar" style="padding-left: 10px;padding-right: 10px;" class="btn btn-primary btn-field-upload">Tải hình ảnh</label>
</div>
@endif

</form>

</div>



</div>
</div>
</div>
</div>

<script type="text/javascript">
    function fnSendRequest() {
        $( "#form11" ).submit();
    }
    function fnSendRequest2(){
        $( "#form12" ).submit();
    }
    function fnSendRequest3(){
        $( "#form13" ).submit();
    }
</script>

      <!--<div class="col-md-6">
      <div class="panel">
<div class="panel-title"><strong>Banner hình ảnh</strong></div>
<div class="panel-body">
<div class="row">
<div class="col-md-4">
<div class="form-group">

<div class="form-group-image">
<div class="text-center">

<form action="https://hoabinhbooking.com/vi/ajaxupload/action" method="post" id="form13" name="form13"  enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" value="{{ $data->id }}" id="id_hotel" name="id_hotel">
<input type="file" onchange="fnSendRequest3()" id="file" name="file" value="" style="display:none;"/>
@if($data->banner_image_id!=null || $data->banner_image_id!=0)
<label for="file">
{!! \Modules\Media\Helpers\FileHelper::isImgs($data->banner_image_id) !!}
</label>
@else
<div class="text-center">
    <label style="padding-left: 10px;padding-right: 10px;" for="file" class="btn btn-primary btn-field-upload">Tải banner hình ảnh</label>
</div>
@endif

</form>
</div>

</div>

</div>
</div>

</div>
</div>
      
      </div>
</div>-->

</div>

      <div class="panel">
<div class="panel-title"><strong>Thư viện hình ảnh</strong></div>
<div class="panel-body">
<div class="row">
<div class="col-md-12">

<div class="form-group">

<div class="dungdt-upload-multiple " data-val="">

<div class="upload-box" v-show="!value">

<div class="text-left">
<label for="photos" class="btn btn-info btn-sm btn-field-upload"><i class="fa fa-plus-circle"></i> Lựa chọn hình ảnh</label>
</div>

<form action="https://hoabinhbooking.com/vi/ajaxupload/doGallery" method="post" id="form12" name="form12"  enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" value="{{ $data->id }}" id="id_hotel2" name="id_hotel2"/>
<input type="hidden" value="publish" id="gallery_status" name="gallery_status">
<input type="file" onchange="fnSendRequest2()" required class="form-control" id="photos" name="photos[]" multiple  style="display:none;" />
</form>
</div>

<div class="attach-demo d-flex">

@if($data->gallery!=null)
{!! \Modules\Media\Helpers\FileHelper::imgGallery($data->gallery,$data->id,'0') !!}
@endif

</div>

</div>
</div>

</div>

</div>
</div>
      
      </div>

<div class="text-right">
    <a class="btn btn-primary" href="https://hoabinhbooking.com/vi/cmscpanel/editHotel/{{$data->id}}?tab=3"><i class="fa fa-save"></i> Lưu & Tiếp tục</a>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div>

      </div>
      <div class="tab-pane fade <?php echo 'show '.$tab13;?>" id="settingroom" role="tabpanel" aria-labelledby="settingroom">
      <div class="d-flex justify-content-between mb20">
<h1 class="title-bar">Thiết lập phòng ở khách sạn</h1>
<div class="title-actions">
<button name="btnCreateRoom" id="btnCreateRoom" class="btn btn-success">
       <i class="fa fa-plus-circle" aria-hidden="true"></i> Tạo phòng
       </button>
<!--<a href="https://hoabinhbooking.com/admin/module/hotel/297/availability" class="btn btn-warning btn-xs"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm mới phòng ở</a>-->
</div>
</div>

      <div class="row">
<div class="col-md-12">
<div class="filter-div d-flex justify-content-between ">
</div>
<div class="panel">
<?php
                    $message2=Session::get('message2');
                    if($message2){
                        echo '<p style="text-align: center;"><span style="color: red;">'.$message2.'</span></p>';
                        $message2=Session::put('message2',null);
                    }
                    ?>
<div style="display:none;" class="create-room-opacity-option" id="create-room-opacity-option"></div>
<div class="create_room" id="create_room">
<div class="boxcreateroom">
<p style="margin:0px;padding:0px;">&nbsp;</p>
<form class="needs-validation" action="{!! route('room.create.calendars') !!}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
<input type="hidden" id="hdhotelroom3" name="hdhotelroom3" value="{{ $data->id }}"/>
<input type="hidden" value="publish" id="calendars_status" name="calendars_status">
<div class="panel">
<div class="panel-title">
<strong>Thêm mới phòng ở</strong>
<div style="float: right;text-align: right;width: 60%;"><a class="closecreateroom" href="javascript:void(0);"><i style="color:#ccc;" class="fa fa-times" aria-hidden="true"></i></a></div>
</div>
<div class="panel-body">
<div class="form-group">
<label>Tên phòng <span class="text-danger">*</span></label>
<input type="text" required="" value="" placeholder="Tên phòng" name="title" class="form-control">
</div>
<div class="form-group d-none">
<label>Mô tả</label>
<textarea name="content" cols="30" rows="5" class="form-control"></textarea>
</div>

<hr>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Diện tích phòng </label>
<div class="input-group mb-3">
<input type="text" class="form-control" name="size" value="0" placeholder="Diện tích phòng">
<div class="input-group-append">
<span class="input-group-text"> m<sup>2</sup></span>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>View </label>
<input type="text" value="" placeholder="View" name="view" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Kiểu gường </label>

<select name="bed_type" class="form-control">
<option value="Giường đơn">Giường đơn</option>
<option value="Giường đôi nhỏ">Giường đôi nhỏ</option>
<option value="Giường đôi">Giường đôi</option>
<option value="Giường Queen">Giường Queen</option>
<option value="Giường King">Giường King</option>
<option value="Giường Grand King">Giường Grand King</option>
<option value="Giường tầng">Giường tầng</option>
<option value="Giường sofa">Giường sofa</option>
<option value="Nệm futon">Nệm futon</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Số giường </label>
<input type="number" value="1" min="1" max="10" placeholder="Number" name="beds" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Người lớn </label>
<input type="number" min="1" value="1" name="adults" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Trẻ em </label>
<input type="number" min="0" value="0" name="children" class="form-control">
</div>
</div>
</div>
</div>
<div class="panel-footer" style="text-align: right;">
<input type="hidden" name="status" id="status" value="publish">
<button class="btn btn-danger closecreateroom" type="button"><i class="fa fa-trash-o" aria-hidden="true"></i> Hủy</button>
<button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Thêm phòng</button>
</div>
</div>
</form>
</div>

</div>
<div class="panel-body">
<form action="" class="bravo-form-item">
<div class="table-responsive">
<table class="table table-hover">
<thead>
<tr>
<th width="45px"><input type="checkbox" class="check-all"></th>
<th> Tên phòng</th>
<th width="200px"> Kiểu giường</th>
<th style="text-align:center;" width="160px">Thao tác</th>
</tr>
</thead>
<tbody>
@foreach($bravo_hotel_room_list_calendars_all as $k6=>$v6)
<tr class="publish">
<td><input type="checkbox" name="ids[]" class="check-item" value="{{$v6->id}}">
</td>
<td class="title">
<a href="https://hoabinhbooking.com/vi/cmscpanel/editRoom/{{$data->id}}/{{$v6->id}}">{{$v6->title}}</a>
</td>
<td>
{{$v6->bed_type}}
</td>


<td>
 <a href="https://hoabinhbooking.com/vi/cmscpanel/editRoom/{{$data->id}}/{{$v6->id}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Sửa
</a>

<a class="btn btn-danger btn-sm"  onclick="return confirm('Bạn có thật sự muốn xóa?')" href="{!! route('room.public.delete.partnership',array($data->id,$v6->id)) !!}"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</a>
</td>
</tr>
@endforeach
 </tbody>
</table>
</div>
</form>
</div>
</div>




</div>

<!--<div class="col-md-4">
<form class="needs-validation" action="https://hoabinhbooking.com/vi/partnership/create-room" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" id="hdhotelroom" name="hdhotelroom" value="{{ $data->id }}"/>
<div class="panel">
<div class="panel-title"><strong>Thêm mới phòng ở</strong></div>
<div class="panel-body">

<div class="form-group">
<label>Tên phòng <span class="text-danger">*</span></label>
<input type="text" required="" value="" placeholder="Tên phòng" name="title" class="form-control">
</div>
<div class="form-group d-none">
<label>Mô tả</label>
<textarea name="content" cols="30" rows="5" class="form-control"></textarea>
</div>
<div class="form-group">
<label>Hình ảnh đại diện </label>
<div class="dungdt-upload-box dungdt-upload-box-normal " data-val="">
<input type="file" name="fture_image" id="fture_image"/>
</div>
</div>

<hr>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Giá <span class="text-danger">*</span></label>
<input type="number" required="" value="" min="1" placeholder="Price" name="price" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Số phòng <span class="text-danger">*</span></label>
<input type="number" required="" value="1" min="1" max="100" placeholder="Number" name="number" class="form-control">
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Diện tích phòng </label>
<div class="input-group mb-3">
<input type="text" class="form-control" name="size" value="0" placeholder="Diện tích phòng">
<div class="input-group-append">
<span class="input-group-text"> m<sup>2</sup></span>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>View </label>
<input type="text" value="" placeholder="View" name="view" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Kiểu gường </label>
<select name="bed_type" class="form-control">
<option value='Giường đơn'>Giường đơn</option>
<option value='Giường đôi nhỏ'>Giường đôi nhỏ</option>
<option value='Giường đôi'>Giường đôi</option>
<option value='Giường Queen'>Giường Queen</option>
<option value='Giường King'>Giường King</option>
<option value='Giường Grand King'>Giường Grand King</option>
<option value='Giường tầng'>Giường tầng</option>
<option value='Giường sofa'>Giường sofa</option>
<option value='Nệm futon'>Nệm futon</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Số giường </label>
<input type="number" value="1" min="1" max="10" placeholder="Number" name="beds" class="form-control">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label>Người lớn </label>
<input type="number" min="1" value="1" name="adults" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Trẻ em </label>
<input type="number" min="0" value="0" name="children" class="form-control">
</div>
</div>
</div>
</div>
<div class="panel-footer" style="text-align: right;min-height: 60px;">
<input type="hidden" name="status" id="status" value="publish"/>
<button style="float:right;" class="btn btn-success" type="submit"><i class="fa fa-save"></i> Thêm phòng</button>

</div>
</div>
</form>
</div>-->

</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>    
      </div>
      <div class="tab-pane fade <?php echo 'show '.$tab14;?>" id="profile" role="tabpanel" aria-labelledby="profile">
         <!--- Begin form chính sách --->
         <div style="width:100%;height:auto;padding:15px;border:solid 1px #ccc;border-radius:5px;background-color:#fff;overflow: hidden;">
      <form id="frmchinhsach" action="{{ route('partnership.update.chinhsach') }}" method="post" name="frmchinhsach" enctype="multipart/form-data">
      <input type="hidden" id="idhotelcs" name="idhotelcs" value="{{ $data->id }}"/>
      <div class="d-flex justify-content-between mb20">
        <h2 style="font-size: 20px;" class="title-bar">Chính sách chung</h2>
    </div>

    <div class="row" style="margin-bottom:15px;">
    <div class="col-md-2">
        <label for="rdoKhongHutThuoc">Được hút thuốc </label>
    </div>
    <div class="col-md-1">
    <label><input type="radio" name="rdoSmoking" id="rdoDuocHutThuoc"/> Có</label>
    </div>
    <div class="col-md-1">
    <label><input type="radio" checked name="rdoSmoking" id="rdoKhongHutThuoc"/> Không</label>
    </div>
    </div>
    <div class="row" style="margin-bottom:15px;">
    <div class="col-md-2">
        <label for="rdoDontPet">Cho phép thú cưng </label>
    </div>
    <div class="col-md-1">
    <label><input type="radio" name="pet" id="rdoPet"/> Có</label>
    </div>
    <div class="col-md-1">
    <label><input type="radio" checked name="pet" id="rdoDontPet"/> Không</label>
    </div>
    </div>
    <div class="row" style="margin-bottom:15px;">
    <div class="col-md-2">
        <label for="rdoDontPet">Tổ chức tiệc / Sự kiện </label>
    </div>
    <div class="col-md-1">
    <label><input type="radio" name="event" id="rdoEvent"/> Có</label>
    </div>
    <div class="col-md-1">
    <label><input type="radio" checked name="event" id="rdoDontEvent"/> Không</label>
    </div>
    </div>
    <div class="row" style="margin-bottom:15px;">
    <div class="col-md-12">
    <label><input type="checkbox" name="limit" id="limit" value="0"/> Hạn chế người Việt Nam và người nước ngoài check-in cùng 1 phòng, nếu không xuất trình giấy đăng ký kết hôn</label>
    </div>
      </div>
      <div class="col-md-12" style="margin-bottom:10px;border-bottom:solid 1px #ccc;"></div>
      <h2 style="font-size: 20px;margin-bottom:15px;" class="title-bar">Chính sách cho trẻ em</h2>
      <p style="margin-bottom:15px;"><b>Độ tuổi của trẻ em và trẻ sơ sinh tại chỗ nghỉ <span class="red">*</span></b></p>
      <div class="row" style="margin-bottom:15px;">
      <div class="col-md-1" style="padding-right:0px;padding-top:3px;">
      Không quá 
      </div>
      <script>
      function fnFormore(){
          $('.formore').html($('#forchirent').val());
      }
      function fnAge(){
        $('.age2').html($('#to_age').val());
      }
      function fnFeeage(){
          var feeage=$('#fee_age').val();
          if(feeage=='mienphi'){ document.getElementById("fee1").style.display = "none"; }
          else{ document.getElementById("fee1").style.display = "block"; }
      }

      function fn_mien_phi(){
          if($('#txtfeeage').val()=='' || $('#txtfeeage').val()==0){
            $('.sp_mien_phi').html('miễn phí');
          }else{
            $('.sp_mien_phi').html($('#txtfeeage').val()+' VNĐ/Mỗi trẻ/Mỗi đêm');
          }
          
      }
      function fnHoanhuy(v){
          if(v==1){ document.getElementById("h21u").style.display = "block";$('#beforeCheckin').animate({ height: "100px" }); }
          else{ document.getElementById("h21u").style.display = "none";$('#beforeCheckin').animate({ height: "0px" }); }
        
        

      }

      </script>
      <div class="col-md-1">
      <select class="form-control" id="forchirent" name="forchirent" onchange="fnFormore()">
      <?php 
      for($i=1;$i<=17;$i++){
        ?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
      }
      ?>
      </select>
      </div>
      <div class="col-md-5">
      <span style="padding-top:3px;display:block;" class="red">Khách lớn hơn <span class="formore">1</span> tuổi sẽ được tính tiền như người lớn</span>
      </div>
      <div class="col-md-5">
      <div class="i21u">
        <div class="i22p">
        <p><span style="color:#212121;">Giá & Chính sách trẻ em đi kèm của Quý vị<br/></span>
        <span style="color:rgba(33, 33, 33, 0.6);"><span class="ii11"></span> Khách lớn hơn <span class="formore">1</span> tuổi sẽ được tính tiền như người lớn</span>
        </p>
        <p><span style="color:#212121;">Giá trẻ em bổ sung<br/></span>
        <span style="color:rgba(33, 33, 33, 0.6);"><span class="ii11"></span> Trẻ em từ 0 tuổi đến <span class="age2">12</span> tuổi có thể lưu trú với phụ phí <span class="sp_mien_phi">miễn phí</span></span>
        </p>
        </div>
      </div>
      </div>
      </div>
      <p style="margin-bottom:15px;margin-top:25px;width:100%;"><b>Giá trẻ em bổ sung <span class="red">*</span></b></p>
      <div class="row" style="margin-bottom:15px;">
      <div class="col-md-1">
      Tuổi từ <span class="red">*</span><br/>
      <select disabled class="form-control" id="from_age" name="age">
      <option value="0">0</option>
      </select>
      </div>
      <div class="col-md-1">
      Đến <span class="red">*</span><br/>
      <select onchange="fnAge()" class="form-control" id="to_age" name="age">
      <?php 
      for($i=1;$i<=12;$i++){
          if($i==12){
        ?>
        <option selected value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
         }else{ ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
         }
      }
      ?>
      </select>
      </div>
      <div class="col-md-1" style="padding:0px;">
      <br/>
      <select onchange="fnFeeage()" class="form-control" id="fee_age" name="fee_age">
      <option value="mienphi">Miễn phí</option>
      <option value="cophi">Có phí</option>
      </select>
      </div>
      <div class="col-md-4" id="fee1" style="display:none;">
      Phí <span class="red">*</span>
      <br/>
      <table border="1" style="border:solid 1px #ccc;">
      <tr>
      <td><input onkeyup="fn_mien_phi()" type="text" style="width:100px;border: none;border-radius: 0px;" class="form-control" id="txtfeeage" name="txtfeeage" /></td>
      <td style="padding:0 10px;color:#bdbdbd;">VNĐ/Mỗi trẻ/Mỗi đêm</td>
      </tr>
      </table>
      </div>

      </div>

      <div class="row" style="margin-bottom:15px;">
      <div class="col-md-12" style="margin-bottom:10px;border-bottom:solid 1px #ccc;"></div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <h2 style="font-size: 20px;margin-bottom:15px;" class="title-bar">Chính sách hoàn hủy</h2>
      </div>
      </div>
      <div style="width:100%;height:20px;clear:both;"></div>
      <div class="row" style="margin-bottom:15px;">
    <div class="col-md-2">
    <label><input onclick="fnHoanhuy(0)" type="radio" checked name="rdoHoanhuy" id="rdoKhonghoanhuy"/> Không hoàn hủy</label>
    </div>
    <div class="col-md-1">
    
    </div>
    <div class="col-md-2">
    <label><input onclick="fnHoanhuy(1)" type="radio" name="rdoHoanhuy" id="rdoCohoanhuy"/> Có hoàn hủy</label>
    </div>
    <div class="col-md-7">
            <div class="i21u" id="h21u" style="display:none;">
                <div class="i22p" style="height:130px;">
                <p><span style="color:#212121;">Chính sách hoàn hủy cho chỗ nghỉ của bạn<br></span>
                    <span style="color:rgba(33, 33, 33, 0.6);"><span class="ii11"></span> Khách hàng sẽ không bị tính phí khi huỷ phòng trước thời điểm check in 2 giờ</span>
                </p>
                </div>
            </div>
    </div>
    </div>
    
    <div id="beforeCheckin" style="width:100%;height:0px;overflow: hidden;">
    <div style="width:100%;height:20px;clear:both;"></div>
    <div class="row" style="margin-bottom:15px;">
    <div class="col-md-3">
    Trước check in <span class="red">*</span><br/>
      <table style="width: 100%;border-collapse: collapse;border: solid 1px #ccc;height: 34px;" border="1">
      <tr>
      <td style="text-align: left;vertical-align: middle;">
      <input type="text" style="border:none;width:100%;height:100%;" name="beforeCheckin2" id="beforeCheckin2"/>
      </td>
      <td style="text-align: left;vertical-align: middle;">
      <select id="slDate" style="width:100%;border:none;width:100%;height:100%;background:rgb(245, 245, 245);">
        <option value="gio">Ngày</option>
        <option value="gio">Giờ</option>
      </select>
      </td>
      </tr>
      </table>
    </div>
    <div class="col-md-2">
    <br/>
    <select class="form-control" style="height:34px;" id="slMatphi12" name="slMatphi12">
    <option value="mienphi">Miễn phí</option>
    <option value="cophi">Có phí</option>
    </select>
    </div>
    <div class="col-md-3" id="before_check_fee" style="display:none;">
    Phí <span class="red">*</span><br/>
      <table style="width: 100%;border-collapse: collapse;border: solid 1px #ccc;height: 34px;" border="1">
      <tr>
      <td style="text-align: left;vertical-align: middle;width:40%;">
      <input type="text" style="border:none;width:100%;height:100%;" name="beforeCheckin3" id="beforeCheckin3"/>
      </td>
      <td style="text-align: left;vertical-align: middle;">
      <select id="slDate" style="width:100%;border:none;width:100%;height:100%;background:rgb(245, 245, 245);">
        <option value="gio">% giá trị đơn phòng</option>
        <option value="gio">số đêm đầu</option>
      </select>
      </td>
      </tr>
      </table>
    </div>
    </div>
    </div>


    <div style="width:100%;height:20px;clear:both;"></div>

    <div class="row" style="margin-bottom:15px;">
      <div class="col-md-12" style="margin-bottom:10px;border-bottom:solid 1px #ccc;"></div>
      </div>
      <div class="" style="margin-bottom:15px;text-align:right;">
      <button type="submit" class="btn btn-primary" id="btnSave1" name="btnSave1"><i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu lại</button>
      </div>

      <div class="row" style="margin-bottom:15px;">
      <div class="col-md-12" style=""></div>
      </div>
      <div style="width:100%;height:50px;clear:both;"></div>
      

      <div class="row" style="margin-bottom:15px;">
      <div class="col-md-12" style=""></div>
      </div>
      <div style="width:100%;height:50px;clear:both;"></div>
    </form>
    </div>
      <!--- End form chính sách --->
      </div>
    </div>

    </div>

      </div>
      <div class="tab-pane fade  <?php echo 'show '.$tab2;?>" id="v-setting-room" role="tabpanel" aria-labelledby="v-setting-room-tab">
        <h2>Lịch</h2>
        <div class="row">
        <div class="col-md-12">
        <link href="https://hoabinhbooking.com/public/libs/calendar/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link href="https://hoabinhbooking.com/public/libs/calendar/css/t-datepicker.min.css" rel="stylesheet" type="text/css">
        <link href="https://hoabinhbooking.com/public/libs/calendar/css/t-datepicker-blue.css" rel="stylesheet" type="text/css">

        
        
        <style type="text/css">
            .t-check-in{ border-width: 0; }
            .t-check-in::before{ content: "Từ ngày";color: #5e6d77;padding: 0; }
            .t-check-out{ border-width: 0; }
            .t-check-out::before{ content:"Đến ngày";color: #5e6d77;padding: 0; }
            .t-datepicker{ color: #5191FA;  }
            .t-check-in, .t-check-out{ width:45%;margin-right: 5px; }
            .t-check-in .t-date-info-title, .t-check-out .t-date-info-title{ opacity:9!important;font-size: 15px;font-family: inherit; }
            .t-dates, .t-datepicker-day{ background-color: #fff;border: solid 1px #ccc;border-radius: 5px;padding-top: 8px; }
            .bodyprice td{ padding: 5px; }
            .text_file input{ border:none;width: 100%;height: 25px; }
            .unavailable{ background: #fcbaba!important; }
            .unavailable input{ background: #fcbaba!important; }
            .unavailable:hover input{ background: #fff!important; }
            .over_day{ background: #ccc!important; }
            .over_day input{ background: #ccc!important; }
            .over_day:hover input{ background: #ccc!important; }
            .available{ background: #05ECCA!important; }
            .available input{ background: #05ECCA!important; }
            .available:hover input{ background: #fff!important; }
            .scroll-sync-container{ position: relative;overflow-x: scroll;will-change: transform;width:1120px;left: 30px }
            .datefile{ width:100%; }
            .text_status{ text-overflow: ellipsis;font-weight: bold;display: block;white-space: nowrap;overflow: hidden; }
            .create_room{ width:100%;height:auto;position: relative;float: left; }
            .boxcreateroom{ width: 50%;height: 0px;position: fixed;top: 20px;left: 25%;overflow: hidden; }

        </style>
        <div class="row">
        <div class="col-md-3">
        <?php 
        $_IDRoom='';
        if(isset($_GET['room_id'])){
            $_IDRoom=$_GET['room_id'];
        } 
        ?>
            <select style="width:100%;height: 36px;" onchange="fnRoomChange()" id="slLich" name="slLich" class="form-control">
            @foreach($bravo_hotel_room_list_calendars_all as $k8 =>$v8)
            <?php if($_IDRoom==$v8->id) { ?>
                <option selected value="{{ $v8->id }}">{{ $v8->title }}</option>
            <?php }else{ ?>
                <option value="{{ $v8->id }}">{{ $v8->title }}</option>
            <?php } ?>
            
            @endforeach
            </select>
        </div>
        <div class="col-md-9">
        <p>&nbsp;</p>
        </div>
        </div>



        </div>
        </div>
<p>&nbsp;</p>
        <!--MY CODE-->
        <div style="width:100%;min-height: 1500px;">
        <div id="topbar" style="position:sticky;top:0px;">
        <div class="row" style="margin-top:15px;">
            <div class="col-md-12">
            <table style="width:100%;">
            <tr>
            <td style="width:60%;">
            <div class="t-datepicker">
                    <div class="t-check-in" id="t-check-in"></div>
                    <div class="t-check-out"></div>
                
                
            </div>
            </td>
            <td>
            <button style="margin-top: 20px;margin-left: -65px;" class="btn btn-primary" name="btnSearch" id="btnSearch">
            <i class="fa fa-search" aria-hidden="true"></i>
            Tìm kiếm
            </button>
            </td>
            </tr>
            </table>
            
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script style="text/javascript">
            $(document).on('click','#btnSearch',function(){
                var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                    var val_id=$('input[name="hdhotelroomCalendar"]').val();
                    var fk_list_id=$('input[name="fk_list_id"]').val();
                    if(val_id!=""){
                        $.ajax({
                            url:"https://hoabinhbooking.com/vi/cmscpanel/hotel/room/load",
                            method:"POST",
                            data:{idhotel:val_id, fk_list_id:fk_list_id, _token:_token},
                            success:function(data){
                                fnSearchClick(data);
                            }
                    }); 
                    }
            });

            function fnSearchClick(v){
                if(v!=''){ 
                var _parts=v.split("i");
                var info=_parts[3];     // Danh sách Số lượng phòng, giá, theo ngày
                var num_info=_parts[4]; // Số lượng ngày đã được đặt phòng

                var checkin=document.getElementsByClassName("t-input-check-in")[0].value;
                var checkout=document.getElementsByClassName("t-input-check-out")[0].value;
                
                var dateParts = checkin.split("-");
                var dateParts2 = checkout.split("-");
                var dayCheckin1=new Date(dateParts[1]+'/'+dateParts[0]+'/'+dateParts[2]);
                var dayCheckout1=new Date(dateParts2[1]+'/'+dateParts2[0]+'/'+dateParts2[2]);
                
                var numDay1=fnInDays(dayCheckin1,dayCheckout1);
                
                var numRepeat=numDay1+2;
                var strContent='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">&nbsp;</div>';
                var strContent_1='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">&nbsp;</div>';
                var strContent_11='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">&nbsp;</div>';
                var strContent2='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">Trạng thái phòng</div>';
                var strContent3='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">Phòng để bán<br/><a class="update_multi_option" href="javascript:void(0);">Chỉnh sửa nhiều mục</a></div>';
                var strContent4='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">Số phòng được đặt thực tế</div>';
                var strContent5='<div class="list-grid"><div class="list-cell list-grid__cell--sticky"><a href="javascript:void(0);"><i class="fa fa-chevron-up" aria-hidden="true"></i> Standard Rate</a></div>';
                var strContent6='<div class="list-grid"><div class="list-cell list-grid__cell--sticky"><a href="javascript:void(0);"><i class="fa fa-chevron-up" aria-hidden="true"></i> Non-refundable Rate</a></div>';
                for(var i=0;i<=numDay1;i++){
                    var ddd=new Date(dayCheckin1);
                    var nextDay1=addDays1(ddd,i);
                    var tt1=fnThuTrongTuan(nextDay1);
                    
                    var days1=tt1+'<br/>'+nextDay1.getDate()+'/'+(nextDay1.getMonth()+1) +'/'+nextDay1.getFullYear();
                    var days2=nextDay1.getDate()+'_'+(nextDay1.getMonth()+1) +'_'+nextDay1.getFullYear();
                    var day22=checkValDaySearchClick(numDay1,info,days2);

                        var day223=day22.split(".");
                        var available_class='';
                        var realPro='';
                        var titleStatus='';
                        var numPhong='';
                        var price1='';
                        var price2='';

                        if(day223[4]=='A'){ 
                            if(day223[0]=='0' || day223[1]=='0' || day223[2]=='0'){
                                available_class=' unavailable ';
                                titleStatus='<span title="Nhập thông tin" class="text_status">Nhập thông tin</span>';
                                numPhong='';
                                price1='';
                                price2='';
                            }else{
                                if((day223[0]=='') && (day223[1]=='') && (day223[2]=='')){
                                    available_class=' unavailable ';
                                    titleStatus='<span title="Nhập thông tin" class="text_status">Nhập thông tin</span>';
                                    numPhong='';
                                    price1='';
                                    price2='';
                                }else{
                                    available_class=' available ';
                                    titleStatus='<span title="Đang mở bán" class="text_status">Đang mở bán</span>';
                                    numPhong=day223[0];
                                    price1=day223[1];
                                    price2=day223[2];
                                }
                            }
                        }else{
                            available_class=' unavailable ';
                            titleStatus='<span title="Đã đóng" class="text_status">Đã đóng</span>';
                            numPhong='';
                            price1='';
                            price2='';
                        }
                        
                        if(checkDayCurrent(days2)){
                            realPro=' readonly ';available_class=' over_day ';
                            titleStatus='<span title="Dừng điều chỉnh" class="text_status">Dừng điều chỉnh</span>';
                            numPhong='';
                            price1='';
                            price2='';
                        }

                        strContent+='<div class="list-cell">'+days1+'</div>';
                        strContent_1+='<div class="list-cell">&nbsp;</div>';
                        strContent_11+='<div class="list-cell">&nbsp;</div>';
                        strContent2+='<div class="list-cell '+available_class+'">'+titleStatus+'</div>';
                        strContent3+='<div class="list-cell '+available_class+'"><input type="hidden" id="status_room_'+days2+'" value="'+day223[4]+'" /><div class="text_file"><input type="number" min="0" '+realPro+' onchange="fnSave();" id="phongdeban_'+days2+'" value="'+numPhong+'"/></div></div>';
                        strContent4+='<div class="list-cell">&nbsp;</div>';
                        strContent5+='<div class="list-cell '+available_class+'"><div class="text_file"><input type="number" min="100000" '+realPro+' onchange="fnSave();" id="standard_rate_'+days2+'" value="'+price1+'"/></div></div>';
                        strContent6+='<div class="list-cell '+available_class+'"><div class="text_file"><input type="number" min="100000" '+realPro+' onchange="fnSave();" id="refundable_'+days2+'" value="'+price2+'"/></div></div>';
                    
                }
                strContent2+='</div>';
                strContent3+='</div>';
                strContent4+='</div>';
                strContent5+='</div>';
                strContent6+='</div>';
                strContent_1+='</div>';
                strContent_11+='</div>';
                strContent+='</div>'+strContent_1+strContent_11+strContent2+strContent3+strContent4+strContent5+strContent6;
                strContent+='<style> .list-grid{ display: grid;grid-template-columns: 220px repeat('+numRepeat+', 80px); }';
                strContent+='.list-cell{ position: relative;background: #fff;text-align: right;padding: 8px;border: 1px solid #e0e0e0;border-bottom-width: 0;border-left-width: 0;font-size: 12px;font-weight: 400; }';
                strContent+='.list-grid__cell--sticky{grid-row-start: 1;grid-row-end: 2;background: #fff; position: sticky;z-index: 5;left: 0;font-size: 12px;font-weight: 400;line-height: 18px;border: 1px solid #e0e0e0;border-bottom-width: 0;border-left-width: 0;padding: 4px 8px;  }';
                strContent+='.head-cal{ grid-column-start: 2;grid-column-end: 8;width:100%; } </style>';
                    $('#tblContent').html(strContent);
                }else{
                    var checkin=document.getElementsByClassName("t-input-check-in")[0].value;
                    var checkout=document.getElementsByClassName("t-input-check-out")[0].value;
                    
                    var dateParts = checkin.split("-");
                    var dateParts2 = checkout.split("-");
                    var dayCheckin1=new Date(dateParts[1]+'/'+dateParts[0]+'/'+dateParts[2]);
                    var dayCheckout1=new Date(dateParts2[1]+'/'+dateParts2[0]+'/'+dateParts2[2]);
                    
                    var numDay1=fnInDays(dayCheckin1,dayCheckout1);
                    
                    var numRepeat=numDay1+2;
                    var strContent='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">&nbsp;</div>';
                    var strContent_1='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">&nbsp;</div>';
                    var strContent_11='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">&nbsp;</div>';
                    var strContent2='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">Trạng thái phòng</div>';
                    var strContent3='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">Phòng để bán<br/><a class="update_multi_option" href="javascript:void(0);">Chỉnh sửa nhiều mục</a></div>';
                    var strContent4='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">Số phòng được đặt thực tế</div>';
                    var strContent5='<div class="list-grid"><div class="list-cell list-grid__cell--sticky"><a href="javascript:void(0);"><i class="fa fa-chevron-up" aria-hidden="true"></i> Standard Rate</a></div>';
                    var strContent6='<div class="list-grid"><div class="list-cell list-grid__cell--sticky"><a href="javascript:void(0);"><i class="fa fa-chevron-up" aria-hidden="true"></i> Non-refundable Rate</a></div>';
                    for(var i=0;i<=numDay1;i++){
                        var ddd=new Date(dayCheckin1);
                        var nextDay1=addDays1(ddd,i);
                        var tt1=fnThuTrongTuan(nextDay1);
                        
                        var days1=tt1+'<br/>'+nextDay1.getDate()+'/'+(nextDay1.getMonth()+1) +'/'+nextDay1.getFullYear();
                        var days2=nextDay1.getDate()+'_'+(nextDay1.getMonth()+1) +'_'+nextDay1.getFullYear();
                        
                        strContent+='<div class="list-cell">'+days1+'</div>';
                        strContent_1+='<div class="list-cell">&nbsp;</div>';
                        strContent_11+='<div class="list-cell">&nbsp;</div>';
                        strContent2+='<div class="list-cell unavailable">&nbsp;</div>';
                        strContent3+='<div class="list-cell unavailable"><div class="text_file"><input type="number" onchange="fnSave();" id="phongdeban_'+days2+'"/></div></div>';
                        strContent4+='<div class="list-cell">&nbsp;</div>';
                        strContent5+='<div class="list-cell unavailable"><div class="text_file"><input type="number" onchange="fnSave();" id="standard_rate_'+days2+'"/></div></div>';
                        strContent6+='<div class="list-cell unavailable"><div class="text_file"><input type="number" onchange="fnSave();" id="refundable_'+days2+'"/></div></div>';
                        
                    }
                    strContent2+='</div>';
                    strContent3+='</div>';
                    strContent4+='</div>';
                    strContent5+='</div>';
                    strContent6+='</div>';
                    strContent_1+='</div>';
                    strContent_11+='</div>';
                    strContent+='</div>'+strContent_1+strContent_11+strContent2+strContent3+strContent4+strContent5+strContent6;
                    strContent+='<style> .list-grid{ display: grid;grid-template-columns: 220px repeat('+numRepeat+', 80px); }';
                    strContent+='.list-cell{ position: relative;background: #fff;text-align: right;padding: 8px;border: 1px solid #e0e0e0;border-bottom-width: 0;border-left-width: 0;font-size: 12px;font-weight: 400; }';
                    strContent+='.list-grid__cell--sticky{grid-row-start: 1;grid-row-end: 2;background: #fff; position: sticky;z-index: 5;left: 0;font-size: 12px;font-weight: 400;line-height: 18px;border: 1px solid #e0e0e0;border-bottom-width: 0;border-left-width: 0;padding: 4px 8px;  }';
                    strContent+='.head-cal{ grid-column-start: 2;grid-column-end: 8;width:100%; } </style>';
                        $('#tblContent').html(strContent);
                    }                
            }

                function getDaysInMonth(m, y) { return m===2 ? y & 3 || !(y%25) && y & 15 ? 28 : 29 : 30 + (m+(m>>3)&1); }
                function addDays1(dateObj, numDays) { dateObj.setDate(dateObj.getDate() + numDays); return dateObj; }
                function fnInDays(d1,d2){ var t2 = d2.getTime(); var t1 = d1.getTime(); return parseInt((t2-t1)/(24*3600*1000)); }
                function fnThuTrongTuan(cc){
                    var current_day = cc.getDay();
                    var day_name = '';
                    // Lấy tên thứ của ngày hiện tại
                    switch (current_day) {
                    case 0:
                        day_name = "Chủ nhật";
                        break;
                    case 1:
                        day_name = "Thứ hai";
                        break;
                    case 2:
                        day_name = "Thứ ba";
                        break;
                    case 3:
                        day_name = "Thứ tư";
                        break;
                    case 4:
                        day_name = "Thứ năm";
                        break;
                    case 5:
                        day_name = "Thứ sáu";
                        break;
                    case 6:
                        day_name = "Thứ bảy";
                    }
                    return day_name;
                }


                $(document).ready(function(){
                    search();
                });

                function search(){
                    var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                    var val_id=$('input[name="hdhotelroomCalendar"]').val();
                    var fk_list_id=$('input[name="fk_list_id"]').val();
                    if(val_id!=""){
                        $.ajax({
                            url:"https://hoabinhbooking.com/vi/cmscpanel/hotel/room/load",
                            method:"POST",
                            data:{idhotel:val_id, fk_list_id:fk_list_id, _token:_token},
                            success:function(data){
                                //alert(data);
                                //$('#tblContent').html(data);
                                fnFirstLoad(data);
                            }
                    }); 
                    }
                }

                function checkValDaySearchClick(num_info,info,date1){
                    var strDay='';
                    var _pp=info.split("z");
                    var total=_pp.length;
                    for(var j=0;j<=num_info;j++){
                        if(j<total){
                            strDay=_pp[j].split("v");
                            if(strDay[3]==date1){
                                return strDay[0]+'.'+strDay[1]+'.'+strDay[2]+'.'+strDay[3]+'.'+strDay[4];
                            }
                        }else{
                            return '0.'+'0.'+'0.'+'0.A';
                        }
                        
                    }
                    return '';
                }

                function checkValDay(num_info,info,date1){
                    var strDay='';
                    var _pp=info.split("z");
                    for(var j=0;j<num_info;j++){
                        strDay=_pp[j].split("v");
                        if(strDay[3]==date1){
                            return strDay[0]+'.'+strDay[1]+'.'+strDay[2]+'.'+strDay[3]+'.'+strDay[4];
                        }
                    }
                    return '';
                }
                
                function checkDayCurrent(_date){
                    var dates_1 = _date.split("_");
                    var dates_2=new Date(dates_1[1]+'/'+dates_1[0]+'/'+dates_1[2]);
                    var dates_3=new Date();
                    var yesterday=dates_3.setDate(dates_3.getDate() - 1);
                    if(dates_2<yesterday){
                        return true;
                    }
                    return false;
                }

                function fnFirstLoad(v){
                    if(v==''){ return; }
                    
                    var _parts=v.split("i");
                    var idRoom=_parts[0];
                    var checkin=_parts[1];
                    var checkout=_parts[2];
                    var info=_parts[3];     // Danh sách Số lượng phòng, giá, theo ngày
                    var num_info=_parts[4]; // Số lượng ngày đã được đặt phòng

                    
                    //var refundable=_parts[5];
                    //var dayr=_parts[6];
                    /*var strDay='';
                    var strDay2='';
                    var _pp=info.split("z");
                    for(var j=0;j<num_info;j++){
                        strDay=_pp[j].split("v");
                        strDay2+=strDay[3]+'++';
                    }*/

                //var checkin=document.getElementsByClassName("t-input-check-in")[0].value;
                //var checkout=document.getElementsByClassName("t-input-check-out")[0].value;
                
                var dateParts = checkin.split("-");
                var dateParts2 = checkout.split("-");
                var dayCheckin1=new Date(dateParts[1]+'/'+dateParts[0]+'/'+dateParts[2]);
                var dayCheckout1=new Date(dateParts2[1]+'/'+dateParts2[0]+'/'+dateParts2[2]);
                
                
                //$('#hdCheckinFirst').val((dayCheckin1.getMonth()+1)+'/'+dayCheckin1.getDate()+'/'+dayCheckin1.getFullYear());
                //$('#hdCheckoutFirst').val((dayCheckout1.getMonth()+1)+'/'+dayCheckout1.getDate()+'/'+dayCheckout1.getFullYear());
                //alert();

                var numDay1=fnInDays(dayCheckin1,dayCheckout1);
                
                var numRepeat=numDay1+2;
                var strContent='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">&nbsp;</div>';
                var strContent_1='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">&nbsp;</div>';
                var strContent_11='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">&nbsp;</div>';
                var strContent2='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">Trạng thái phòng</div>';
                var strContent3='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">Phòng để bán<br/><a class="update_multi_option" href="javascript:void(0);">Chỉnh sửa nhiều mục</a></div>';
                var strContent4='<div class="list-grid"><div class="list-cell list-grid__cell--sticky">Số phòng được đặt thực tế</div>';
                var strContent5='<div class="list-grid"><div class="list-cell list-grid__cell--sticky"><a href="javascript:void(0);"><i class="fa fa-chevron-up" aria-hidden="true"></i> Standard Rate</a></div>';
                var strContent6='<div class="list-grid"><div class="list-cell list-grid__cell--sticky"><a href="javascript:void(0);"><i class="fa fa-chevron-up" aria-hidden="true"></i> Non-refundable Rate</a></div>';
                for(var i=0;i<=numDay1;i++){
                    var ddd=new Date(dayCheckin1);
                    var nextDay1=addDays1(ddd,i);
                    var tt1=fnThuTrongTuan(nextDay1);
                    
                    var days1=tt1+'<br/>'+nextDay1.getDate()+'/'+(nextDay1.getMonth()+1) +'/'+nextDay1.getFullYear();
                    var days2=nextDay1.getDate()+'_'+(nextDay1.getMonth()+1) +'_'+nextDay1.getFullYear();
                    var day22=checkValDay(num_info,info,days2);

                    //if(day22!=''){
                        var day223=day22.split(".");
                        var available_class='';
                        var realPro='';
                        var titleStatus='';
                        var numPhong='';
                        var price1='';
                        var price2='';

                        if(day223[4]=='A'){ 
                            if(day223[0]=='0' || day223[1]=='0' || day223[2]=='0'){
                                available_class=' unavailable ';
                                titleStatus='<span title="Nhập thông tin" class="text_status">Nhập thông tin</span>';
                                numPhong='';
                                price1='';
                                price2='';
                            }else{
                                if((day223[0]=='') && (day223[1]=='') && (day223[2]=='')){
                                    available_class=' unavailable ';
                                    titleStatus='<span title="Nhập thông tin" class="text_status">Nhập thông tin</span>';
                                    numPhong='';
                                    price1='';
                                    price2='';
                                }else{
                                    available_class=' available ';
                                    titleStatus='<span title="Đang mở bán" class="text_status">Đang mở bán</span>';
                                    numPhong=day223[0];
                                    price1=day223[1];
                                    price2=day223[2];
                                }
                            }
                        }else{
                            available_class=' unavailable ';
                            titleStatus='<span title="Đã đóng" class="text_status">Đã đóng</span>';
                            numPhong='';
                            price1='';
                            price2='';
                        }
                        
                        if(checkDayCurrent(days2)){
                            realPro=' readonly ';available_class=' over_day ';
                            titleStatus='<span title="Dừng điều chỉnh" class="text_status">Dừng điều chỉnh</span>';
                            numPhong='';
                            price1='';
                            price2='';
                        }

                        strContent+='<div class="list-cell">'+days1+'</div>';
                        strContent_1+='<div class="list-cell">&nbsp;</div>';
                        strContent_11+='<div class="list-cell">&nbsp;</div>';
                        strContent2+='<div class="list-cell '+available_class+'">'+titleStatus+'</div>';
                        strContent3+='<div class="list-cell '+available_class+'"><input type="hidden" id="status_room_'+days2+'" value="'+day223[4]+'" /><div class="text_file"><input type="number" min="0" '+realPro+' onchange="fnSave();" id="phongdeban_'+days2+'" value="'+numPhong+'"/></div></div>';
                        strContent4+='<div class="list-cell">&nbsp;</div>';
                        strContent5+='<div class="list-cell '+available_class+'"><div class="text_file"><input type="number" min="100000" '+realPro+' onchange="fnSave();" id="standard_rate_'+days2+'" value="'+price1+'"/></div></div>';
                        strContent6+='<div class="list-cell '+available_class+'"><div class="text_file"><input type="number" min="100000" '+realPro+' onchange="fnSave();" id="refundable_'+days2+'" value="'+price2+'"/></div></div>';
                    /*}else{
                        strContent+='<div class="list-cell">'+days1+'</div>';
                        strContent2+='<div class="list-cell unavailable">&nbsp;</div>';
                        strContent3+='<div class="list-cell unavailable"><div class="text_file"><input type="number" min="0" onchange="fnSave();" id="phongdeban_'+days2+'"/></div></div>';
                        strContent4+='<div class="list-cell">&nbsp;</div>';
                        strContent5+='<div class="list-cell unavailable"><div class="text_file"><input type="number" min="100000" onchange="fnSave();" id="standard_rate_'+days2+'"/></div></div>';
                        strContent6+='<div class="list-cell unavailable"><div class="text_file"><input type="number" min="100000" onchange="fnSave();" id="refundable_'+days2+'"/></div></div>';
                    }*/
                    
                }
                strContent2+='</div>';
                strContent3+='</div>';
                strContent4+='</div>';
                strContent5+='</div>';
                strContent6+='</div>';
                strContent_1+='</div>';
                strContent_11+='</div>';
                strContent+='</div>'+strContent_1+strContent_11+strContent2+strContent3+strContent4+strContent5+strContent6;
                strContent+='<style> .list-grid{ display: grid;grid-template-columns: 220px repeat('+numRepeat+', 80px); }';
                strContent+='.list-cell{ position: relative;background: #fff;text-align: right;padding: 8px;border: 1px solid #e0e0e0;border-bottom-width: 0;border-left-width: 0;font-size: 12px;font-weight: 400; }';
                strContent+='.list-grid__cell--sticky{grid-row-start: 1;grid-row-end: 2;background: #fff; position: sticky;z-index: 5;left: 0;font-size: 12px;font-weight: 400;line-height: 18px;border: 1px solid #e0e0e0;border-bottom-width: 0;border-left-width: 0;padding: 4px 8px;  }';
                strContent+='.head-cal{ grid-column-start: 2;grid-column-end: 8;width:100%; } </style>';
                $('#tblContent').html(strContent);
                }


                function fnCheckVal($datef){
                    var _phongdeban=$('#phongdeban_'+$datef).val();
                    var _standard_rate=$('#standard_rate_'+$datef).val();
                    var _refundable=$('#refundable_'+$datef).val();
                    if((_phongdeban!='') || (_standard_rate!='') || (_refundable !='')){
                        return true;
                    }
                    return false;
                }

                function fnSave(){
                    var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                    var val_id=$('input[name="hdhotelroomCalendar"]').val();
                    var id_room=$('input[name="id_room"]').val();
                    if(id_room==''){
                        alert('Vui lòng tạo phòng để cập nhật giá');
                        return;
                    }

                    var checkin=document.getElementsByClassName("t-input-check-in")[0].value;
                    var checkout=document.getElementsByClassName("t-input-check-out")[0].value;
                    var dateParts = checkin.split("-");
                    var dateParts2 = checkout.split("-");
                    var dayCheckin1=new Date(dateParts[1]+'/'+dateParts[0]+'/'+dateParts[2]);
                    var dayCheckout1=new Date(dateParts2[1]+'/'+dateParts2[0]+'/'+dateParts2[2]);
                    
                    var allDays=dayCheckin1.getDate()+'_'+(dayCheckin1.getMonth()+1)+'_'+dayCheckin1.getFullYear()+'i'+dayCheckout1.getDate()+'_'+(dayCheckout1.getMonth()+1)+'_'+dayCheckout1.getFullYear();
                    
                    var numDay1=fnInDays(dayCheckin1,dayCheckout1);
                    var str_info='';
                    for(var i=0;i<=numDay1;i++){
                        var ddd=new Date(dayCheckin1);
                        var nextDay1=addDays1(ddd,i);
                        //var days1=nextDay1.getDate()+'/'+(nextDay1.getMonth()+1) +'/'+nextDay1.getFullYear();
                        var days2=nextDay1.getDate()+'_'+(nextDay1.getMonth()+1) +'_'+nextDay1.getFullYear();

                        //if(fnCheckVal(days2)){
                            str_info+=$('#phongdeban_'+days2).val()+'v'+$('#standard_rate_'+days2).val()+'v'+$('#refundable_'+days2).val()+'v'+days2+'vAz';
                        //}
                    }
                    if(str_info!=''){
                        $.ajax({
                            url:"https://hoabinhbooking.com/vi/partnership/calendar/update-room",
                            method:"POST",
                            data:{idhotel:val_id,id_room:id_room,checkin:allDays,info:str_info, _token:_token},
                            success:function(data){
                                //alert(data);
                                //$('#tblContent').html(data);
                                search();
                            }
                    });
                    }
                    
                }

                function fnCheckThu(current_thu){
                    var _allthu=$('#hdThu').val();
                    var numthu=_allthu.split(',');
                    for(var i12=0;i12<numthu.length;i12++)
                    {
                        if(numthu[i12]!=''){
                            if(numthu[i12]==current_thu){
                                return true;
                            }
                        }
                    }
                    return false;
                }
                function fnSaveMultiRoom(){
                    var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
                    var val_id=$('input[name="hdhotelroomCalendar"]').val();
                    var id_room=$('input[name="id_room"]').val();
                    if(id_room==''){
                        alert('Vui lòng tạo phòng để cập nhật giá');
                        return;
                    }
                    var checkin=document.getElementsByClassName("t-input-check-in")[0].value;
                    var checkout=document.getElementsByClassName("t-input-check-out")[0].value;
                    var dateParts = checkin.split("-");
                    var dateParts2 = checkout.split("-");
                    var dayCheckin1=new Date(dateParts[1]+'/'+dateParts[0]+'/'+dateParts[2]);
                    var dayCheckout1=new Date(dateParts2[1]+'/'+dateParts2[0]+'/'+dateParts2[2]);
                    
                    var allDays=dayCheckin1.getDate()+'_'+(dayCheckin1.getMonth()+1)+'_'+dayCheckin1.getFullYear()+'i'+dayCheckout1.getDate()+'_'+(dayCheckout1.getMonth()+1)+'_'+dayCheckout1.getFullYear();
                    
                    var numDay1=fnInDays(dayCheckin1,dayCheckout1);
                    
                    var rdoStatus = document.getElementsByName("rdoModongphong");
                    var valStatus='N';
                    for (var i = 0; i < rdoStatus.length; i++){
                        if (rdoStatus[i].checked === true){
                            valStatus=rdoStatus[i].value;
                        }
                    }

                    
                    var str_info='';
                    var strTest='';
                    var strTest2='';
                    for(var i=0;i<=numDay1;i++){
                        var ddd=new Date(dayCheckin1);
                        var nextDay1=addDays1(ddd,i);
                        
                        //var days1=nextDay1.getDate()+'/'+(nextDay1.getMonth()+1) +'/'+nextDay1.getFullYear();
                        var days2=nextDay1.getDate()+'_'+(nextDay1.getMonth()+1) +'_'+nextDay1.getFullYear();
                        
                        if(checkDayCurrent(days2)){
                            str_info+=$('#phongdeban_'+days2).val()+'v'+$('#standard_rate_'+days2).val()+'v'+$('#refundable_'+days2).val()+'v'+days2+'v'+$('#status_room_'+days2).val()+'z';
                        }else{
                                var current_thu = nextDay1.getDay();
                                if(fnCheckThu(current_thu)){
                                    str_info+=$('#phongdeban_'+days2).val()+'v'+$('#standard_rate_'+days2).val()+'v'+$('#refundable_'+days2).val()+'v'+days2+'v'+$('#status_room_'+days2).val()+'z';
                                }else{
                                    str_info+=$('#soluongphongmulti').val()+'v'+$('#pricePhongMulti').val()+'v'+$('#refundable_'+days2).val()+'v'+days2+'v'+valStatus+'z';
                                }
                        }
                    }

                    //str_info+=strTest;

                    //alert(strTest);
                    //exit();
                    /*alert(str_info);
                    exit();*/
                    
                    if(str_info!=''){
                        $.ajax({
                            url:"https://hoabinhbooking.com/vi/partnership/calendar/update-room",
                            method:"POST",
                            data:{idhotel:val_id,id_room:id_room,checkin:allDays,info:str_info, _token:_token},
                            success:function(data){
                                //alert(data);
                                //$('#tblContent').html(data);
                                search();
                            }
                    });
                    }
                    
                }
        </script>
        {{ csrf_field() }}
        <input type="hidden" id="hdhotelroomCalendar" name="hdhotelroomCalendar" value="{{ $data->id }}"/>
        @if(!empty($bravo_hotel_room_calendars))
            <input type="hidden" id="fk_list_id" name="fk_list_id" value="{{ $bravo_hotel_room_calendars->fk_list_id }}"/>
            <input type="hidden" id="id_room" name="id_room" value="{{ $bravo_hotel_room_calendars->id }}"/>
        @else
            <input type="hidden" id="fk_list_id" name="fk_list_id" value=""/>
            <input type="hidden" id="id_room" name="id_room" value=""/>
        @endif
        <input type="hidden" id="hdCheckinFirst" name="hdCheckinFirst" value="{{ $checkin_day }}"/>
        <input type="hidden" id="hdCheckoutFirst" name="hdCheckoutFirst" value="{{ $checkout_day }}"/>
        <style type="text/css">
        .boxsname{ float: left;position: relative;width: 100%; }
        .boxlname{ float: left;position: absolute;width: 100%;height: 68px;background: #fff;z-index: 999;top: 55px;left: 30px; }
        .boxhname{ width:50%;float: left;line-height: 68px;padding: 0 10px; }
        </style>

        
        <div class="row" style="margin-top:15px;">
        @if(!empty($bravo_hotel_room_list_calendars))
        <div class="boxsname">
        <div class="boxlname">
        <div class="boxhname">
        <b style="font-size:20px;">{{ $bravo_hotel_room_list_calendars->title }}</b> <i style="font-size: 12px;">(Số ID phòng: {{ $bravo_hotel_room_list_calendars->code }})</i>
        </div>
        <div class="boxhname" style="text-align: right;">
        <a class="btn btn-primary update_multi_option" href="javascript:void(0);">Chỉnh sửa nhiều mục</a>
        </div>
        </div>
        </div>
        @endif

        <div class="scroll-sync-container">
        <div id="tblContent">
        
        </div>
        <div style="width:100%;height:10px;clear:both;"></div>
        </div>
        </div>
        

        </div>

        

        <!--END MY CODE-->

    <!------BEGEN TEST------>
    <!------END BEGIN TEST------>
      </div>
      </div>

<style type="text/css">
.wap-opacity-option,.create-room-opacity-option{ float:left;position: fixed;width:100%;height:100%;background:#000;top: 0;bottom: 0;left: 0;right: 0;opacity: 0.8;transition: all .2s ease-in-out;z-index: 101; }

.wap-multi-option h3{ font-size: 20px;margin:0px;padding:0px; }
.wap-multi-option { width: 0;height: 100%;position: fixed;float: right;z-index: 99999;top: 0px;right: 0px;margin: 0px;padding: 0px;overflow: hidden; }
.multi-option-lv01{ width:100%;height:100%;background-color:#fff;position: absolute;top:0px;right:0px;overflow-y: scroll; }
.multi-option-header{ padding:20px;border-bottom: solid 1px #ccc;display: flex; }
.box-thu{ width:100%;display: grid;grid-template-columns: repeat(7, 70px); }
.box-thu-items{ padding:5px;text-align:center; }
.row-lich{ margin: 15px 0; }
.row-lich img{ width:15px; }
</style>
<script type="text/javascript">
// id="update_multi_option"
$(document).on('click','.update_multi_option',function(){ 
    $("#wap-multi-option").animate({ width: "565px"}); $("#wap-opacity-option").css("display","block"); 
    var checkin=document.getElementsByClassName("t-input-check-in")[0].value;
    var checkout=document.getElementsByClassName("t-input-check-out")[0].value;
    $(".lich_tu").html(checkin);
    $(".lich_den").html(checkout);
    fnGetThuMulti();
});
$(document).on('click','#closemulti',function(){ $("#wap-multi-option").animate({ width: "0px"});$("#wap-opacity-option").css("display","none"); });
$(document).on('click','#wap-opacity-option',function(){ $("#wap-multi-option").animate({ width: "0px"});$("#wap-opacity-option").css("display","none"); });
$(document).on('click','#btnCancelRoom',function(){ $("#wap-multi-option").animate({ width: "0px"});$("#wap-opacity-option").css("display","none"); });
$(document).on('click','#btnCreateRoom',function(){
   $("#create-room-opacity-option").css("display","block");
   $("#create_room").css("z-index","999999999");
   $(".boxcreateroom").animate({ height: "565px"});
});
$(document).on('click','#create-room-opacity-option',function(){ $(".boxcreateroom").animate({ height: "0px"});$("#create-room-opacity-option").css("display","none"); });
$(document).on('click','.closecreateroom',function(){ $(".boxcreateroom").animate({ height: "0px"});$("#create-room-opacity-option").css("display","none"); });

$(document).on('click','#btnSaveRoom',function(){ 
    if($('#soluongphongmulti').val()==''){ $('#soluongphongmulti').css("border","solid 2px red");$('#soluongphongmulti').focus(); return; }
    else{ $('#soluongphongmulti').css("border","none"); }
    if($('#pricePhongMulti').val()==''){ $('#pricePhongMulti').css("border","solid 2px red");$('#pricePhongMulti').focus(); return; }
    else{ $('#pricePhongMulti').css("border","none"); }
    var rdoStatus = document.getElementsByName("rdoModongphong");
    var valStatus='';
    for (var i = 0; i < rdoStatus.length; i++){
        if (rdoStatus[i].checked === true){
            valStatus=rdoStatus[i].value;
        }
    }
    if(valStatus==''){ $('#rdoMoPhong').css("border","solid 2px red");$('#rdoMoPhong').focus(); return; }
    else{ $('#rdoMoPhong').css("border","none"); }
    fnSaveMultiRoom(); 
});


    function fnGetThuMulti() {
       var strv3 = '';
       try{
           for (var i = 0; i < document.getElementsByName('thu').length; i++) {
               if (document.getElementsByName('thu')[i].checked == false) {
                   strvalue = document.getElementsByName('thu')[i].value;
                   strv3 = strv3 + strvalue + ',';
               }
           }
           document.getElementById('hdThu').value = strv3;
       } catch (e) {
           strv3 = e.Message;
       }
       
   }

   function fnRoomChange(){
       var _HotelID=$('#hdhotelroomCalendar').val();
       var _Fk_list_id=$('#slLich').val();
       var url1='https://hoabinhbooking.com/vi/cmscpanel/public/hotel/'+_HotelID+'?tab=2&room_id='+_Fk_list_id;
       location.href = url1;
   }

</script>


<div style="display:none;" class="wap-opacity-option" id="wap-opacity-option"></div>
<div class="wap-multi-option" id="wap-multi-option">
<div class="multi-option-lv01">
<div class="multi-option-header"><h3 style="float:left;">Chỉnh sửa nhiều mục</h3>
<div style="float: right;text-align: right;width: 60%;"><a id="closemulti" href="javascript:void(0);"><i style="color:#ccc;" class="fa fa-times" aria-hidden="true"></i></a></div>
</div>

<div class="container">
<div class="row-lich">
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="t-datepicker">
                    <div class="t-check-in" id="t-check-in"></div>
                    <div class="t-check-out"></div>
                
                
            </div>
</div>






<!--<div class="col-md-6 col-sm-12">
Từ: <img alt="lịch" src="https://hoabinhbooking.com/public/icon/icons-calendar.jpg" /> <span class="lich_tu"></span>
</div>
<div class="col-md-6 col-sm-12">
Đến và bao gồm: <img alt="lịch" src="https://hoabinhbooking.com/public/icon/icons-calendar.jpg" /> <span class="lich_den"></span>
</div>-->






</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12">
Quý vị muốn áp dụng thay đổi cho ngày nào trong tuần
</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="box-thu" id="box_thu">
<div class="box-thu-items"><label><input onclick="fnGetThuMulti()" checked type="checkbox" id="t2" name="thu" value="1"/> T2</label></div>
<div class="box-thu-items"><label><input onclick="fnGetThuMulti()" checked type="checkbox" id="t3" name="thu" value="2"/> T3</label></div>
<div class="box-thu-items"><label><input onclick="fnGetThuMulti()" checked type="checkbox" id="t4" name="thu" value="3"/> T4</label></div>
<div class="box-thu-items"><label><input onclick="fnGetThuMulti()" checked type="checkbox" id="t5" name="thu" value="4"/> T5</label></div>
<div class="box-thu-items"><label><input onclick="fnGetThuMulti()" checked type="checkbox" id="t6" name="thu" value="5"/> T6</label></div>
<div class="box-thu-items"><label><input onclick="fnGetThuMulti()" checked type="checkbox" id="t7" name="thu" value="6"/> T7</label></div>
<div class="box-thu-items"><label><input onclick="fnGetThuMulti()" checked type="checkbox" id="cn" name="thu" value="0"/> CN</label></div>
<input type="hidden" name="hdThu" id="hdThu" value=""/>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12">
<h3>Phòng để bán</h3>
<p>Cập nhật số lượng phòng để bán cho loại phòng này</p>
</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12">
<table style="width:300px;border:solid 1px #ccc;border-collapse: collapse;" border="1">
<tr>
<td style="text-align:left;vertical-align: middle;width:75%;">
<input type="number" id="soluongphongmulti" style="width:100%;float:left;height:33px;border:none;" min="1" max="20"/>
</td>
<td style="text-align:left;vertical-align: middle;padding:5px 10px;background-color: #ededed;color: #6e6e6e;">
Phòng
</td>
</tr>
</table>
<p><i>Thay đổi sẽ được thực hiện cho khoảng thời gian: Ngày <span class="lich_tu">09-07-2021</span> đến Ngày <span class="lich_den">31-07-2021</span></i></p>
</div>
</div>

<hr/>
<div class="row">
<div class="col-md-12 col-sm-12">
<h3>Giá</h3>
<p>Thay đổi giá của bất cứ loại giá nào cho phòng này</p>
<table style="width:350px;border:solid 1px #ccc;border-collapse: collapse;" border="1">
<tr>
<td style="text-align:left;vertical-align: middle;width:55%;">
<select class="form-control" id="slPriceMulti" name="slPriceMulti" style="border:none;box-shadow: none;">
<option disabled="disabled">Chọn loại giá</option>
<option value="Standard Rate">Standard Rate</option>
</select>
</td>
<td style="text-align:left;vertical-align: middle;width:35%;">
<input type="number" id="pricePhongMulti" style="width:100%;float:left;height:33px;border:none;" min="1"/>
</td>
<td style="text-align:left;vertical-align: middle;padding:5px 10px;background-color: #ededed;color: #6e6e6e;">
VNĐ
</td>
</tr>
</table>
</div>
</div>
<hr/>
<div class="row">
<div class="col-md-12 col-sm-12">
<h3>Trạng thái phòng</h3>
<p><i>Mở hoặc đóng phòng này</i></p>
<p></p>
<label><input type="radio" id="rdoMoPhong" name="rdoModongphong" value="A"/> Mở phòng</label>
&nbsp;&nbsp;&nbsp;
<label><input type="radio" id="rdoDongPhong" name="rdoModongphong" value="N"/> Đóng phòng</label>
</p>
<hr/>
<p>
<input type="button" name="btnSaveRoom" id="btnSaveRoom" class="btn btn-primary" value="Lưu thay đổi" />
<input type="button" name="btnCancelRoom" id="btnCancelRoom" class="btn btn-primary" style="background-color:#fff;color:#000;" value="Hủy" />
</p>
</div>
</div>
</div>
</div>
</div>




    </div>
  </div>
</div>

</div>

<div style="width:100%;height:1px;clear:both;"></div>
     </div>
     </div>
    
     <div id="notifyArea" style="position: fixed; bottom: 45px; right: 5px; margin: auto;
                z-index: 999999999;">
                <div class="popupnotifyhead" style="z-index: 999999999;-moz-border-radius: 5px;padding-left: 50px; display: none; opacity: 0.0; cursor: pointer">
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                Cập nhật thành công
              </div>
                </div>
            </div>

    <script src="https://hoabinhbooking.com/dist/admin/js/manifest.js?_ver=1.4.0"></script>
    <script src="https://hoabinhbooking.com/dist/admin/js/vendor.js?_ver=1.4.0"></script>
    <script src="https://hoabinhbooking.com/dist/admin/js/app.js?_ver=1.4.0"></script>
    <script src="https://hoabinhbooking.com/libs/select2/js/select2.min.js"></script>
    <script src="https://hoabinhbooking.com/libs/bootbox/bootbox.min.js"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery-1.7.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/slug.js') }}"></script>
    <script src="https://hoabinhbooking.com/public/libs/calendar/js/frontend-t-datepicker.min.js"></script>
    <script>
    $(document).ready(function(){
        // Call global the function
        $('.t-datepicker').tDatePicker({
        // options here
        });
    });
    </script>
   </body>
</html>

<?php
function fnCheckTerm($categories,$pId){
    foreach ($categories as $key=>$item){
        if($item->term_id==$pId){
            return true;
        }
    }
    return false;
}
?>