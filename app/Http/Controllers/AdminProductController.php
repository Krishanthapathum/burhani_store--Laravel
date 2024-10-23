<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    // Show the form for creating a new product
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'availability' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Product::create([
            'item_name' => $request->item_name,
            'description' => $request->description,
            'price' => $request->price,
            'availability' => $request->availability,
            'image_filename' => $imageName,
        ]);

        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.index', compact('products'));
    }

    public function edit(Product $product)
    {
        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'item_name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'availability' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if (file_exists(public_path('images/' . $product->image_filename))) {
                unlink(public_path('images/' . $product->image_filename));
            }

            // Upload new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image_filename = $imageName;
        }

        // Update the product details
        $product->update([
            'item_name' => $request->item_name,
            'description' => $request->description,
            'price' => $request->price,
            'availability' => $request->availability,
        ]);

        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
    }

    // Delete a product from the database
    public function destroy(Product $product)
    {
        // Delete the image file if it exists
        if (file_exists(public_path('images/' . $product->image_filename))) {
            unlink(public_path('images/' . $product->image_filename));
        }

        // Delete the product record from the database
        $product->delete();

        return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
    }
}
