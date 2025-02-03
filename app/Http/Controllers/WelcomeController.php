<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // You can define this as a method that returns the welcome view
    public function index()
    {
        // Fetch featured products. You may want to mark them with a 'featured' flag or just get top products.
        //  $featuredProducts = Product::where('is_featured', true)->take(4)->get();
        $featuredProducts = Product::take(10)->get();

        $bestDeals = Product::take(3)->orderBy("discount", "desc")->get();

       // Fetch all categories
       $productCategories = Category::with('top_products')->get();

       // Fetch testimonials (You may have a 'Testimonial' model and table)
       $testimonials = Testimonial::latest()->take(3)->get(); // Get 3 latest testimonials

       // Pass the data to the view
       return view('welcome', [
           'featuredProducts' => $featuredProducts,
           'bestDeals' => $bestDeals,
           'productCategories' => $productCategories,
           'testimonials' => $testimonials,
       ]);
    }


}
