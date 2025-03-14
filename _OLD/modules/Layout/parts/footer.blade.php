<style>
.infomation a,.infomation b{ color:#fff;}
.infomation p{ margin:0px;padding:0px;margin-bottom:5px;}
</style>
<div class="bravo_footer" style="background: url(https://hoabinhbooking.com/public/images/bgfoot-6991.jpeg) no-repeat top center;padding: 5px 0px 0px 0px;background-size: 100% 100% !important;">
    <div class="mailchimp">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="row">
                        <div class="col-xs-12  col-md-7 col-lg-6">
                            <div class="media ">
                                <div class="media-left hidden-xs">
                                    <i class="icofont-island-alt"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">{{__("Get Updates & More")}}</h4>
                                    <p>{{__("Thoughtful thoughts to your inbox")}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 col-lg-6">
                            <form action="{{route('newsletter.subscribe')}}" class="subcribe-form bravo-subscribe-form bravo-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control email-input" placeholder="{{__('Your Email')}}">
                                    <button type="submit" class="btn-submit">{{__('Subscribe')}}
                                        <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                    </button>
                                </div>
                                <div class="form-mess"></div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
 
    @endphp
     @if(request()->path() != 'vi/contact')
    <div class="main-footer">
        <div class="container">
            <div class="row">
            <div class="col-lg-5 col-md-12">
            <div style="width:100%;clear:both;">
            <img style="width: 150px;background: #fff;border-radius: 5px;" alt="logo" src="https://hoabinhbooking.com/uploads/0000/21/2021/06/18/logohoabinhbooking.png"/>
            </div>
            <div style="width:100%;clear:both;color:#fff;padding: 10px 0;">
            <i>Thương hiệu của Hoabinh-Group.com</i>
            </div>
            <div style="width:100%;clear:both;color:#fff;line-height:30px;">
            ĐKKD: 0102720141<br/>
            Ngày cấp: 14/04/2008 | Nơi cấp: Sở kế hoạch và đầu tư TP. Hà Nội <br/>
            </div>
            <div style="width:100%;clear:both;color:#fff;line-height:30px;">
            <i style="color:#ffcd46;" class="fa fa-map-marker" aria-hidden="true"></i> Hà Nội: 29 Đoàn Thị Điểm - Quốc Tử Giám - Đống Đa - Hà Nội<br/>
            <i style="color:#ffcd46;" class="fa fa-map-marker" aria-hidden="true"></i> Đà Nẵng: 217 Trần Phú, Quận Hải Châu<br/>
            <i style="color:#ffcd46;" class="fa fa-map-marker" aria-hidden="true"></i> Hồ Chí Minh: 05 Hoa Cau, Phường 7, Quận Phú Nhuận
            </div>
            </div>
            <div class="col-lg-2 col-md-12">
            <div class="infomation">
            <p style="border-bottom: solid 1px #fff;margin-bottom: 15px;"><b style="font-size:20px;">Dịch vụ</b></p>
            <p><a rel="nofolow" href="https://hoabinhtourist.com/"><i class="fa fa-caret-right" aria-hidden="true"></i> Tours du lịch</a></p>
            <p><a rel="nofolow" href="https://hoabinhbus.com/"><i class="fa fa-caret-right" aria-hidden="true"></i> Cho thuê xe</a></p>
            <p><a rel="nofolow" href="https://hoabinhairlines.vn/"><i class="fa fa-caret-right" aria-hidden="true"></i> Vé máy bay</a></p>
            
            <div style="float:left;position: relative;">
            <div style="float: left;position: absolute;width: 250px;">
            <p style="margin-top:40px;"><b>Bạn cần trợ giúp? Hãy gọi ngay:</b></p>
            <p>
                <a href="tel:0913311911">
                <img style="width: 40px;background: transparent;float: left;" alt="hotline" src="https://hoabinhbooking.com/public/images/calling.gif">
                <span style="color: #fff;font-size: 20px;padding-top: 5px;padding-left: 10px;display: block;float: left;">
                0913 311 911
                </span>
                </a>
            </p>
            </div>
            </div>

            </div>
            </div>
            <div class="col-lg-3 col-md-12">
            <div class="infomation">
            <p style="border-bottom: solid 1px #fff;margin-bottom: 15px;"><b style="font-size:20px;">Thông tin cần biết</b></p>
            <p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Giới thiệu</a></p>
            <p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Điều khoản & quy chế</a></p>
            <p><a rel="nofolow" href="/vi/signup"><i class="fa fa-caret-right" aria-hidden="true"></i> Đăng ký tài khoản</a></p>
            <p><a rel="nofolow" href="/vi/partnership"><i class="fa fa-caret-right" aria-hidden="true"></i> Hợp tác đại lý</a></p>
            
            </div>
            </div>
            <div class="col-lg-2 col-md-12">
            <div class="infomation">
            <p style="border-bottom: solid 1px #fff;margin-bottom: 15px;"><b style="font-size:20px;">Chính sách</b></p>
            <p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Điều khoản sử dụng</a></p>
            <p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Chính sách bảo hành</a></p>
            <p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Chính sách đổi trả</a></p>
            <p><a rel="nofolow" href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Chính sách bảo mật</a></p>
            <p>
            <img style="width:199px;margin-top: 20px;" alt="cong thuong" src="https://hoabinhbooking.com/public/images/congthuong-7841.png"/>
            </p>
            
            </div>
            </div>


                <!--@if($list_widget_footers = setting_item_with_lang("list_widget_footer"))
                <?php $list_widget_footers = json_decode($list_widget_footers); ?>
                    @foreach($list_widget_footers as $key=>$item)
                       @if($loop->first)
                   		 <div class="col-md-12" style="margin-bottom: 50px;">
				   		 	<div class="title">
                                    <h4>{{$item->title}}</h4>
							</div>
                    	</div>
                    	
                   	   @endif	 
                         <div class="col-lg-{{$item->size ?? '3'}} col-md-6">
                            <div class="nav-footer">
                                
                                <div class="context">
                                    {!! $item->content  !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif-->
            </div>
        </div>
    </div>
    @endif
    <div class="copy-right" style="background: rgba(0, 0, 0, 0.1);">
        <div class="container context" style="padding: 20px 15px!important;color: #fff;">
            <div class="row">
                <div class="col-md-12">
                    <!--{!! setting_item_with_lang("footer_text_left") ?? ''  !!}-->
                    Copyright © 2021 by Hoabinh Booking
                    <div class="f-visa">
                        <!--{!! setting_item_with_lang("footer_text_right") ?? ''  !!}-->
                        HoabinhBooking.com
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<script src="https://hoabinhbooking.com/public/js/mfb.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://hoabinhbooking.com/public/css/mfb.css">

<style>
    .vne-alo-phone {
        position: absolute;
        visibility: hidden;
        background-color: transparent;
        width: 200px;
        height: 200px;
        cursor: pointer;
        z-index: 200000 !important;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        -webkit-transition: visibility .5s;
        -moz-transition: visibility .5s;
        -o-transition: visibility .5s;
        transition: visibility .5s;
        right: 150px;
        top: -30px
    }

    .mfb-component__list {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        left: -220px;
        top: 30px;
    }

    .vne-alo-move-cursor {
        cursor: move
    }

    .vne-alo-phone.vne-alo-show {
        visibility: visible
    }

    @-webkit-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }

    }

    @-webkit-keyframes fadeInRightBig {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none
        }

    }

    @-webkit-keyframes fadeOutRight {
        0% {
            opacity: 1
        }
        100% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

    }

    .fadeOutRight {
        -webkit-animation-name: fadeOutRight;
        animation-name: fadeOutRight
    }

    .vne-alo-phone.vne-alo-static {
        opacity: .6
    }

    .vne-alo-phone.vne-alo-hover, .vne-alo-phone:hover {
        opacity: 1
    }

    .vne-alo-ph-circle {
        width: 160px;
        height: 160px;
        top: 20px;
        left: 20px;
        position: absolute;
        background-color: transparent;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(30, 30, 30, 0.4);
        border: 2px solid #bfebfc 9;
        opacity: .1;
        -webkit-animation: vne-alo-circle-anim 1.2s infinite ease-in-out;
        -moz-animation: vne-alo-circle-anim 1.2s infinite ease-in-out;
        -ms-animation: vne-alo-circle-anim 1.2s infinite ease-in-out;
        -o-animation: vne-alo-circle-anim 1.2s infinite ease-in-out;
        animation: vne-alo-circle-anim 1.2s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .vne-alo-ph-circle-close {
        width: 17px;
        height: 17px;
        position: absolute;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        background: rgba(0, 175, 242, 0.7);
        right: 60px;
        top: 60px;
        color: #fff;
        opacity: 0;
        animation-timing-function: ease;
        animation-iteration-count: 1;
        animation-direction: normal;
        animation-delay: 0;
        z-index: 99999;

    }

    .vne-alo-ph-circle-close:before, .vne-alo-ph-circle-close:after {
        content: "";
        position: absolute;
        width: 13px;
        height: 1px;
        background: #fff;
        left: 2px;
        top: 8px
    }

    .vne-alo-ph-circle-close:before {
        webkit-transfor: rotate(45deg);
        transform: rotate(45deg)
    }

    .vne-alo-ph-circle-close:after {
        webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    .vne-alo-ph-circle-close-animation-show {
        animation-name: showCloseBtn;
        animation-duration: .5s;
        animation-fill-mode: forwards
    }

    .vne-alo-ph-circle-close-animation-hide {
        animation-name: hideCloseBtn;
        animation-duration: .5s;
        animation-fill-mode: forwards
    }

    .vne-alo-mobile .vne-alo-ph-circle {
        width: 140px;
        height: 140px;
        top: 30px;
        left: 30px
    }

    .vne-alo-phone.vne-alo-active .vne-alo-ph-circle {
        -webkit-animation: vne-alo-circle-anim 1.1s infinite ease-in-out !important;
        -moz-animation: vne-alo-circle-anim 1.1s infinite ease-in-out !important;
        -ms-animation: vne-alo-circle-anim 1.1s infinite ease-in-out !important;
        -o-animation: vne-alo-circle-anim 1.1s infinite ease-in-out !important;
        animation: vne-alo-circle-anim 1.1s infinite ease-in-out !important
    }

    .vne-alo-phone.vne-alo-static .vne-alo-ph-circle {
        -webkit-animation: vne-alo-circle-anim 2.2s infinite ease-in-out !important;
        -moz-animation: vne-alo-circle-anim 2.2s infinite ease-in-out !important;
        -ms-animation: vne-alo-circle-anim 2.2s infinite ease-in-out !important;
        -o-animation: vne-alo-circle-anim 2.2s infinite ease-in-out !important;
        animation: vne-alo-circle-anim 2.2s infinite ease-in-out !important
    }

    .vne-alo-phone.vne-alo-hover .vne-alo-ph-circle, .vne-alo-phone:hover .vne-alo-ph-circle {
        border-color: #00aff2;
        opacity: .5
    }

    .vne-alo-phone.vne-alo-green.vne-alo-hover .vne-alo-ph-circle, .vne-alo-phone.vne-alo-green:hover .vne-alo-ph-circle {
        border-color: #75eb50;
        opacity: .5
    }

    .vne-alo-phone.vne-alo-green .vne-alo-ph-circle {
        border-color: #00aff2;
        opacity: .5
    }

    .vne-alo-phone.vne-alo-yellow .vne-alo-ph-circle {
        border-color: #00aff0;
        opacity: .5
    }

    .vne-alo-phone.vne-alo-gray.vne-alo-hover .vne-alo-ph-circle, .vne-alo-phone.vne-alo-gray:hover .vne-alo-ph-circle {
        border-color: #ccc;
        opacity: .5
    }

    .vne-alo-phone.vne-alo-gray .vne-alo-ph-circle {
        border-color: #75eb50;
        opacity: .5
    }

    .vne-alo-ph-circle-fill {
        width: 100px;
        height: 100px;
        top: 50px;
        left: 50px;
        position: absolute;
        background-color: #000;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        opacity: .1;
        -webkit-animation: vne-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -moz-animation: vne-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -ms-animation: vne-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -o-animation: vne-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: vne-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    .vne-alo-phone.vne-alo-active .vne-alo-ph-circle-fill {
        -webkit-animation: vne-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        -moz-animation: vne-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        -ms-animation: vne-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        -o-animation: vne-alo-circle-fill-anim 1.7s infinite ease-in-out !important;
        animation: vne-alo-circle-fill-anim 1.7s infinite ease-in-out !important
    }

    .vne-alo-phone.vne-alo-static .vne-alo-ph-circle-fill {
        -webkit-animation: vne-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        -moz-animation: vne-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        -ms-animation: vne-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        -o-animation: vne-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        animation: vne-alo-circle-fill-anim 2.3s infinite ease-in-out !important;
        opacity: 0 !important
    }

    .vne-alo-phone.vne-alo-hover .vne-alo-ph-circle-fill, .vne-alo-phone:hover .vne-alo-ph-circle-fill {
        background-color: rgba(0, 175, 242, 0.5);
        background-color: #00aff2 9;
        opacity: .75 !important
    }

    .vne-alo-phone.vne-alo-green.vne-alo-hover .vne-alo-ph-circle-fill,.vne-alo-phone.vne-alo-yellow.vne-alo-hover .vne-alo-ph-circle-fill, .vne-alo-phone.vne-alo-green:hover .vne-alo-ph-circle-fill, .vne-alo-phone.vne-alo-yellow:hover .vne-alo-ph-circle-fill {
        background-color: rgba(230, 240, 57, 0.53);
        background-color: #baf5a7 9;
        opacity: .75 !important
    }

    .vne-alo-phone.vne-alo-green .vne-alo-ph-circle-fill {
        background-color: rgba(0, 175, 242, 0.5);
        background-color: #a6e3fa 9;
        opacity: .75 !important
    }

    .vne-alo-phone.vne-alo-yellow .vne-alo-ph-circle-fill {
        background-color: rgba(0, 175, 242, 0.5);
        background-color: #a6e3fa 9;
        opacity: .75 !important
    }

    .vne-alo-phone.vne-alo-gray.vne-alo-hover .vne-alo-ph-circle-fill, .vne-alo-phone.vne-alo-gray:hover .vne-alo-ph-circle-fill {
        background-color: rgba(204, 204, 204, 0.5);
        background-color: #ccc 9;
        opacity: .75 !important
    }

    .vne-alo-phone.vne-alo-gray .vne-alo-ph-circle-fill {
        background-color: rgba(117, 235, 80, 0.5);
        opacity: .75 !important
    }

    .vne-alo-ph-img-circle {
        width: 60px;
        height: 60px;
        top: 71px;
        left: 71px;
        position: absolute;
        background: rgba(30, 30, 30, 0.1) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEyklEQVRogd3ZX4hc5RnH8c8bQljCImGRIGHRnD2iIhLcg8SgsvSiF6WtYkVaFCyCgviPUIqEXhQRESu5kFxU+0fbQkGtF2pbK16IF2JFg8yCSFDx7NGyLCVICCGERZZ9vXhn1nGTmTlzdnZn8QtzM+c85zy/98/zPO9zQhR9H9gxbgdGxc46N+XZ7A7CJCbxdVm1vtpct4Yn9FtaeVbsRYGrcBlxL+Ek/lxWrRNb5GMtegrJs9mDhEdwANPE3QRYxnP4bVm1Tm+ZpwO44B7Js9krCH/EbbgCHREwgR/hpi3xsCbnCcmz4mLCsZhmolcwmMEdeVbs21TvhuA7juZZsQv34lDoH9F2SLMyl2dFrYCx2ax39mrcjD01bKdwDy4ZtVNNWBPSHtk5XDOE/RxuGbVTTeiakbgX1+OiIex34ZG0r8ZLl5Cwz3CzkYj247Fx75XuPTKFS4d+QorKP5dC9djoFjIhlSBN2IOfbNyd5nwrJLZ/zViO4qcj8Kcx3woJzgmalhwvBf42Eo8a0r20TmNxSPtVScCRsppfGpVTTegWsoiPa9qtYjHyMB4sq9apkXs2JN1CvsI8zg2wWcXnOIK/lFVr0P1bwpqQsmqtoIWFATan8SxeWahay5vo21Csr7U+wglp1HtxFifKbSSCdULSWo//pW/0msLBPCu21Xn/As6E17HYJ6lM4me4YdO8asB5QsqqtYC3CCt97A5IB6uxF4sdei2Pv+NMH7udUvm+bQ9WHT4ivjHAdhr3Y1scdy8opKxaq4SnpdzSjzkxHh69W8PTL/J8gj/pH4p3CeGBmWz21nFHsZ4vb2fsv+It/cVMBOGYGOfy/ePbL4NG8Qspiw/K9tNCeFJwKM9mxyKmr5B22fI2nif2Kwx34Do8Rjg0jpnp2/vt0O4BP4U7pYZDL1bwoRh/I4R3UtCoR57N7ovcHYQr8R+80h7IWtQSkl5U7MM/DG6Vtkv8eHihmn+t1rP3F1OCo9LZf0IqkV7Go3U7/7WFQJ4V0/gnrjV4fy2L8RkhHMNSr9HNs2I3fo+7v3MhIvgCR/Ev/L/fDA0VMqO4hAfxof6RDCaE8BCexy0XKmdmsmIiJgG/PM86dWf242kpet7er9c81IyQOpKRHwQex0H1BmNRGtUX8V5ZtVbzrJiQWkhPSVXCIE7hzfYz3l3/SWNoIaRmd2Qu8IQUreqIWZHOO6/iuNRnvh+X17QnrYIFSdCz3R+bGglhrVd8nbS+iyFMz0qjOyn1w5pUBMv4A57oBIPGZUVZtVaieFzq3r+Lr2uaTkodzakNvH+i3ateSwUbqo8WqvnVsmot4Rd4YUDSHCFR+1vm2c4/Iyn02mKOEI5KHZbaibAZ4Ry+JI5WCJRV6ySewa8NLjQ3yiI+Kav5tXeMtPQuq9YZvC7lmt8ZfJ5pwqoU/VrdfzaOWoNoZ+yriL8i/BgXEXd2fR0emshqSKfX+8pq/nj3tU0T0qF94DqAu/BDKfk1Cbun8T7xcFnNf7b+4qYL6SbPihniTwk3SglxBrsHmJ2RetL/xnO9isgtFdIhz4opaZYKzEqf/KZFe9or7yz+Jwn4AO9I3c2euWosQjq0q4OLdZZbtLstZBmniEuEk3XOJWMVMkq2Vf92I3wD+h564jsbKuQAAAAASUVORK5CYII=") no-repeat center center;
        -webkit-border-radius:100%;
        -moz-border-radius:100%;
        border-radius:100%;
        opacity:.7;
        box-sizing:initial
    }
    .vne-alo-ph-circle-shake {
        -webkit-animation:vne-alo-circle-img-anim 1s infinite ease-in-out;
        -moz-animation:vne-alo-circle-img-anim 1s infinite ease-in-out;
        -ms-animation:vne-alo-circle-img-anim 1s infinite ease-in-out;
        -o-animation:vne-alo-circle-img-anim 1s infinite ease-in-out;
        animation:vne-alo-circle-img-anim 1s infinite ease-in-out;
        -webkit-transform-origin:50% 50%;
        -moz-transform-origin:50% 50%;
        -ms-transform-origin:50% 50%;
        -o-transform-origin:50% 50%;
        transform-origin:50% 50%
    }
    .vne-alo-phone.vne-alo-active .vne-alo-ph-img-circle {
        -webkit-animation:vne-alo-circle-img-anim 1s infinite ease-in-out !important;
        -moz-animation:vne-alo-circle-img-anim 1s infinite ease-in-out !important;
        -ms-animation:vne-alo-circle-img-anim 1s infinite ease-in-out !important;
        -o-animation:vne-alo-circle-img-anim 1s infinite ease-in-out !important;
        animation:vne-alo-circle-img-anim 1s infinite ease-in-out !important
    }
    .vne-alo-phone.vne-alo-static .vne-alo-ph-img-circle {
        -webkit-animation:vne-alo-circle-img-anim 0s infinite ease-in-out !important;
        -moz-animation:vne-alo-circle-img-anim 0s infinite ease-in-out !important;
        -ms-animation:vne-alo-circle-img-anim 0s infinite ease-in-out !important;
        -o-animation:vne-alo-circle-img-anim 0s infinite ease-in-out !important;
        animation:vne-alo-circle-img-anim 0s infinite ease-in-out !important
    }
    .vne-alo-phone.vne-alo-hover .vne-alo-ph-img-circle,.vne-alo-phone:hover .vne-alo-ph-img-circle {
        background-color:#00aff2
    }
    .vne-alo-phone.vne-alo-green.vne-alo-hover .vne-alo-ph-img-circle,.vne-alo-phone.vne-alo-green:hover .vne-alo-ph-img-circle { background-color:#75eb50;
        background-color:#75eb50;
    }
    .vne-alo-phone.vne-alo-yellow.vne-alo-hover .vne-alo-ph-img-circle,.vne-alo-phone.vne-alo-yellow:hover .vne-alo-ph-img-circle {
        background-color:#75eb50;
        background-color:#75eb50;
    }
    .vne-alo-phone.vne-alo-green .vne-alo-ph-img-circle {
        background-color:#00aff2;
        background-color:#00aff2;
    }
    .vne-alo-phone.vne-alo-yellow .vne-alo-ph-img-circle {
        background-color:#00aff0;
    }
    .vne-alo-phone.vne-alo-gray.vne-alo-hover .vne-alo-ph-img-circle,.vne-alo-phone.vne-alo-gray:hover .vne-alo-ph-img-circle { background-color:#ccc
    }
    .vne-alo-phone.vne-alo-gray .vne-alo-ph-img-circle {
        background-color:#75eb50
    }
    @-moz-keyframes vne-alo-circle-anim {
        0% {
            -moz-transform:rotate(0) scale(.5) skew(1 deg);
            opacity: .1;
            -moz-opacity: .1;
            -webkit-opacity: .1;
            -o-opacity: .1
        }

        30%
        {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5;
            -moz-opacity: .5
        ;
            -webkit-opacity: .5
        ;
            -o-opacity: .5
        }
        100%{
            -moz-transform: rotate(0) scale(1) skew(1deg);
            opacity: .6;
            -moz-opacity: .6;
            -webkit-opacity: .6;
            -o-opacity: .1
        }

    }
    @-webkit-keyframes vne-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(.5) skew(1deg);
            -webkit-opacity: .1
        }
        30% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            -webkit-opacity: .5
        }
        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: .1
        }

    }

    @-o-keyframes vne-alo-circle-anim {
        0% {
            -o-transform: rotate(0) kscale(.5) skew(1deg);
            -o-opacity: .1
        }
        30% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            -o-opacity: .5
        }
        100% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            -o-opacity: .1
        }

    }

    @-moz-keyframes vne-alo-circle-fill-anim {
        0% {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
        50% {
            -moz-transform: rotate(0) -moz-scale(1) skew(1deg);
            opacity: .2
        }
        100% {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

    }

    @-webkit-keyframes vne-alo-circle-fill-anim {
        0% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }
        100% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

    }

    @-o-keyframes vne-alo-circle-fill-anim {
        0% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }
        50% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            opacity: .2
        }
        100% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .2
        }

    }

    @-moz-keyframes vne-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            -moz-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            -moz-transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            -moz-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            -moz-transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            -moz-transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            -moz-transform: rotate(0) scale(1) skew(1deg)
        }

    }

    @-webkit-keyframes vne-alo-circle-img-anim {
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg)
        }

    }

    @-o-keyframes vne-alo-circle-img-anim {
        0% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }
        10% {
            -o-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        20% {
            -o-transform: rotate(25deg) scale(1) skew(1deg)
        }
        30% {
            -o-transform: rotate(-25deg) scale(1) skew(1deg)
        }
        40% {
            -o-transform: rotate(25deg) scale(1) skew(1deg)
        }
        50% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }
        100% {
            -o-transform: rotate(0) scale(1) skew(1deg)
        }

    }

    #stopwatch {
        position: absolute;
        top: 60px;
        left: 60px;
        box-sizing: initial;
        display: none
    }

    .vne-alo-ph-circle-time {
        width: 130px;
        position: absolute;
        background-color: #fff;
        top: 50%;
        left: 25px;
        margin-top: -12px;
        z-index: 0;
        border-radius: 15px;
        text-align: right;
        padding: 6px 10px;
        font-family: 'Open Sans';
        font-size: .7em;
        box-sizing: initial;
        height: 20px;
        display: none
    }

    .vne-alo-phone.vne-alo-ph-extension.external-site .vne-alo-ph-circle-time {
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.6)
    }

    .vne-alo-phone.vne-alo-ph-extension.external-site .vne-alo-ph-img-circle {
        opacity: 1
    }

    .vne-alo-phone.vne-alo-ph-extension.external-site .vne-alo-ph-circle-fill, .vne-alo-phone.vne-alo-ph-extension.external-site .vne-alo-ph-circle {
        display: none
    }

    #vne-alo-external-site-favicon {
        float: left;
        width: 20px
    }

    #vne-alo-external-site-counter {
        line-height: 19px
    }

    @-moz-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }

    }

    @-webkit-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }

    }

    @-o-keyframes fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }

    }

    @keyframes    fadeInRight {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            -ms-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            -ms-transform: none;
            transform: none
        }

    }


    #vne-alo-wrapper {
        position: fixed;
        width: 100%;
        bottom: 0;
        top: 0;
        left: 0;
        z-index: 99999999999 !important;
        overflow: visible;
        display: none;
        color: #383838;
    }

    #vne-alo-wrapper .vne-alo-overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        background-image: url("data:image/png; base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlOZyTXzhgAAAApJREFUCB1jYAAAAAIAAc/INeUAAAAASUVORK5CYII=");
        top: 0;
        left: 0;
        z-index: 200000
    }

    #vne-alo-wrapper .vne-alo-table {
        display: table;
        width: 100%;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 999999;
    }

    #vne-alo-wrapper .vne-alo-cell {
        display: table-cell;
        vertical-align: middle;
        text-align: center
    }

    #vne-alo-wrapper .vne-alo-popup-close {
        -webkit-border-radius: 2px !important;
        -moz-border-radius: 2px !important;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        position: absolute !important;
        right: -15px !important;
        top: -15px !important;
        height: 30px !important;
        width: 30px !important;
        background-image: url("data:image/png; base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjRGMTI2QTcxNDBFMTFFNUFENEZCRDVFQ0JDQjQyQzIiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjRGMTI2QTYxNDBFMTFFNUFENEZCRDVFQ0JDQjQyQzIiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVmYzc3OTY1LWUxNWUtNGU0Ni04ODFjLTBlOTQ3YjBmMzBmNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5iCEbHAAABl0lEQVR42sSXS07DMBCGnSKyDorEAVjACTgCIEVlXU5R9QjlCk3VAzTrLhMJ2NIVJ2DDuo9EsKUszEw0kaIQbI+bxy/9UhRP5pMcjz12pJTCQKfgO/AN+Bp8AfZo7Av8AX4Dv4CfwD/ajAhW2ANPwTtprj1946lyq6AP4I2014ZyGINPwAvZnBaUUwnGgJVsXqsqvAoOZXua/wceyfY1KngOlROWxjv4XLSrHfgKS3BALyYdQAUxJkUdu7o6jeNYZlmmnUeMwViNkOUieKiLTNNURlGkhOPYcrnMYw00RPDMJFIFZ0JRIYJfTaPr4BZQ1Fow9+EcgCAEWkLz/4zl9A1rzOUsTQCKJEny5yAIhO/73NV9GNjUhOM4tc8scae6PL3laedONYLXNtC6f85dXDNb6BHw0GgDKaCqxEz4fbFlpk1smQjnbJmCeqSuNO3jWNyDL8vHIrao4w6OxTGx/rQ+8z5an16bvd7a22pDvz0CuOU29NUrzKOuzqvlTN8orzAO89J2W7q0ndHYZ+nS9kw+6BL+CjAAEvDTBJC9qhAAAAAASUVORK5CYII=");
        background-position: center center;
        background-repeat: no-repeat;
        cursor: pointer !important;
        -webkit-transition: .3s ease-out !important;
        -moz-transition: .3s ease-out !important;
        -o-transition: .3s ease-out !important;
        transition: .3s ease-out !important;

    }

    #vne-alo-wrapper .vne-alo-popup-close:hover {
        opacity: .6 !important
    }

    #vne-alo-wrapper .vne-alo-popup {
        width: auto !important;
        transform-origin: 0 0;
        transition-timing-function: step-start;
        transition-duration: 0s;
        -webkit-transition-duration: 0s;
        -o-transition-duration: 0s;
        -moz-transition-duration: 0s;
        -ms-transition-duration: 0s;
        display: inline-block;
        position: relative;
        -webkit-border-radius: 16px;
        -moz-border-radius: 16px;
        border-radius: 16px;
        background-image: url("data:image/png; base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wYZCyIUPNCUUwAAAA1JREFUCNdj+P///2cACe8D8SyfS4EAAAAASUVORK5CYII=");
        margin: 0 auto;
        z-index: 200001;
        text-align: center;
        padding: 60px 75px;

    }

    #vne-alo-wrapper .vne-alo-popup h3 {
        font-size: 24px;
        margin: 0 0 40px;
        font-family: 'Open Sans';
        font-weight: 300;
        white-space: nowrap;
        line-height: 1.8;
        letter-spacing: 0;
        color: #383837 !important;
        width: auto !important;
        border: none
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-submit-moz-focus-inner {
        border: 0
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-submitavtive, #vne-alo-wrapper .vne-alo-popup .vne-alo-submitvisited {
        outline: none !important
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-submit {
        border: none;
        border-width: 0;
        padding: 20px 40px;
        background-color: #333;
        -webkit-border-radius: 68px;
        -moz-border-radius: 68px;
        -webkit-border-radius: 68px;
        -moz-border-radius: 68px;
        border-radius: 68px;
        font-family: "Open Sans", Arial, Helvetica, sans-serif;
        font-size: 20px;
        color: #fff;
        cursor: pointer;
        outline: none !important;
        letter-spacing: 0;
        font-weight: normal;
        height: auto;

    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-submit:hover {
        background-color: #00aff2
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-input-wrapper input[type="text"].valid-invalid {
        color: #ff496b
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-input-wrapper input[type="text"]:focus {
        outline: 0
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-input-wrapper input[type="text"]::-webkit-input-placeholder {
        color: #d1d1d1
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-input-wrapper input[type="text"]::-moz-placeholder {
        color: #d1d1d1
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-input-wrapper input[type="text"]::-ms-input-placeholder {
        color: #d1d1d1
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-input-wrapper input[type="text"]::-moz-placeholder {
        color: #d1d1d1
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-input-wrapper .label, #vne-alo-wrapper .vne-alo-popup .vne-alo-input-wrapper .label + .input {
        float: left;
        width: 49%
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-message {
        padding: 18px 0 13px 0;
        text-align: center;
        clear: both;
        font-size: 14px
    }

    #vne-alo-wrapper .vne-alo-popup input[type=text].vne-alo-number {
        height: auto;
        box-sizing: content-box;
        color: #00bed5;
        font-size: 28px;
        font-weight: normal;
        background-color: transparent;
        border: none;
        border-width: 0;
        display: inline-block;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        border-bottom: #00bed5 solid 1px;
        padding: 0;
        padding-bottom: 0px;
        margin: 0 auto;
        width: 221px;
        outline: none;
        text-align: center;
    }

    #vne-alo-wrapper .vne-alo-popup input[type=text].vne-alo-number:focus, #vne-alo-wrapper .vne-alo-popup input[type=text].vne-alo-number:active, #vne-alo-wrapper .vne-alo-popup input[type=text].vne-alo-number:hover {
        outline: none;
        box-shadow: none
    }

    #vne-alo-wrapper .vne-alo-popup input[type=text].vne-alo-number::-ms-clear {
        display: none;
        width: 0;
        height: 0
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-request-time {
        font-family: "Open Sans", Arial, Helvetica, sans-serif;
        padding: 6px 12px;
        font-size: 18px;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        height: auto;
        width: auto;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-powered {
        font-size: .8em;
        position: absolute;
        bottom: 10px;
        right: 15px;
        font-family: 'Open Sans';

    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-powered a {
        font-weight: bold;
        color: #383838;
        text-decoration: none;

    }

    #vne-alo-wrapper .vne-alo-popup .vne-alo-powered a:hover {
        text-decoration: underline
    }

    #vne-alo-wrapper.night-mode {
        color: #fff;

    }

    #vne-alo-wrapper.night-mode .vne-alo-popup-close {
        background-image: url("data:image/png; base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUY2REUyNDQxNDE2MTFFNThBNEJENTVFNDA2QjFFOUEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUY2REUyNDMxNDE2MTFFNThBNEJENTVFNDA2QjFFOUEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVmYzc3OTY1LWUxNWUtNGU0Ni04ODFjLTBlOTQ3YjBmMzBmNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz56uyuzAAABfUlEQVR42sSXvU7DMBDHYxCdw8IDMMCWTDwCdClznLcJr9BUfYs+ALDSqXMisTD3S4K1MBx3kS1ZVuqvNslf+kuRfL5f5OTsMwOAyEFX6DH6Ef2AvkXHYuwH/YVeod/Rr+g/a0YCGxyjC/QW3LUTc2JTbhOUo9cQrrXI4Qy+RM/hfJqLnEYwBSzg/FrocB1cQneaHQNn0L0yyWOinKg0PtE3Ubfaou+bEhRvUEB/KuRSj2x1muc51HVtzUgxnHNbGLFGBJ7YIquqgjRNjXAaS5KkiXXQhMBTl0gT3BNKKgn84RrdBg+AkpaR5z7cAAhEwEBo850JfPCdJeGBUNLhIqQYGWOtz17yXWp1edVlD1nqZQi07Zv7/lzTUOgJ8NJpA5FQU2JP+LPcMvfGIyXLnBISnGJdt8xBDom+j8Ud+k49FvtqBPix1mc2ROszaLM3WHurN/SbE4Ab34Zev8K82Opc017MMV5hmOel7Um5tF2LsW/l0vYm/GtL+C/AAAHy+OD95QLeAAAAAElFTkSuQmCC")
    }

    #vne-alo-wrapper.night-mode .vne-alo-popup {
        background-image: url("data:image/png; base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wYZCyAMHYpuhwAAAA1JREFUCNdjMDY2/gwAAsMBjX/tf+YAAAAASUVORK5CYII=");

    }

    #vne-alo-wrapper.night-mode .vne-alo-popup h3 {
        color: #fff !important;
        margin-bottom: 15px
    }

    #vne-alo-wrapper.night-mode .vne-alo-popup .vne-alo-input-wrapper .input {
        padding: 0 13px
    }

    #vne-alo-wrapper.night-mode .vne-alo-popup .vne-alo-input-wrapper label {
        color: #616161;
        font-size: 18px;
        height: 28px;
        line-height: 28px;
        padding-right: 15px
    }

    #vne-alo-wrapper.night-mode .vne-alo-popup .vne-alo-input-wrapper input[type="text"]::-webkit-input-placeholder {
        color: #60615f
    }

    #vne-alo-wrapper.night-mode .vne-alo-popup .vne-alo-input-wrapper input[type="text"]::-moz-placeholder {
        color: #60615f
    }

    #vne-alo-wrapper.night-mode .vne-alo-popup .vne-alo-input-wrapper input[type="text"]::-ms-input-placeholder {
        color: #60615f
    }

    #vne-alo-wrapper.night-mode .vne-alo-popup .vne-alo-input-wrapper input[type="text"]::-moz-placeholder {
        color: #60615f
    }

    #vne-alo-wrapper.night-mode .vne-alo-popup .vne-alo-powered a {
        color: #fff
    }

    #vne-alo-wrapper.night-mode input[type="text"].vne-alo-number {
        border: #00bed5 solid 1px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        padding: 13px 31px
    }

    #vne-alo-wrapper.night-mode .vne-alo-message {
        padding-bottom: 0
    }

    #vne-alo-wrapper.night-mode h3 {
        font-size: 23px
    }

    #vne-alo-wrapper.night-mode .vne-alo-request-time {
        color: #fff;
        background-color: #515350;
        border: 1px solid #606260
    }

    #vne-alo-wrapper.night-mode .vne-alo-form .vne-alo-select-wrapper {
        margin-bottom: 35px
    }

    #vne-alo-wrapper.night-mode .vne-alo-submit {
        background-color: #00bed5
    }

    .vne-alo-blur {
        -webkit-filter: blur(3px);
        -ms-filter: blur(3px);
        -moz-filter: blur(3px);
        -o-filter: blur(3px);
        filter: url("data:image/svg+xml; base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxmaWx0ZXIgaWQ9ImJsdXIiPjxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjMiLz48L2ZpbHRlcj48L3N2Zz4jYmx1cg==#blur")
    }

    #vne-countdown {
        padding-top: 20px;
        font-family: "Open Sans", Arial, Helvetica, sans-serif;
        font-size: 28px;
        font-weight: 300
    }

    .vne-alo-form-preview {
        position: absolute;
        top: -28px;
        left: 12px;

    }

    .vne-alo-form-preview span {
        font-family: "Open Sans", Arial, Helvetica, sans-serif;
        color: #c9c9c9;
        font-size: .9em
    }

    .vne-alo-form-preview .vne-alo-eye {
        background-image: url("/web/20181231033258im_/http://vietnamevents.com/");
        width: 20px;
        height: 14px;
        display: inline-block;
        position: relative;
        top: 2px;
        margin-right: 8px
    }

    #vne-alo-wrapper.alo-mobile .vne-alo-cell {
        background-color: #fff;
        z-index: 9999999;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%
    }

    #vne-alo-wrapper.alo-mobile .vne-alo-header {
        padding-bottom: 30px;
        position: relative
    }

    #vne-alo-wrapper.alo-mobile .vne-alo-popup-close {
        width: 50px !important;
        height: 19px !important;
        position: absolute !important;
        top: -30px !important;
        left: 50% !important;
        margin-left: -15px !important;
        background-image: none !important;

    }

    #vne-alo-wrapper.alo-mobile .vne-alo-popup-close .arrow {
        margin-top: 7px;
        position: relative;
        text-align: center !important;
        margin-bottom: 6px !important;
        height: 4px;
        width: 100%;

    }

    #vne-alo-wrapper.alo-mobile .vne-alo-popup-close .arrow:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 50%;
        background: #333;
        -webkit-transform: skew(0, 30deg);
        -moz-transform: skew(0, 30deg);
        -ms-transform: skew(0, 30deg);
        -o-transform: skew(0, 30deg);
        transform: skew(0, 30deg);
        -webkit-transition: transform 1s;
        transition: transform 1s
    }

    #vne-alo-wrapper.alo-mobile .vne-alo-popup-close .arrow:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 50%;
        background: #333;
        -webkit-transform: skew(0, -30deg);
        -moz-transform: skew(0, -30deg);
        -ms-transform: skew(0, -30deg);
        -o-transform: skew(0, -30deg);
        transform: skew(0, -30deg)
    }

    #vne-alo-wrapper.alo-mobile.night-mode .vne-alo-popup {
        background-image: none
    }

    #vne-alo-wrapper.alo-mobile.night-mode .vne-alo-cell {
        background-image: url("data:image/png; base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wYZCyAMHYpuhwAAAA1JREFUCNdjMDY2/gwAAsMBjX/tf+YAAAAASUVORK5CYII=")
    }

    .valid-invalid-message {
        font-size: 13px;
        color: #ff496b
    }

    .valid-invalid-message:before {
        content: "* "
    }
    .holdingbox-1{
        top: 450px;
        left: 300px;
    }
    .mfb-component__button--child .item{
        width: 35px;
        margin: 0px;
    }
</style>
<ul class="holdingbox-1 mfb-component--bl mfb-zoomin" data-mfb-toggle="hover">
<li class="mfb-component__wrap">
<div class="vne-alo-phone-wrap vne-alo-phone vne-alo-yellow vne-alo-show" id="vne-alo-phoneIcon" style="transform: scale(1, 1); transform-origin: left top 0px;">
<div class="vne-alo-ph-circle-time">
<img id="vne-alo-external-site-favicon" src="">
<span id="vne-alo-external-site-counter"></span>
</div>
<canvas id="stopwatch"></canvas>
<div class="vne-alo-ph-circle"></div>
<div class="vne-alo-ph-circle-fill"></div>
 <div class="vne-alo-ph-img-circle vne-alo-ph-circle-shake" title="Hover to Contact"></div>
<div class="vne-alo-ph-circle-close"></div>
</div>
<ul class="mfb-component__list">
<li>
<a data-mfb-label="Hotline" href="tel:0913311911" class="mfb-component__button--child"><img src="https://iwamsn.ac.vn/uploads/callback.png" class="item"></a>
</li>
<li>
<a data-mfb-label="Hotline" href="tel:0913311911" class="mfb-component__button--child"><img src="https://iwamsn.ac.vn/uploads/hotline-icon.png" class="item"></a>
</li>
<li>
<a target="_blank" data-mfb-label="Contact Whatsapp" href="https://api.whatsapp.com/send?phone=0913311911" class="mfb-component__button--child">
<img src="https://iwamsn.ac.vn/uploads/phone.png" class="item"></a>
</li>
<li>
<a target="_blank" data-mfb-label="Contact Viber" href="viber://chat?number=0913311911" class="mfb-component__button--child"><img src="https://iwamsn.ac.vn/uploads/viber.png" class="item"></a>
</li>
<li>
<a target="_blank" data-mfb-label="Contact Zalo" href="http://zalo.me/0913311911" class="mfb-component__button--child"><img src="https://iwamsn.ac.vn/uploads/zalo.png" class="item"></a>
</li>
<li>
<a target="_blank" data-mfb-label="Contact Skype" href="skype:0913311911?chat" class="mfb-component__button--child"><img src="https://iwamsn.ac.vn/uploads/skype.png" class="item"></a>
</li>
</ul>
</li>
</ul>




@include('Layout::parts.login-register-modal')
@include('Layout::parts.chat')
@if(Auth::id())
    @include('Media::browser')
@endif
<link rel="stylesheet" href="{{asset('libs/flags/css/flag-icon.min.css')}}" >

{!! \App\Helpers\Assets::css(true) !!}

{{--Lazy Load--}}
<script src="{{asset('libs/lazy-load/intersection-observer.js')}}"></script>
<script async src="{{asset('libs/lazy-load/lazyload.min.js')}}"></script>
<script>
    // Set the options to make LazyLoad self-initialize
    window.lazyLoadOptions = {
        elements_selector: ".lazy",
        // ... more custom settings?
    };

    // Listen to the initialization event and get the instance of LazyLoad
    window.addEventListener('LazyLoad::Initialized', function (event) {
        window.lazyLoadInstance = event.detail.instance;
    }, false);


</script>
<script src="{{ asset('libs/lodash.min.js') }}"></script>
<script src="{{ asset('libs/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('libs/vue/vue.js') }}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/bootbox/bootbox.min.js') }}"></script>
@if(Auth::id())
    <script src="{{ asset('module/media/js/browser.js?_ver='.config('app.version')) }}"></script>
@endif
<script src="{{ asset('libs/carousel-2/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset("libs/daterange/moment.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("libs/daterange/daterangepicker.min.js") }}"></script>
<script src="{{ asset('libs/select2/js/select2.min.js') }}" ></script>
<script src="{{ asset('js/functions.js?_ver='.config('app.version')) }}"></script>

@if(setting_item('inbox_enable'))
    <script src="{{ asset('module/core/js/chat-engine.js?_ver='.config('app.version')) }}"></script>
@endif
<script src="{{ asset('js/home.js?_ver='.config('app.version')) }}"></script>

@if(!empty($is_user_page))
    <script src="{{ asset('module/user/js/user.js?_ver='.config('app.version')) }}"></script>
@endif

{!! \App\Helpers\Assets::js(true) !!}

@yield('footer')

@php \App\Helpers\ReCaptchaEngine::scripts() @endphp