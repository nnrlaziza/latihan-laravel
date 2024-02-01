<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "nama" => "Nurul",
        "email" => "NurulAzizah@gmail.com",
        "image" => "kontak.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/categories/{category:slug}',[CategoryController::class, 'show']);
// Route::get('/authors/{author:username}', function (User $author) {
    //     return view('posts', [
        //         'title' => "Post By Author : $author->name",
        //         "active" => "category",
        //         'posts' => $author->posts->load('category', 'author')
        //     ]);
        // });
        
Route::get('/stores', [StoreController::class, 'index']);
