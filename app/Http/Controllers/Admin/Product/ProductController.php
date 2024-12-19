<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->orderBy('id', 'desc')->get();
        return view('Admin.modules.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.modules.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'price' => 'required|numeric|min:0',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'status' => 'required|boolean',
        //     'category_id' => 'required|exists:categories,id',
        // ]);
    
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->description = $request->description; 
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('storage/products', 'public');
        }
        $product->category_id = $request->category_id;
        // dd($product);
        $product->save();
        return redirect()->route('admin.products.index');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('Admin.modules.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'price' => 'required|numeric|min:0',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'status' => 'required|boolean',
        //     'category_id' => 'required|exists:categories,id',
        // ]);
    
        $product->name = $request->name;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->description = $request->description; 
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('images/products', 'public');
        }
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('admin.products.index');
    }
}
