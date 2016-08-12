<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix' => 'system'], function()
{
	Route::get('login', ['as' =>'login', 'uses' => 'Auth\AuthController@getLogin']);
	Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
	Route::get('logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@logout']);
	// Password reset link request routes...
	Route::post('password/email', 'Auth\PasswordController@postEmail');

	// Password reset routes...
	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');

	Route::group(['middleware' => 'auth'],function(){

		Route::get('/home', function () {
		    return view('admin.dashboard.layout');
		});
		Route::get('/dashboard',['as' =>'system', function () {
		    return view('admin.dashboard.layout');
		}]);
		Route::resource('news','NewController');
		Route::resource('categories','CategoryController');
		Route::resource('social','SocialController');
	});
});
Route::get('/', 'SiteController@index');
Route::get('/blog/post/{id}',['as' =>'blog.post', function ($id) {
	$notice=App\Notice::find($id);
    return view('site.post.layout',compact('notice'));
}]);
