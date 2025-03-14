@extends('layouts.app')
@section('head')
    <link href="{{ asset('module/hotel/css/hotel.css?_ver='.config('app.version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/fotorama/fotorama.css") }}"/>
@endsection
@section('content')
<style>
	.review-score{
		display: none;
	}
	.owner-info{
		display: none;
	}
	.date-wrapper{
		padding-left: 10px;
	}
	#hotel_price{
		text-align: right;
		font-size: 1.8em;
		color: red;
		top: 15px;
		position: relative;
		font-weight: bold;
	}
	.text-small{
		font-size: 14px !important;
		color: #000;
	}
</style>
<p style="margin:0px;padding:0px;">&nbsp;</p>
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-heading"></h1>
                <div class="sub-heading"></div>
                <div class="g-form-control">
                @include('Hotel::frontend.layouts.search.form-search2')
                </div>
            </div>
        </div>
    </div>
    <p style="margin:0px;padding:0px;">&nbsp;</p>
    <div class="bravo_detail_hotel">
        @include('Hotel::frontend.layouts.details.hotel-banner')
        <div class="bravo_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-9">
	                    @if (Session::has('success'))
						<div class="alert alert-success">
						<ul>
							<li style="list-style-type: none"><i class="fa fa-check"></i> {{ Session::get('success') }}</li>
						</ul>
    				</div>
						@endif

						@if (Session::has('error'))
						<div class="alert alert-error">
						<ul>
							<li>{{ Session::get('error') }}</li>
						</ul>
    				</div>
						@endif

                        @php $review_score = $row->review_data @endphp
                        @include('Hotel::frontend.layouts.details.hotel-detail')
                       <!-- @include('Hotel::frontend.layouts.details.hotel-review')-->
                    </div>
                    <div class="col-md-12 col-lg-3">
                        @include('Tour::frontend.layouts.details.vendor')
                        @include('Hotel::frontend.layouts.details.hotel-related-list')
                        <div class="g-all-attribute is_pc">
                            @include('Hotel::frontend.layouts.details.hotel-attributes')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('Hotel::frontend.layouts.details.hotel-form-book-mobile')
    </div>
@endsection

@section('footer')
    {!! App\Helpers\MapEngine::scripts() !!}
    <script>
        jQuery(function ($) {
            @if($row->map_lat && $row->map_lng)
            new BravoMapEngine('map_content', {
                disableScripts: true,
                fitBounds: true,
                center: [{{$row->map_lat}}, {{$row->map_lng}}],
                zoom:{{$row->map_zoom ?? "8"}},
                ready: function (engineMap) {
                    engineMap.addMarker([{{$row->map_lat}}, {{$row->map_lng}}], {
                        icon_options: {}
                    });
                }
            });
            @endif
        })
    </script>
    <script>
        var bravo_booking_data = {!! json_encode($booking_data) !!}
        var bravo_booking_i18n = {
			no_date_select:'{{__('Please select Start and End date')}}',
            no_guest_select:'{{__('Please select at least one guest')}}',
            load_dates_url:'{{route('space.vendor.availability.loadDates')}}'
        };
    </script>
    <script type="text/javascript" src="{{ asset("libs/ion_rangeslider/js/ion.rangeSlider.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("libs/fotorama/fotorama.js") }}"></script>
    <script type="text/javascript" src="{{ asset("libs/sticky/jquery.sticky.js") }}"></script>
    <script type="text/javascript" src="{{ asset('module/hotel/js/single-hotel.js?_ver='.config('app.version')) }}"></script>

<script>
	$(document).ready(function($){
		$(".check-in-render").text('Xin chọn ngày Checkin-out');
	});

	function showBookRoom(o){
		console.log($(o).attr('value'));
		var roomid = $(o).attr('value');
		$("#booking").modal();
		$("input[name='room_id']").val(roomid);
	}
</script>
@endsection
