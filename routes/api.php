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
Route::get('/customer','CustomerController@index');
Route::get('/add-customer','CustomerController@create');
Route::get('/edit-customer/{id}','CustomerController@edit');
Route::get('/update-customer','CustomerController@update');
// Route::get('/customer','CustomerController@index');
// Route::resource('customer', 'CustomerController')->only(['index','show','update','delete','store']);
// Route::resource('/', 'HomeController@index'); // controller tao ra bởi auth
Route::group(['prefix' => 'admin'], function () {

});
route::prefix('v1')->group(function(){

    Route::resource('category', 'Api\v1\CategoryPostController');
    Route::resource('post', 'PostController');
    Route::resource('danh-muc', 'DanhmucController');
    Route::resource('bai-viet', 'BaivietController');
});



