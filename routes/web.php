<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('categories', [CategoryController::class, 'index']);

Route::get('/routes', [PostController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

