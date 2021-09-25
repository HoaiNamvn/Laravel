<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class Product1Controller extends Controller
{
    //
    function show()
    {
        $products = Product::all();

        return view('products.show', compact('products'));
    }
}
