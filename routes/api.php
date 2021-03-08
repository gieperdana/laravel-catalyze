<?php

use Illuminate\Http\Request;

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
Route::group(['namespace' => 'Admin', 'middleware' => 'cors',], function () {
    Route::get('posts', 'PostController@api_post')->name('api.posts');
    Route::get('posts/{id}', 'PostController@api_post_detail')->name('api.post');
});
