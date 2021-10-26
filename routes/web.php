<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/post/{post:slug}', 'PostController@postshow')->where('slug','[A-z_\-]+');
Route::resource('/', PostController::class);



Route::group(['prefix' => 'register' , 'as' => 'register.' , 'middleware' => 'guest'], function () {
    Route::get('/' , 'AuthController@index')->name('index');
    Route::post('/' , 'AuthController@store')->name('store');

});

Route::group(['middleware' => 'guest'],function () {
    Route::get('/login' , 'AuthController@loginview');
    Route::post('/login' , 'AuthController@login');

});

Route::post('/logout' , 'AuthController@distroy');

