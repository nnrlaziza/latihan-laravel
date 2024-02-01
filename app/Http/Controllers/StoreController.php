<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('stores', [ //linknya merujuk ke view
            "title" => "Store",
            "active" => "store",
            'store' => Store::all() // tankap data yg ada di db
        ]);
    }
}
