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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix'=>'v1', 'middleware' => 'cors'], function(){
	Route::resource('admin/user', 'Admin\UserController', [
		'except' => ['create', 'edit']
	]);
	Route::post('/admin/checkemail/{email}', [
		'uses' => 'Admin\UserController@checkEmail'
	]);
	Route::resource('admin/question-frequent', 'Admin\QuestionfrequentController', [
		'except' => ['create', 'edit']
	]);
	Route::resource('admin/contact', 'Admin\ContactController', [
		'except' => ['create', 'edit']
	]);
	Route::resource('admin/news', 'Admin\NewsController', [
		'except' => ['create', 'edit']
	]);
	Route::post('/user/signin', [
		'uses' => 'AuthController@signin'
	]);
	Route::get('/user/logout', [
		'uses' => 'AuthController@logout'
	]);
});