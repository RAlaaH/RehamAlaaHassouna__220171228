<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function (Request $request) {
    return 'Hello world';
});

//Route::ApiResources('posts','Api/PostController');
//Route::resource('posts','Api\PostController');

Route::get('login','Api/AuthController@login');

Route::middleware('auth:api')->group(function(){

    Route::resource('posts','Api\PostController');

    //Route::ApiResources('posts','Api/PostController');
    Route::get('/user',function(Request $request){
        return $request->user();
    });
});


