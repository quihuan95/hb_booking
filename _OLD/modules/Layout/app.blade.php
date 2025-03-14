<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{$html_class ?? ''}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{url('/')}}"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        $favicon = setting_item('site_favicon');
    @endphp
    @if($favicon)
        @php
            $file = (new \Modules\Media\Models\MediaFile())->findById($favicon);
        @endphp
        @if(!empty($file))
            <link rel="icon" type="{{$file['file_type']}}" href="{{asset('uploads/'.$file['file_path'])}}" />
        @else:
            <link rel="icon" type="image/png" href="{{url('images/favicon.png')}}" />
        @endif
    @endif

    @include('Layout::parts.seo-meta')
    <link href="{{ asset('libs/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css?v=1.2') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/daterange/daterangepicker.css") }}" >
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,400i,500,500i,700,700i,900&amp;subset=vietnamese" rel="stylesheet">
    {!! \App\Helpers\Assets::css() !!}
    {!! \App\Helpers\Assets::js() !!}
    <style>
	    .bravo-list-locations{
		    margin-top: 30px !important;
	    }
	    .bravo_wrap .bravo_footer .main-footer .nav-footer .title:before{
		    width: 100%;
	    }
	    .bravo_wrap .bravo_footer .main-footer .nav-footer .title{
		    font-size: 1.3em;
	    }
	    .mailchimp{
		    display: none !important;
	    }
        .oldprice{ color: #000;font-size: 15px; }
        .oldprice:before{ transform: rotate(-10deg);
            content: "";
            position: absolute;
            right: 0;
            top: 25%;
            width: 30%;
            border-top: 2px solid #e12d2d; }
	 </style>
    <script>
        var bookingCore = {
            url:'https://hoabinhbooking.com/vi',
            url_root:'https://hoabinhbooking.com',
            booking_decimals:{{(int)setting_item('currency_no_decimal',2)}},
            thousand_separator:'{{setting_item('currency_thousand')}}',
            decimal_separator:'{{setting_item('currency_decimal')}}',
            currency_position:'{{setting_item('currency_format')}}',
            currency_symbol:'{{currency_symbol()}}',
            date_format:'{{get_moment_date_format()}}',
            map_provider:'{{setting_item('map_provider')}}',
            map_gmap_key:'{{setting_item('map_gmap_key')}}',
            routes:{
                login:'https://hoabinhbooking.com/vi/login',
                register:'https://hoabinhbooking.com/vi/register',
            },
            currentUser:{{(int)Auth::id()}}
        };
        var i18n = {
            warning:"{{__("Warning")}}",
            success:"{{__("Success")}}",
        };
        /*CODE OLD MAIN*/
        /*var bookingCore = {
            url:'{{url( app_get_locale() )}}',
            url_root:'{{ url('') }}',
            booking_decimals:{{(int)setting_item('currency_no_decimal',2)}},
            thousand_separator:'{{setting_item('currency_thousand')}}',
            decimal_separator:'{{setting_item('currency_decimal')}}',
            currency_position:'{{setting_item('currency_format')}}',
            currency_symbol:'{{currency_symbol()}}',
            date_format:'{{get_moment_date_format()}}',
            map_provider:'{{setting_item('map_provider')}}',
            map_gmap_key:'{{setting_item('map_gmap_key')}}',
            routes:{
                login:'{{route('auth.login')}}',
                register:'{{route('auth.register')}}',
            },
            currentUser:{{(int)Auth::id()}}
        };
        var i18n = {
            warning:"{{__("Warning")}}",
            success:"{{__("Success")}}",
        };*/
    </script>
    <!-- Styles -->
    @yield('head')
    {{--Custom Style--}}
    @include('Layout::parts.custom-css')
    <link href="{{ asset('libs/carousel-2/owl.carousel.css') }}" rel="stylesheet">
    <style type="text/css">
        .over{ float: left;position: fixed;top: 0px;left: 0px;width: 0;height: 0;background-color: #000;opacity: 0.4;z-index: 99999; }
    </style>
</head>
<body class="frontend-page {{$body_class ?? ''}}">
    <div class="over"></div>
	<style>
		.bravo_wrap .bravo_header .content .header-left .bravo-menu ul li>.menu-dropdown{
			min-width: 260px;
		}
		.bravo_wrap .bravo_header .content .header-left .bravo-menu ul li a {
			padding: 35px 30px;
		}
	</style>
    {!! setting_item('body_scripts') !!}
    {!! setting_item_with_lang('body_scripts') !!}
    <div class="bravo_wrap">
{{--        @include('layouts.parts.adminbar')--}}
        @include('Layout::parts.topbar')
        @include('Layout::parts.header')
        @yield('content')
        @include('Layout::parts.footer')

    </div>
    {!! setting_item('footer_scripts') !!}
    {!! setting_item_with_lang('footer_scripts') !!}

    <script>
		$('.bravo-form-register-vendor [type=submit]').click(function(e) {
    e.preventDefault();
    let form = $(this).closest('.bravo-form-register-vendor');
    var url = form.attr('action');
    $.ajax({
        'url': url,
        'data': {
            'email': form.find('input[name=email]').val(),
            'fullname': form.find('input[name=fullname]').val(),
            'phone': form.find('input[name=phone]').val(),
            'request': form.find('input[name=request]').val()
        },
        'type': 'POST',
        beforeSend: function() {
            form.find('.error').hide();
            form.find('.icon-loading').css("display", 'inline-block');
            form.find('.message-error').hide();
        },
        success: function(data) {
	        console.log('success data', data);
            form.find('.icon-loading').hide();
            if (data.error === true) {
                if (data.messages !== undefined) {
                    for (var item in data.messages) {
                        var msg = data.messages[item];
                        form.find('.error-' + item).show().text(msg[0]);
                    }
                }
                if (data.messages.message_error !== undefined) {
                    form.find('.message-error').show().html('<div class="alert alert-danger">' + data.messages.message_error[0] + '</div>');
                }
            }
             console.log(data.status);
             console.log(data.message);
            if (data.status) {
                if (data.message) {

                    form.find('.message-error').show().html('<div class="alert alert-success">' + data.message + '</div>');
                }
                if (typeof data.redirect !== 'undefined') {
                    window.setTimeout(function() {
                        window.location.href = data.redirect;
                    }, 5000);
                    return;
                }
            }
            if (data.redirect) {
                window.location.href = data.redirect;
                return;
            }
        },
        error: function(e) {
	        console.log('error e', e);
            form.find('.icon-loading').hide();
            if (typeof e.responseJSON !== "undefined" && typeof e.responseJSON.message != 'undefined') {
                form.find('.message-error').show().html('<div class="alert alert-danger">' + e.responseJSON.message + '</div>');
            }
        }
    });
})
	</script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://hoabinhbooking.com/public/libs/calendar/js/t-datepicker.min.js"></script>

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
