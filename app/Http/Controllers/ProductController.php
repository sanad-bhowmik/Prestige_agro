<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(4)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }
    public function insecticide()
    {
        $products = Product::where('category_id', 1)->get();
        return view('products.insecticide', compact('products'));
    }
    public function fungicide()
    {
        $products = Product::where('category_id', 2)->get();
        return view('products.fungicide', compact('products'));
    }
    public function herbicide()
    {
        $products = Product::where('category_id', 3)->get();
        return view('products.herbicide', compact('products'));
    }
    public function micronutrients()
    {
        $products = Product::where('category_id', 4)->get();
        return view('products.micronutrients', compact('products'));
    }
}
