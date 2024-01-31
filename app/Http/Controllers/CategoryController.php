<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            "title" => "Category",
            "active" => "category",
            'category' => Category::all()
        ]);
    }

    // public function show(Category $category)
    // {
    //     return view('posts', [
    //         'title' => "Post by Category : $category->name",
    //         "active" => "categories",
    //         'posts' => $category->posts->load('category', 'author'),
    //         "category" => $category->name
    //     ]);
    // }

}
