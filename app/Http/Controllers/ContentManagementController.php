<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentManagementController extends Controller
{
    // Show the page to upload categories, products, and testimonials
    public function showForm()
    {
        return view('admin.upload');
    }

    // Store the category data
    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories',
            // 'cover_image' => 'required|image|mimes:jpg,jpeg,png,gif,avif|max:2048',
        ]);

        $coverImagePath = $request->file('cover_image')->store('categories', 'public');

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'cover_image' => $coverImagePath,
        ]);

        return back()->with('success', 'Category uploaded successfully!');
    }

    // Store the product data
    public function storeProduct(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            // 'image' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
            'rating' => 'nullable|numeric|min:0|max:5',
            'description' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'image' => $imagePath,
            'price' => $request->price,
            'discount' => $request->discount ?? 0,
            'rating' => $request->rating ?? 0,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Product uploaded successfully!');
    }

    // Store the testimonial data
    public function storeTestimonial(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',  // Avatar is optional, but if provided, it must be an image
            'position' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Handle the avatar upload if a file is provided
        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('testimonials/avatars', 'public');
        }

        // Store the testimonial in the database
        Testimonial::create([
            'name' => $request->name,
            'avatar' => $avatarPath,
            'position' => $request->position,
            'content' => $request->content,
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Testimonial uploaded successfully!');
    }

}
