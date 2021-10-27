<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//Authentication

Route::group(['as' => 'auth.' , 'middleware' => 'guest'], function () {
    Route::get('/register' , 'AuthController@index')->name('index');
    Route::post('/register' , 'AuthController@store')->name('store');
    Route::get('/login' , 'AuthController@loginview');
    Route::post('/login' , 'AuthController@login');
});
Route::post('/logout' , 'AuthController@distroy');



// Post Management Route
Route::get('/post/{post:slug}', 'PostController@postshow')->where('slug','[A-z_\-]+');
Route::post('/post/{post:slug}/comment', 'CommentController@store');
Route::resource('/', PostController::class);


// AdminPanel Route
Route::get('admin/delete/{post}', 'AdminController@delete')->middleware('admin');
Route::put('admin/update/{post}', 'AdminController@updatepost')->middleware('admin');
Route::resource('admin', AdminController::class)->middleware('admin');










