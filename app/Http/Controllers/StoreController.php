<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('stores', [
            "title" => "Store",
            "active" => "store",
            'store' => Store::all()
        ]);
    }
}
