<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("Public.Products.Index", compact("products"));
    }

    public function show(Product $product)
    {
        return view("Public.Products.Show", compact("product"));
    }
}
