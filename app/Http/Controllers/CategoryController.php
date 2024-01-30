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
}