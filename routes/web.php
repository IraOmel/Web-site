<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('main');
});

Route::get('/about', "App\Http\Controllers\SiteController@info_page");
Route::post('/send_form', "App\Http\Controllers\SiteController@send_info");

Route::get('/test/{name}', "App\Http\Controllers\SiteController@test_file");
