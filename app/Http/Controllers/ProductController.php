<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index($id)
    {
        $product = Product::find($id);
        $product->image = json_decode($product->image, true);
        $product->benefits = json_decode($product->benefits, true);
        $product->details = json_decode($product->details, true);
        $product->more_details = json_decode($product->more_details, true);
        return view('welcome', compact('product'));
    }
}
