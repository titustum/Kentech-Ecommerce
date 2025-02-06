<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName',
        'category_id', // Foreign key for category
        'brandName',
        'price',
        'salePrice',
        'stock',
        'specifications',
        'description',
        'productImages',
        'productVideo',
    ];

    protected $casts = [
        'productImages' => 'array',
    ];

    /**
     * A product belongs to a category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Accessor to get product images as an array
    public function getProductImagesAttribute($value)
    {
        return json_decode($value);  // Assuming productImages is stored as a JSON array in the DB
    }
}

