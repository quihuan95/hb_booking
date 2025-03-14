<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/intro','LandingpageController@index');
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/install/check-db', 'HomeController@checkConnectDatabase');
Route::get('/update', 'HomeController@updateMigrate');
Route::get('/dat-phong-khach-san/{id_hotel}/{id_room}', 'HomeController@dat_phong_khach_san');
Route::get('/confirm/hotel/{id_book}', 'HomeController@confirm_dat_phong_khach_san');
Route::get('/test_functions', 'HomeController@test');
Route::get('/set-email', 'HomeController@set_email');
Route::get('/voucher-du-lich', 'HomeController@voucher_du_lich');
Route::get('/cho-thue-xe-tu-lai', 'HomeController@thue_xe');
Route::get('/partnership', 'HomeController@partnership');
Route::get('/partnership/login', 'HomeController@partner_login');
Route::get('/partnership/register', 'HomeController@register');
Route::get('/partnership/confirm', 'HomeController@partnership_confirm');
Route::get('/partnership/profile', 'HomeController@thong_tin_ca_nhan');
Route::get('/cmscpanel', 'HomeController@cmscpanel');
Route::get('/cmscpanel/createHotel', 'HomeController@createHotel');
Route::get('/cmscpanel/editHotel/{id}', 'HomeController@editHotel');
Route::get('/cmscpanel/public/hotel/{id}', 'HomeController@public_hotel')->name("public.hotel");
Route::get('/cmscpanel/hotel/room/load', 'HomeController@loadRoom')->name("load.room");
Route::get('/cmscpanel/reviewHotel/{id}', 'HomeController@reviewHotel');
Route::get('/cmscpanel/editRoom/{idhotel}/{idroom}', 'HomeController@editRoom');
Route::get('/confirm', 'HomeController@confirm');
Route::get('/signin', 'HomeController@signin');
Route::get('/signup', 'HomeController@signup');
//Backend
Route::group(['prefix'=>'rental'],function(){
	Route::get('/index', 'HomeController@rental_location');
});
//Login
Auth::routes();
//Custom User Login and Register
Route::post('register','\Modules\User\Controllers\UserController@userRegister')->name('auth.register');
Route::post('login','\Modules\User\Controllers\UserController@userLogin')->name('auth.login');
Route::post('logout','\Modules\User\Controllers\UserController@logout')->name('auth.logout');
// Social Login
Route::get('social-login/{provider}', 'Auth\LoginController@socialLogin');
Route::get('social-callback/{provider}', 'Auth\LoginController@socialCallBack');

// Logs
Route::get('admin/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware(['auth', 'dashboard','system_log_view']);
