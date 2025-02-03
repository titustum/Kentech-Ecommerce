<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'cover_image',
    ];

    // Relationship with products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Relationship for top products (assuming you have a "top_products" logic)
    public function top_products()
    {
        return $this->hasMany(Product::class)->orderBy('rating', 'desc'); // Example: get top products based on rating
    }

    // Accessor for the category URL
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
