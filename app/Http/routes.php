<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
	Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
});

Route::group(['middleware' => 'web'], function () {
	Route::get('logout', 'Auth\AuthController@logout');

    Route::get('/', 'HomeController@index');
});
