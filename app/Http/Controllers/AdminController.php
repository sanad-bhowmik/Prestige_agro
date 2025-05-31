<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }

        return back()->with('error', 'Invalid email or password.');
    }

    public function dashboard()
    {
        $productCount = Product::count();
        return view('admin.dashboard', compact('productCount'));
    }
    public function addProduct()
    {
        $categories = Category::orderBy('name')->get(); // Fetch categories from DB
        return view('admin.addProduct', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'required|string',
            'category' => 'required|exists:category,id',
            'elements' => 'nullable|string',
            'uses' => 'nullable|string',
            'limit' => 'nullable|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        // Handle image upload
        $image = $request->file('image');
        $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/products'), $imageName);
        $imagePath = 'http://prestigeagro.com/img/products/' . $imageName;

        // Store product
        Product::create([
            'name' => $request->name,
            'details' => $request->details,
            'category_id' => $request->category,
            'img' => $imagePath,
            'element' => $request->elements,
            'uses' => $request->uses,
            'limit' => $request->limit,
        ]);

        return redirect()->back()->with('success', 'Product added successfully!');
    }
    public function allProduct()
    {
        $products = Product::with('category')
            ->orderBy('created_at', 'desc') // Show latest first
            ->paginate(10);

        return view('admin.allProduct', compact('products'));
    }
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        // Optionally delete the image file from storage
        if ($product->img && \Storage::exists('public/' . $product->img)) {
            \Storage::delete('public/' . $product->img);
        }

        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'nullable|string',
            'category_id' => 'nullable|exists:category,id',
            'element' => 'nullable|string',
            'uses' => 'nullable|string',
            'limit' => 'nullable|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product->name = $request->name;
        $product->details = $request->details;
        $product->category_id = $request->category_id;
        $product->element = $request->element;
        $product->uses = $request->uses;
        $product->limit = $request->limit;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/products'), $imageName);
            $imagePath = 'http://prestigeagro.com/img/products/' . $imageName;

            $product->img = $imagePath;
        }

        $product->save();

        return redirect()->back()->with('success', 'Product updated successfully.');
    }
}
