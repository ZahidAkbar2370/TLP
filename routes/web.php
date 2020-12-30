<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/home', function () {
//     return view('pages.home_content');
// });


Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/home','HomeController@index');

Route::get('/gallary','HomeController@gallery_index');
Route::get('/video','HomeController@video_index');
Route::get('/tarana','HomeController@tarana_index');
Route::get('/contactus','HomeController@contactus_index');
Route::get('/khtmynabuwat','HomeController@khtmynabuwat_index');
Route::get('/sunnatpak','HomeController@sunnatpak_index');

// message route
Route::get('/all-message','MessageController@all_message');
Route::get('/delete-message/{id}','MessageController@delete_message');//delete message
Route::post('/send-message','MessageController@save_message');//user send message


// User Routes
Route::get('/add-user','UserController@index');//add form
Route::get('/all-user','UserController@all_user');//view all user
Route::post('/save-user','UserController@save_user');//add values submit
Route::get('/delete-user/{id}','UserController@delete_user');//delete user
Route::get('/edit-user/{user_id}','UserController@edit_user');//edit user
Route::post('/update-user/{user_id}','UserController@update_user');//update user value
Route::get('/unactive_user/{user_id}','UserController@unactive_user');//chenge update status
Route::get('/active_user/{user_id}','UserController@active_user');//chenge update status


// Gallary Routes
Route::get('/add-gallary','GallaryController@index');//add form
Route::get('/all-gallary','GallaryController@all_gallary');//view all gallary
Route::post('/save-gallary','GallaryController@save_gallary');//add values submit
Route::get('/delete-gallary/{id}','GallaryController@delete_gallary');//delete gallary
Route::get('/edit-gallary/{gallary_id}','GallaryController@edit_gallary');//edit gallary
Route::post('/update-gallary/{gallary_id}','GallaryController@update_gallary');//update gallary value
Route::get('/unactive_gallary/{gallary_id}','GallaryController@unactive_gallary');//chenge update status
Route::get('/active_gallary/{gallary_id}','GallaryController@active_gallary');//chenge update status


// Khtmynabuwat Routes
Route::get('/add-khtmynabuwat','KhtmynabuwatController@index');//add form
Route::get('/all-khtmynabuwat','KhtmynabuwatController@all_khtmynabuwat');//view all khtmynabuwat
Route::post('/save-khtmynabuwat','KhtmynabuwatController@save_khtmynabuwat');//add values submit
Route::get('/delete-khtmynabuwat/{id}','KhtmynabuwatController@delete_khtmynabuwat');//delete khtmynabuwat
Route::get('/edit-khtmynabuwat/{khtmynabuwat_id}','KhtmynabuwatController@edit_khtmynabuwat');//edit khtmynabuwat
Route::post('/update-khtmynabuwat/{khtmynabuwat_id}','KhtmynabuwatController@update_khtmynabuwat');//update khtmynabuwat value
Route::get('/unactive_khtmynabuwat/{khtmynabuwat_id}','KhtmynabuwatController@unactive_khtmynabuwat');//chenge update status
Route::get('/active_khtmynabuwat/{khtmynabuwat_id}','KhtmynabuwatController@active_khtmynabuwat');//chenge update status



// Member Routes
Route::get('/add-member','MemberController@index');//add form
Route::get('/all-member','MemberController@all_member');//view all member
Route::post('/save-member','MemberController@save_member');//add values submit
Route::get('/delete-member/{id}','MemberController@delete_member');//delete member
Route::get('/edit-member/{member_id}','MemberController@edit_member');//edit member
Route::post('/update-member/{member_id}','MemberController@update_member');//update member value
Route::get('/unactive_member/{member_id}','MemberController@unactive_member');//chenge update status
Route::get('/active_member/{member_id}','MemberController@active_member');//chenge update status



// Slider Routes
Route::get('/add-slider','sliderController@index');//add form
Route::get('/all-slider','sliderController@all_slider');//view all slider
Route::post('/save-slider','sliderController@save_slider');//add values submit
Route::get('/delete-slider/{id}','sliderController@delete_slider');//delete slider
Route::get('/edit-slider/{slider_id}','sliderController@edit_slider');//edit slider
Route::post('/update-slider/{slider_id}','sliderController@update_slider');//update slider value
Route::get('/unactive_slider/{slider_id}','sliderController@unactive_slider');//chenge update status
Route::get('/active_slider/{slider_id}','sliderController@active_slider');//chenge update status



// Socialmedia Routes
Route::get('/add-socialmedia','socialmediaController@index');//add form
Route::get('/all-socialmedia','socialmediaController@all_socialmedia');//view all socialmedia
Route::post('/save-socialmedia','socialmediaController@save_socialmedia');//add values submit
Route::get('/delete-socialmedia/{id}','socialmediaController@delete_socialmedia');//delete socialmedia
Route::get('/edit-socialmedia/{socialmedia_id}','socialmediaController@edit_socialmedia');//edit socialmedia
Route::post('/update-socialmedia/{socialmedia_id}','socialmediaController@update_socialmedia');//update socialmedia value
Route::get('/unactive_socialmedia/{socialmedia_id}','socialmediaController@unactive_socialmedia');//chenge update status
Route::get('/active_socialmedia/{socialmedia_id}','socialmediaController@active_socialmedia');//chenge update status



// SunnatPak Routes
Route::get('/add-sunnatpak','sunnatpakController@index');//add form
Route::get('/all-sunnatpak','sunnatpakController@all_sunnatpak');//view all sunnatpak
Route::post('/save-sunnatpak','sunnatpakController@save_sunnatpak');//add values submit
Route::get('/delete-sunnatpak/{id}','sunnatpakController@delete_sunnatpak');//delete sunnatpak
Route::get('/edit-sunnatpak/{sunnatpak_id}','sunnatpakController@edit_sunnatpak');//edit sunnatpak
Route::post('/update-sunnatpak/{sunnatpak_id}','sunnatpakController@update_sunnatpak');//update sunnatpak value
Route::get('/unactive_sunnatpak/{sunnatpak_id}','sunnatpakController@unactive_sunnatpak');//chenge update status
Route::get('/active_sunnatpak/{sunnatpak_id}','sunnatpakController@active_sunnatpak');//chenge update status



// Tarana Routes
Route::get('/add-tarana','taranaController@index');//add form
Route::get('/all-tarana','taranaController@all_tarana');//view all tarana
Route::post('/save-tarana','taranaController@save_tarana');//add values submit
Route::get('/delete-tarana/{id}','taranaController@delete_tarana');//delete tarana
Route::get('/edit-tarana/{tarana_id}','taranaController@edit_tarana');//edit tarana
Route::post('/update-tarana/{tarana_id}','taranaController@update_tarana');//update tarana value
Route::get('/unactive_tarana/{tarana_id}','taranaController@unactive_tarana');//chenge update status
Route::get('/active_tarana/{tarana_id}','taranaController@active_tarana');//chenge update status



// Video Routes
Route::get('/add-video','videoController@index');//add form
Route::get('/all-video','videoController@all_video');//view all video
Route::post('/save-video','videoController@save_video');//add values submit
Route::get('/delete-video/{id}','videoController@delete_video');//delete video
Route::get('/edit-video/{video_id}','videoController@edit_video');//edit video
Route::post('/update-video/{video_id}','videoController@update_video');//update video value
Route::get('/unactive_video/{video_id}','videoController@unactive_video');//chenge update status
Route::get('/active_video/{video_id}','videoController@active_video');//chenge update status