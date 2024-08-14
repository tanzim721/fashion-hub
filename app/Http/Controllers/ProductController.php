<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductSelection;

class ProductController extends Controller
{

    public function index($id)
    {
        $product = Product::findOrFail($id);
        $product->image = json_decode($product->image, true);
        $product->benefits = json_decode($product->benefits, true);
        $product->details = json_decode($product->details, true);
        $product->more_details = json_decode($product->more_details, true);
        $selections = ProductSelection::where('product_id', $id)
            ->orderByDesc('id')
            ->first();
        return view('welcome', ['product' => $product, 'selections' => $selections]);
    }
}
