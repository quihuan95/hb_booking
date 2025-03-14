<?php
use Illuminate\Support\Facades\Route;
//Contact
Route::match(['get','post'],'/contact','ContactController@index');
Route::match(['get','post'],'/logout','ContactController@logout');
Route::match(['get','post'],'/dr','ContactController@dr');
Route::match(['get','post'],'/partnership/logout','ContactController@partner_logout');
Route::match(['get','post'],'/parter-complate/{idhotel}','ContactController@parter_complate')->name('parter.complate');
Route::match(['get','post'],'/approval-hotel/{idhotel}','ContactController@approval_hotel')->name('approval.hotel');
Route::match(['get','post'],'/partnership/room/delete/{hotel_id}/{room_id}','ContactController@partner_room_delete')->name('room.delete.partnership');
Route::match(['get','post'],'/partnership/public/room/delete/{hotel_id}/{room_id}','ContactController@partner_public_room_delete')->name('room.public.delete.partnership');
Route::match(['get','post'],'/partnership/public/gallery/delete/{hotel_id}/{id}/{s}','ContactController@delPublicGallery')->name('gallery.public.delete.partnership');
Route::match(['get','post'],'/partnership/calendar/update-room','ContactController@update_room_partnership_calendar')->name('room.update.partnership.calendar');
//Route::match(['post'],'/partnership/calendar/update-room','ContactController@update_room_partnership_calendar')->name('room.update.partnership.calendar');
Route::match(['post'],'/contact/store','ContactController@store');
Route::match(['post'],'/booking-hotel/room','ContactController@booking_room')->name('booking.room');
Route::match(['post'],'/voucher-du-lich/gui-yeu-cau','ContactController@voucher_du_lich_gui_yeu_cau');
Route::match(['post'],'/dang-nhap','ContactController@dang_nhap');
Route::match(['post'],'/dang-ky','ContactController@dang_ky');
Route::match(['post'],'/dang-ky-partnership','ContactController@dang_ky_partnership')->name('register.partnership');
Route::match(['post'],'/partner-setpass','ContactController@partner_setpass')->name('partner.setpass');
Route::match(['post'],'/partner/login','ContactController@partner_login');
Route::match(['post'],'/partnership/create-hotel','ContactController@create_hotel_partnership')->name('hotel.create.partnership');
Route::match(['post'],'/partnership/update-hotel','ContactController@update_hotel_partnership')->name('hotel.update.partnership');
Route::match(['post'],'/partnership/create-room','ContactController@create_room_partnership')->name('room.create.partnership');
Route::match(['post'],'/partnership/update-room','ContactController@update_room_partnership')->name('room.update.partnership');
Route::match(['post'],'/partnership/create-room-calendars','ContactController@create_room_calendars')->name('room.create.calendars');
Route::match(['post'],'/partnership/chinh-sach','ContactController@chinh_sach')->name('partnership.update.chinhsach');
Route::match(['post'],'/ajaxupload/action','ContactController@action')->name('ajaxupload.action');
Route::match(['post'],'/ajaxupload/avatar','ContactController@avatar')->name('ajaxupload.avatar');
Route::match(['post'],'/ajaxupload/doGallery','ContactController@doGallery')->name('ajaxupload.doGallery');

