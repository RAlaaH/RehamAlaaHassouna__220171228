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


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::namespace('Dashboard')->name('dashboard.')->prefix('admin')->group(function(){
//    Route::get('/','DashboardController@index')->name('home');
//    Route::resource('posts','PostController');
//    Route::resource('products','productController');
//    Route::resource('users','UserController');
//    Route::resource('categories','CategoryController');
//});

Route::get('login', 'Dashboard\AuthController@login')->name('login');
Route::post('authenticate', 'Dashboard\AuthController@authenticate')->name('authenticate');
Route::get('logout', 'Dashboard\AuthController@logout')->name('logout');
Route::get('register', 'Dashboard\AuthController@register')->name('register');
Route::post('register', 'Dashboard\AuthController@do_register')->name('do_register');


Route::get('train', 'Dashboard\TrainController@querybuilder');
Route::get('orm', 'Dashboard\TrainController@orm');
Route::get('relationships', 'Dashboard\TrainController@relationships');
Route::get('poly_relationships', 'Dashboard\TrainController@poly_relationships');
Route::get('encrypt', 'Dashboard\TrainController@encrypt');

Route::namespace('Dashboard')->middleware('auth')->name('dashboard.')->prefix('admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('home');
    Route::resource('posts', 'PostController');
    Route::resource('users', 'UserController');
});




Route::get('/','FrontWebSiteController@showHome')->name('frontWebSite.home');

Route::get('/aboutUs','FrontWebSiteController@showAboutUs')->name('frontWebSite.aboutUs');

Route::get('/blog','FrontWebSiteController@showBlog')->name('frontWebSite.blog');

Route::get('/blogList','FrontWebSiteController@showBlogList')->name('frontWebSite.blogList');

Route::get('/blogDetail','FrontWebSiteController@showBlogDetail')->name('frontWebSite.blogDetail');

Route::get('/blogGrid','FrontWebSiteController@showBlogGrid')->name('frontWebSite.blogGrid');

Route::get('/contact1','FrontWebSiteController@showContact1')->name('frontWebSite.contact1');

Route::get('/contact2','FrontWebSiteController@showContact2')->name('frontWebSite.contact2');

Route::get('/shop','FrontWebSiteController@showShop')->name('frontWebSite.shop');

Route::get('/shopDetail','FrontWebSiteController@showShopDetail')->name('frontWebSite.shopDetail');

Route::get('/shopCart','FrontWebSiteController@showShopCart')->name('frontWebSite.shopCart');

Route::get('/chekOut','FrontWebSiteController@showCheckOut')->name('frontWebSite.checkOut');

Route::get('/makeAppointment','FrontWebSiteController@showMakeAppointment')->name('frontWebSite.makeAppointment');

Route::get('/service','FrontWebSiteController@showService')->name('frontWebSite.service');

Route::get('/servicesList','FrontWebSiteController@showServicesList')->name('frontWebSite.servicesList');

Route::get('/servicesDetail','FrontWebSiteController@showServicesDetail')->name('frontWebSite.servicesDetail');

Route::get('/career','FrontWebSiteController@showCareer')->name('frontWebSite.career');

Route::get('/faq','FrontWebSiteController@showFaq')->name('frontWebSite.faq');

Route::get('/price','FrontWebSiteController@showPrice')->name('frontWebSite.price');

Route::get('/error','FrontWebSiteController@showError')->name('frontWebSite.error');

Route::get('/privacyPolicy','FrontWebSiteController@showPrivacyPolicy')->name('frontWebSite.privacy_policy');

Route::get('/homeDark','FrontWebSiteController@showDarkHome')->name('frontWebSite.homeDark');

//Route::get('/listProduct','App\Http\Controllers\Dashboard\ProductController@listProduct');
//Route::get('/showProduct','App\Http\Controllers\Dashboard\ProductController@listProduct');
//Route::get('/deleteProduct','App\Http\Controllers\Dashboard\ProductController@listProduct');
//Route::get('/editProduct','App\Http\Controllers\Dashboard\ProductController@listProduct');
//Route::get('/saveProduct','App\Http\Controllers\Dashboard\ProductController@listProduct');
//Route::get('/saveEditProduct','App\Http\Controllers\Dashboard\ProductController@listProduct');

//Route::resource('/users','App\Http\Controllers\Dashboard\UserController');



