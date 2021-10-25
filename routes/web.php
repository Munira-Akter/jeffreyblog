<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/post/{post:slug}', 'PostController@postshow')->where('slug','[A-z_\-]+');
Route::resource('/', PostController::class);



Route::group(['prefix' => 'register' , 'as' => 'register.'], function () {
    Route::get('/' , 'RegisterController@index')->name('index');
    Route::post('/' , 'RegisterController@store')->name('store');
});
