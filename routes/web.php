<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('megogo.net');

Route::get('/films', function () {
    return view('films');
})->name('films');

Route::get('/tvseries', function () {
    return view('tvseries');
})->name('tvseries');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('film/{id}', 'FilmController@show');

Route::get('/film', 'FilmController@showAll');

//Route::get('/signup/login', function () {
//    return view('login');
//})->name('login');

Route::post('/signup/submit', 'SignupController@submit')->name('signup-form') ;

Route::resource('films', 'FilmController');
Route::apiResource('films', 'FilmController');

Route::resource('serials', 'SerialController');
Route::apiResource('serials', 'SerialController');

