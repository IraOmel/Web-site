<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('main');
});

Route::get('/about', "App\Http\Controllers\SiteController@info_page");
Route::post('/send_form', "App\Http\Controllers\SiteController@send_info");
Route::get('/test/{name}', "App\Http\Controllers\SiteController@test_file");


Route::get('/lab6', "App\Http\Controllers\FilmsController@show_info");
Route::get('/lab6/{id}', "App\Http\Controllers\FilmsController@info_director");
Route::get('/film/{id_film}', "App\Http\Controllers\FilmsController@info_film");
Route::get('/genre/{name}/{id_genre}', "App\Http\Controllers\FilmsController@info_genre");
