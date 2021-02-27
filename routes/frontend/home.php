<?php

use Illuminate\Support\Facades\Routes;

Route::group(['prefix' => '/', 'namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('frontend.home');
});