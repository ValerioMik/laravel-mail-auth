<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/login','Auth\LoginController@login') -> name('login');
Route::post('/register','Auth\registerController@register') -> name('register');
Route::get('/logout','Auth\LoginController@logout') -> name('logout ');
//------------------------------------------------------

Auth::routes();

//------------------------------------------------------

Route::get('/', 'GuestController@home')->name('home');

//------------------------------------------------------

Route::get('/api/videogames/list','ApiController@getVideogames')-> name('api.videogames.list');
