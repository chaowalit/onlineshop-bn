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

Route::controllers(
    [
        'auth' => 'Auth\AuthController'
    ]
);

Route::get('/', 'Auth\AuthController@getLogin');

Route::group([
	'namespace' => 'dashboard',
	'prefix' => 'dashboard',
	'middleware' => ['auth'],
], function () {
	Route::get('/', [
		'uses' => 'DashboardController@index',
		'as' => 'get.dashboard.index',
	]);
	
});

Route::group([
	'namespace' => 'profile_setting',
	'prefix' => 'profile_setting',
	'middleware' => ['auth'],
], function () {
	Route::get('/', [
		'uses' => 'ProfileSettingController@index',
		'as' => 'get.profile_setting.index',
	]);
	
});
