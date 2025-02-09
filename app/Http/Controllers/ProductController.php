<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('admin.create-product', compact('categories'));
    }

    public function uploadProduct(Request $request)
    {
        // Validate the incoming request data

        $request->validate([
            'productName' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id', // Validate that the category exists
            'brandName' => 'required|string|max:255',
            'price' => 'required|numeric',
            'salePrice' => 'nullable|numeric',
            'stock' => 'required|integer',
            'specifications' => 'nullable|string',
            'description' => 'required|string',
            'productImages' => 'required|array|min:1',
            'productImages.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'productVideo' => 'nullable|url',
        ]);

        // Handle image uploads
        $imagePaths = [];
        if ($request->hasFile('productImages')) {
            foreach ($request->file('productImages') as $image) {
                if ($image->isValid()) {
                    $path = $image->store('product_images', 'public');
                    $imagePaths[] = $path;
                } else {
                    dd('Image upload failed!');
                }
            }
        } else {
            dd('No images uploaded!');
        }

        // Create the product entry in the database
        $product = Product::create([
            'productName' => $request->input('productName'),
            'category_id' => $request->input('category_id'),
            'brandName' => $request->input('brandName'),
            'price' => $request->input('price'),
            'salePrice' => $request->input('salePrice'),
            'stock' => $request->input('stock'),
            'specifications' => $request->input('specifications'),
            'description' => $request->input('description'),
            'productImages' => $imagePaths,
            'productVideo' => $request->input('productVideo'),
        ]);

        dd($product);

        // return redirect()->route('admin.products.index')->with('success', 'Product uploaded successfully!');
    }

    public function showProducts(){
        $products = Product::get();
        return view('admin.products', ['products'=>$products]);
    }

    public function getJsonifiedProductDetails($id)
    {
        // Retrieve the product along with its category and images
        $product = Product::with('category')->findOrFail($id);

        // Return product details as JSON
        return response()->json([
            'productName' => $product->productName,
            'brandName' => $product->brandName,
            'price' => $product->price,
            'category' => $product->category,
            'description' => $product->description,
            'specifications' => $product->specifications,
            'productImages' => $product->productImages,
            'productVideo' => $product->productVideo
        ]);
    }

}
