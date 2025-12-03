<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});

Route::get('/post', [PostController::class, 'index'] );
Route::get('/post/create', [PostController::class, 'create'] );
Route::get('/post',[CategoryController::class, 'index'] );

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    return view('home');
});
