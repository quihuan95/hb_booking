<?php
use \Illuminate\Support\Facades\Route;
Route::group(['prefix'=>'payout'],function(){
    Route::get('/','PayoutController@index')->name('vendor.admin.payout.index');   
    Route::get('/bulkEdit','PayoutController@bulkEdit')->name('vendor.admin.payout.bulkEdit');
});
 
 Route::group(['prefix'=>'request'],function(){
     Route::get('/','RequestController@index')->name('vendor.admin.request.index');
      Route::get('/bulkEdit','RequestController@bulkEdit')->name('vendor.admin.request.bulkEdit');
});

 