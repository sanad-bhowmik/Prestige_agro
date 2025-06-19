<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Category;
use App\Models\Notice;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function addVideoPhoto()
    {
        $photos = Photo::latest()->get();
        $videos = Video::latest()->get();

        return view('admin.addVideoPhoto', compact('photos', 'videos'));
    }
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function jobCircular()
    {
        $careers = Career::all();
        return view('admin.jobCircular', compact('careers'));
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

    public function storeJob(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'Position' => 'required|string|max:255',
            'Vacancy' => 'required|integer|min:1',
            'Closing_Date' => 'required|date',
            'Status' => 'required|in:0,1',
            'Details' => 'required|string',
        ]);

        // Create a new career record
        Career::create($validatedData);

        // Redirect or return success response
        return redirect()->back()->with('success', 'Job position added successfully!');
    }

    public function jobCircularList()
    {
        $careers = Career::orderBy('Closing_Date', 'desc')->get();  // Fetch all careers ordered by closing date
        return view('admin.jobCircularList', compact('careers'));
    }

    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();

        return redirect()->back()->with('success', 'Job circular deleted successfully.');
    }

    public function addPhoto()
    {
        return view('admin.addPhoto');
    }
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048',
        ]);

        $file = $request->file('file');

        $destinationPath = public_path('img/gallery');

        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

        $file->move($destinationPath, $filename);

        $filePath = 'img/gallery/' . $filename;

        Photo::create([
            'file_path' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Photo uploaded successfully!');
    }
    public function addVideo()
    {
        return view('admin.addVideo');
    }
    public function Vstore(Request $request)
    {
        // Validate the URL input
        $request->validate([
            'url' => 'required|url|max:255',
        ]);

        // Create and save the video record
        Video::create([
            'url' => $request->url,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Video URL added successfully!');
    }

    public function Pdestroy($id)
    {
        $photo = Photo::findOrFail($id);

        // Delete physical file if needed
        if (file_exists(public_path($photo->file_path))) {
            unlink(public_path($photo->file_path));
        }

        $photo->delete();

        return redirect()->back()->with('success', 'Photo deleted successfully.');
    }
    public function Vdestroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->back()->with('success', 'Video deleted successfully.');
    }

    public function AddNotice()
    {
        return view('admin.addNotice');
    }
    public function noticeList()
    {
        $notices = Notice::latest()->get(); // Or paginate() if needed
        return view('admin.noticeList', compact('notices'));
    }
    public function destroynotice($id)
    {
        $notice = Notice::findOrFail($id);  // Find notice or fail with 404
        $notice->delete();                  // Delete the notice

        return redirect()->route('noticeList')  // Redirect back to notice list page
            ->with('success', 'Notice deleted successfully.');
    }
    public function storeNotice(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'details' => 'required|string',
        ]);

        Notice::create([
            'title' => $request->title,
            'details' => $request->details,
        ]);

        return redirect()->back()->with('success', 'Notice added successfully!');
    }
}
