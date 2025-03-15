<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::group(['prefix' => 'filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/', 'HomeController@index');
Route::get('/voucher-du-lich', 'HomeController@voucher_du_lich');
Route::get('/cho-thue-xe-tu-lai', 'HomeController@thue_xe');
Route::get('/khach-san', 'HomeController@khach_san')->name("khach.san");
Route::get('/partnership', 'HomeController@partnership')->name('home.partnership');
Route::get('/partnership/login', 'HomeController@partner_login_get')->name('partner.login');
Route::get('/partnership/register', 'HomeController@register')->name('partnership.register');
Route::get('/partnership/confirm', 'HomeController@partnership_confirm');
Route::get('/partnership/profile', 'HomeController@thong_tin_ca_nhan')->name('partnership.profile');
Route::get('/cmscpanel', 'HomeController@cmscpanel')->name('home.cmscpanel');
Route::get('/cmscpanel/createHotel', 'HomeController@createHotel')->name('cmscpanel.createHotel');
Route::get('/cmscpanel/editHotel/{id}', 'HomeController@editHotel')->name('cmscpanel.editHotel');
Route::get('/cmscpanel/public/hotel/{id}', 'HomeController@public_hotel')->name("public.hotel");
Route::get('/cmscpanel/hotel/room/load', 'HomeController@loadRoom')->name("load.room");
Route::get('/cmscpanel/reviewHotel/{id}', 'HomeController@reviewHotel')->name("cmscpanel.reviewHotel");
Route::post('dang-nhap', 'HomeController@dang_nhap')->name('home.dangnhap');
Route::get('search', 'HomeController@search')->name('search');
Route::get('demo-f1', 'HomeController@demo_f1')->name('demo.f1');
Route::post('search-auto-drop', 'HomeController@search_auto_drop')->name('search.auto.drop');
Route::get('/parter-complate/{idhotel}', 'HomeController@parter_complate')->name('parter.complate');
Route::get('/tuyen-dung/{slug}', 'HomeController@tuyendung')->name('tuyen.dung');
Route::get('/partnership/room/delete/{hotel_id}/{room_id}', 'HomeController@partner_room_delete')->name('room.delete.partnership');
Route::get('/location/{slug}', 'HomeController@location_list')->name("location.list");
Route::get('/k/{slug}', 'HomeController@khach_san_categories')->name("khach.san");
Route::get('/khach-san/{slug}.html', 'HomeController@khach_san_details')->name("khachsan.details");

Route::get('partnership/logout', 'HomeController@partner_logout')->name('partner.logout');
Route::get('partnership/calendar/update-room', 'HomeController@update_room_partnership_calendar')->name('room.update.partnership.calendar');
Route::post('dang-ky', 'HomeController@dang_ky')->name('home.dangky');
Route::post('dang-ky-partnership', 'HomeController@dang_ky_partnership')->name('home.dang_ky_partnership');
Route::post('partner-setpass', 'HomeController@partner_setpass')->name('partner.setpass');
Route::post('partner/login', 'HomeController@partner_login')->name('home.partner.login');
Route::post('partnership/create-hotel', 'HomeController@create_hotel_partnership')->name('hotel.create.partnership');
Route::post('partnership/update-hotel', 'HomeController@update_hotel_partnership')->name('hotel.update.partnership');
Route::post('partnership/create-room', 'HomeController@create_room_partnership')->name('room.create.partnership');
Route::post('partnership/update-room', 'HomeController@update_room_partnership')->name('room.update.partnership');
Route::post('partnership/create-room-calendars', 'HomeController@create_room_calendars')->name('room.create.calendars');
Route::post('partnership/chinh-sach', 'HomeController@chinh_sach')->name('partnership.update.chinhsach');
Route::post('/ajaxupload/action', 'HomeController@action')->name('ajaxupload.action');
Route::post('/ajaxupload/avatar', 'HomeController@avatar')->name('ajaxupload.avatar');
Route::post('/ajaxupload/doGallery', 'HomeController@doGallery')->name('ajaxupload.doGallery');

Route::get('/cmscpanel/editRoom/{idhotel}/{idroom}', 'HomeController@editRoom')->name('cmscpanel.editRoom');
Route::get('/confirm', 'HomeController@confirm');
Route::get('/signin', 'HomeController@signin')->name("home.signin");
Route::get('/signup', 'HomeController@signup')->name("home.signup");
Route::get('/tin-tuc', 'HomeController@tin_tuc')->name("tin.tuc");
Route::get('/cam-nang', 'HomeController@cam_nang')->name("cam.nang");
Route::get('/tuyen-dung', 'HomeController@tuyen_dung')->name("tuyen.dung");
Route::get('/tuyen-dung/{slug}', 'HomeController@tuyen_dung_detail')->name("tuyen.dung.detail");
Route::get('/lien-he', 'HomeController@lien_he')->name("lien.he");
Route::post('/contact', 'HomeController@contact')->name("res.contact");
Route::get('{slug}.html', 'NewsController@news_details')->name('news.details');

Route::get('/change-language/{lang}', function ($lang, Request $request) {
    // Lưu ngôn ngữ vào session
    session(['locale' => $lang]);
    return back();
})->name('change.language');

//Backend
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'AdminController@index')->name('admin.login');
    Route::get('/logout', 'AdminController@logout')->name('admin.logout');
    Route::get('dashboard', 'AdminController@show_dashboard')->name('admin.show.dashboard');
    Route::post('admin-dashboard', 'AdminController@dashboard')->name('admin.dashboard.process');
    Route::get('email/list', 'AdminController@email_list')->name('admin.email.list');
    Route::get('pages/list', 'PagesController@listpages')->name('admin.pages.list');
    Route::get('pages/edit/{id}', 'PagesController@pages_edit')->name("admin.pages.edit");
    Route::get('pages/insert', 'PagesController@insert')->name('admin.pages.insert');
    Route::post('pages/create', 'PagesController@create')->name('admin.pages.create');
    Route::post('pages/update', 'PagesController@update')->name('admin.pages.update');
    Route::get('pages/delete/{id}', 'PagesController@delete')->name('admin.pages.delete');
    Route::get('news/list', 'NewsController@listmenu')->name('admin.news.list');
    Route::get('news/add', 'NewsController@insert')->name('admin.news.insert');
    Route::get('news/edit/{id}', 'NewsController@news_edit')->name("admin.news.edit");
    Route::post('news/update', 'NewsController@update_news')->name("admin.news.update");
    Route::post('news/create', 'NewsController@create')->name('admin.news.create');
    Route::get('news/active/{id}', 'NewsController@active_atc')->name("admin.news.active.atc");
    Route::get('news/delete/{id}', 'NewsController@delete')->name('admin.news.delete');

    Route::get('recruitment/list', 'RecruitmentController@list')->name('admin.rec.list');
    Route::get('recruitment/add', 'RecruitmentController@insert')->name('admin.rec.insert');
    Route::get('recruitment/edit/{id}', 'RecruitmentController@edit')->name("admin.rec.edit");
    Route::post('recruitment/update', 'RecruitmentController@update')->name("admin.rec.update");
    Route::post('recruitment/create', 'RecruitmentController@create')->name('admin.rec.create');
    Route::get('recruitment/delete/{id}', 'RecruitmentController@delete')->name('admin.rec.delete');

    Route::get('comment/list', 'CommentController@listcomments')->name('admin.comment.list');
    Route::get('comment/delete/{id}', 'CommentController@delete')->name('admin.comment.delete');
    Route::get('comment/active/{id}', 'CommentController@active_atc')->name("admin.comment.active.atc");

    Route::post('multiuploads', 'NewsController@uploadSubmit')->name('admin.news.multiuploads');
    Route::get('news/categories', 'NewsController@ListcatNews')->name('news.categories');
    Route::get('catnews/add', 'NewsController@ListcatAdd')->name('admin.catnews.add');
    Route::get('catnews/edit/{id}/{pid}', 'NewsController@CatnewsEdit')->name("admin.catnews.edit");
    Route::post('catnews/create', 'NewsController@catnewscreate')->name('admin.catnews.create');
    Route::post('catnews/update', 'NewsController@catnews_update')->name('admin.catnews.update');
    Route::get('catnews/delete/{id}', 'NewsController@catnews_delete')->name('admin.catnews.delete');

    Route::get('menu', 'MenuController@listmenuadmin')->name('admin.menu.list');
    Route::get('menu/add', 'MenuController@insert')->name('admin.menu.insert');
    Route::get('menu/edit/{id}/{parent_id}', 'MenuController@edit')->name("admin.menu.edit");
    Route::post('menu/update', 'MenuController@update')->name("admin.menu.update");
    Route::post('menu/create', 'MenuController@create')->name('admin.menu.create');
    Route::get('menu/del/{id}', 'MenuController@delete')->name('admin.menu.delete');

    Route::get('location', 'LocationController@location_list')->name("admin.location.list");
    Route::post('location/create', 'LocationController@location_postcreate')->name('admin.location.postcreate');
    Route::get('location/edit/{id}', 'LocationController@location_edit')->name("admin.location.edit");
    Route::post('location/update', 'LocationController@location_postupdate')->name('admin.location.postupdate');
    Route::get('location/delete/{id}', 'LocationController@location_delete')->name('admin.location.delete');

    Route::get('banner/list', 'BannerController@banner_manage')->name("admin.banner.list");
    Route::get('banner/add', 'BannerController@banner_add')->name("admin.banner.add");
    Route::get('banner/edit/{id}', 'BannerController@banner_edit')->name("admin.banner.edit");
    Route::post('banner/create', 'BannerController@postcreate')->name('admin.banner.postcreate');
    Route::post('banner/update', 'BannerController@postupdate')->name('admin.banner.postupdate');
    Route::get('banner/active/{id}', 'BannerController@active_atc')->name("admin.banner.active.atc");
    Route::get('banner/delete/{id}', 'BannerController@delete')->name('admin.banner.delete');

    Route::get('album/list', 'AlbumsController@album_list')->name("admin.album.list");
    Route::post('album/create', 'AlbumsController@postcreate')->name('admin.album.postcreate');
    Route::get('album/edit/{id}', 'AlbumsController@album_edit')->name("admin.album.edit");
    Route::post('album/update', 'AlbumsController@postupdate')->name('admin.album.postupdate');
    Route::get('album/delete/{id}', 'AlbumsController@album_delete')->name('admin.album.delete');

    Route::get('gallery/list', 'AlbumsController@gallery_list')->name("admin.gallery.list");
    Route::get('gallery/add', 'AlbumsController@gallery_add')->name("admin.gallery.add");
    Route::post('gallery/create', 'AlbumsController@gallerypostcreate')->name('admin.gallery.postcreate');
    Route::get('gallery/edit/{id}', 'AlbumsController@gallery_edit')->name("admin.gallery.edit");
    Route::post('gallery/update', 'AlbumsController@gallerypostupdate')->name('admin.gallery.postupdate');
    Route::get('gallery/delete/{id}', 'AlbumsController@gallery_delete')->name('admin.gallery.delete');

    Route::get('videos/list', 'VideosController@videos_list')->name("admin.videos.list");
    Route::get('videos/add', 'VideosController@videos_add')->name("admin.videos.add");
    Route::post('videos/create', 'VideosController@videospostcreate')->name('admin.videos.postcreate');
    Route::get('videos/edit/{id}', 'VideosController@videos_edit')->name("admin.videos.edit");
    Route::post('videos/update', 'VideosController@videospostupdate')->name('admin.videos.postupdate');
    Route::get('videos/delete/{id}', 'VideosController@videos_delete')->name('admin.videos.delete');

    //quan ly thanh vien
    Route::get('members/list', 'MembersController@members_list')->name("admin.members.list");
    Route::post('members/details', 'MembersController@registration_details')->name('registration.details');
    Route::get('members/delete/{id}', 'MembersController@member_delete')->name('admin.members.delete');

    //quan ly thanh vien membership
    Route::get('membership/list', 'MembersController@membership_list')->name("admin.membership.list");
    Route::post('membership/details', 'MembersController@membership_details')->name('membership.details');
    Route::get('membership/edit/{id}', 'MembersController@membership_edit')->name('admin.membership.edit');
    Route::get('membership/delete/{id}', 'MembersController@membership_delete')->name('admin.membership.delete');
    Route::post('membership/post-membership', 'MembersController@update_membership')->name('update.membership');
    Route::get('membership/status/{id}', 'MembersController@membership_change_status')->name('admin.membership.change.status');

    Route::get('account/list', 'AdminController@account_list')->name("admin.account.list");
    Route::get('account/create', 'AdminController@account_create')->name('admin.account.create');
    Route::post('account/postcreate', 'AdminController@postaccountcreate')->name('admin.account.postcreate');
    Route::get('account/edit/{id}', 'AdminController@account_edit')->name("admin.account.edit");
    Route::post('account/update', 'AdminController@postaccountupdate')->name('admin.account.postupdate');
    Route::get('account/delete/{id}', 'AdminController@account_delete')->name('admin.account.delete');

    Route::get('cktdcv/update', 'AdminController@cktdcv_update')->name("admin.cktdcv.update");
    Route::post('cktdcv/postupdate', 'AdminController@cktdcvpost_update')->name("admin.cktdcv.postupdate");

    Route::get('config', 'ConfigController@config')->name("admin.config.list");
    Route::post('config/update', 'ConfigController@postupdate')->name('admin.config.postupdate');
});
