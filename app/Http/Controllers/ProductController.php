<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }

    public function create() {
        return view('dashboard');
    }

    public function store(ProductRequest $request) {
        $validatedData = $request->validated();

        $file = $validatedData['image'];
        $fileNameWithoutSpacing = str_replace(' ', '', $validatedData['name']);
        $validatedData['image'] = time() . '_' . $fileNameWithoutSpacing . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/products/' . $validatedData['image'], file_get_contents($file));

        Product::create($validatedData);

        return redirect()->route('product.index')->with("message", "Product created Successfully");
    }

    public function show(Product $product) {
        return view("dashboard", compact('product'));
    }
}
