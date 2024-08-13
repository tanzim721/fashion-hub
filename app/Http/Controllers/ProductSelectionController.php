<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSelection;

class ProductSelectionController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'color' => 'required|string',
            'size' => 'required|string',
            'quantity' => 'required|integer|min:1',
        ]);

        // Store the data in the product_selections table
        ProductSelection::create([
            'product_id' => $request->input('product_id'),
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'quantity' => $request->input('quantity'),
        ]);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
