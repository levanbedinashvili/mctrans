<?php

use Illuminate\Support\Facades\Auth;
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

################## CLIENT SIDE

Auth::routes();
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', 'GuestController@index')->name('main');
Route::get('/about', 'GuestController@about')->name('about');
Route::get('/contact', 'GuestController@contact')->name('contact');
Route::get('/gallery', 'GuestController@gallery')->name('gallery');
Route::get('/video_gallery', 'GuestController@video_gallery')->name('video_gallery');
Route::get('/branch_detail/{id}', 'GuestController@branch_detail')->name('branch_detail');
Route::get('/news_list', 'GuestController@news_list')->name('news_list');
Route::get('/news/{id}', 'GuestController@news_detail')->name('news_detail');
Route::get('/mxileba', 'GuestController@mxileba')->name('mxileba');
Route::post('/mxileba_insert', 'GuestController@mxileba_insert')->name('mxileba_insert');

Route::get('/service/{id}', 'GuestController@service_detail')->name('service_detail');


Route::prefix('adminadmin')->name('admin.')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('/mtavari_update', 'HomeController@mtavari_update')->name('mtavari_update');

    Route::get('/main', 'HomeController@main')->name('main');
    Route::post('/main_update', 'HomeController@main_update')->name('main_update');
    Route::get('/about', 'HomeController@about')->name('about');

    Route::post('/about_update', 'HomeController@about_update')->name('about_update');
    Route::post('/about_update_img', 'HomeController@about_update_img')->name('about_update_img');

    Route::get('/service_all', 'HomeController@service_all')->name('service_all');
    Route::get('/service_add', 'HomeController@service_add')->name('service_add');
    Route::post('/service_add_insert', 'HomeController@service_add_insert')->name('service_add_insert');
    Route::get('/service_details/{id}', 'HomeController@service_details')->name('service_details');
    Route::post('/service_post_update/{id}', 'HomeController@service_post_update')->name('service_post_update');
    Route::post('/service_post_update_image', 'HomeController@service_post_update_image')->name('service_post_update_image');
    Route::get('/service_drop/{id}', 'HomeController@service_drop')->name('service_drop');

    Route::get('/filialebi_all', 'HomeController@filialebi_all')->name('filialebi_all');
    Route::get('/filialebi_add', 'HomeController@filialebi_add')->name('filialebi_add');
    Route::get('/filialebi_drop/{id}', 'HomeController@filialebi_drop')->name('filialebi_drop');
    Route::post('/filialebi_add_insert', 'HomeController@filialebi_add_insert')->name('filialebi_add_insert');
    Route::get('/filialebi_details/{id}', 'HomeController@filialebi_details')->name('filialebi_details');
    Route::post('/filialebi_post_update/{id}', 'HomeController@filialebi_post_update')->name('filialebi_post_update');


    Route::get('/media/photo', 'HomeController@media_photo')->name('media_photo');
    Route::post('/media_photo_add_insert', 'HomeController@media_photo_add_insert')->name('media_photo_add_insert');
    Route::get('/media_photo_drop/{id}', 'HomeController@media_photo_drop')->name('media_photo_drop');


    Route::get('/media/video', 'HomeController@media_video')->name('media_video');
    Route::post('/media_video_add_insert', 'HomeController@media_video_add_insert')->name('media_video_add_insert');
    Route::get('/media_video_drop/{id}', 'HomeController@media_video_drop')->name('media_video_drop');
    Route::get('/media_video_edit/{id}', 'HomeController@media_video_edit')->name('media_video_edit');
    Route::post('/media_video_update/{id}', 'HomeController@media_video_update')->name('media_video_update');



    Route::get('/media/blogs', 'HomeController@media_blogs')->name('media_blogs');
    Route::get('/media/blogs_add', 'HomeController@media_blogs_add')->name('media_blogs_add');
    Route::get('/media_blogs_drop/{id}', 'HomeController@media_blogs_drop')->name('media_blogs_drop');
    Route::post('/media_blogs_add_insert', 'HomeController@media_blogs_add_insert')->name('media_blogs_add_insert');
    Route::get('/media_blogs_details/{id}', 'HomeController@media_blogs_details')->name('media_blogs_details');
    Route::post('/media_blogs_post_update/{id}', 'HomeController@media_blogs_post_update')->name('media_blogs_post_update');


    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::post('/contact_update', 'HomeController@contact_update')->name('contact_update');


    Route::get('/mxileba_new', 'HomeController@mxileba_new')->name('mxileba_new');
    Route::get('/mxileba_seen', 'HomeController@mxileba_seen')->name('mxileba_seen');
    Route::get('/mxileba_details/{id}', 'HomeController@mxileba_details')->name('mxileba_details');
    Route::get('/mxileba_drop/{id}', 'HomeController@mxileba_drop')->name('mxileba_drop');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/user', 'UserController')->except(['show']);




