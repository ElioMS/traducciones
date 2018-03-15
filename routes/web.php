<?php

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

// Route::post('config-dynamic-routes', 'Admin\ConfigurationController@redirectDynamicRoutesByLanguage')->name('admin.config.dlanguage');
//
//
// Route::group(['middleware' => 'language', 'prefix' => '{locale}'], function() {
//     dd(session()->get('locale'));
//     Route::get('/', 'HomeController@index');
//     Route::get('post/{slug}', 'HomeController@detail')->name('post.detail');
//
//     Route::group(['prefix' => '{locale?}'], function () {
//
//
//
//     });
// });

Route::group(['namespace' => 'Admin'], function() {
    Route::post('config-language', 'ConfigurationController@redirectByLanguage')->name('admin.config.language');
});

Route::get('lang/{lang}', 'Config\LanguageController@setLocale')->name('config.language');

Route::group(['middleware' => 'language'], function() {
	// dd(session()->get('locale'));
	// Route::prefix( session()->get('locale') )->group(function() {
		Route::get('/', 'MainController@main')->name('main');
	// });
		Route::get('publicaciones', 'HomeController@index');
		Route::get('about', 'HomeController@about')->name('about');
		Route::get('post/{slug}', 'HomeController@detail')->name('post.detail');
		// Route::resource('posts', 'PostController');

		// Route::prefix( \Request::segment(1) )->group(function() {
		// 	Route::get('publicaciones', 'HomeController@index');
		// });
});

