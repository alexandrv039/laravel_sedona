<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = \App\Models\Product::all();
        return view('catalog', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::query()->findOrFail($id);
        dd($product);
    }
}
