<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'image',
        'price',
        'discount',
        'rating',
        'description',
    ];

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Get the final price after discount
    public function getFinalPriceAttribute()
    {
        return $this->price * (1 - $this->discount / 100);
    }
}
