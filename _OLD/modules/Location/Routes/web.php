<?php
use Illuminate\Support\Facades\Route;

// Location
Route::group(['prefix'=>config('location.location_route_prefix')],function(){
   // Route::get('/{slug}','LocationController@detail')->name("location.detail");;// Detail
    
    Route::get('/{slug}','\Modules\Hotel\Controllers\HotelController@index')->name('hotel.search.slug'); // Search
    Route::get('/search/searchForSelect2','LocationController@searchForSelect2')->name("location.searchForSelect");;// Search for select 2

});