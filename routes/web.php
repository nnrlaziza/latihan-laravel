<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "Muh ichwan",
        "email" => "ichwannur617@gmail.com",
        "image" => "IMG-20210625-WA0001 - Salin.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{category:slug}',[CategoryController::class, 'show']);

