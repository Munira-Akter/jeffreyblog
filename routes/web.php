<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts/category/{category:slug}' , 'PostController@categorysearch');
Route::get('/posts/author/{user}' , 'PostController@authorsearch');
Route::get('/post/{post:slug}', 'PostController@postshow')->where('slug','[A-z_\-]+');
Route::resource('/', PostController::class);

