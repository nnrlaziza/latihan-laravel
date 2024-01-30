<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all() //cara panggil method static:: // yg arti baris ini sy mengambil sebuah model sebuah method all untuk dapat semua data postingan

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post", //title dari halamannya
            "post" => $post
        ]);
    }
}
