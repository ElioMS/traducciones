<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// dd(config('app.locale'));



Route::group(['prefix' => 'admin'], function () {
    Route::resource('about', 'AboutController');
    Route::resource('posts', 'PostController');
});
