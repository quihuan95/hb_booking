@extends('layouts.app')
@section('head')
    <link href="{{ asset('module/hotel/css/hotel.css?_ver='.config('app.version')) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("libs/ion_rangeslider/css/ion.rangeSlider.min.css") }}"/>
@endsection
@section('content')
    <div class="bravo_search_hotel">
	     	 @php
	     	 		$banner = get_file_url(setting_item("hotel_page_search_banner"),'full');
	         	    $options = [];
                    $location_name = '';
					if(!empty(request()->slug)){
						$options = ['slug' => request()->slug];						
						}
					if(!empty($location_id = Request::query('location_id'))){
						$options = ['id' => $location_id];							 
						}
					
					$location = \Modules\Location\Models\Location::where($options)->first();
					if(!empty($options) && count($options) > 0){
						$location_name =  'tại ' . $location->name;
					}
				
				if($location->banner_image_id){	
				$banner = get_file_url($location->banner_image_id,'medium',['class'=>'img-responsive','alt'=>$location_name]);
					}
                    @endphp
        <div class="bravo_banner" @if($banner) style="background-image: url({{ $banner }})"  @endif >
	         	 
            <div class="container">
                <h1>
                    <!-- {{setting_item_with_lang("hotel_page_search_title")}} -->
                   
                   Khách sạn {{ $location_name }}
                </h1>
            </div>
        </div>
        
        <div class="container" style="margin-top:30px;">
            @include('Hotel::frontend.layouts.search.list-item')
        </div>
    </div>
@endsection

@section('footer')
    <script type="text/javascript" src="{{ asset("libs/ion_rangeslider/js/ion.rangeSlider.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset('module/hotel/js/hotel.js?_ver='.config('app.version')) }}"></script>
@endsection