<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'short_description',
        'description',
        'price',
        'selling_price',
        'image',
        'gallery_image',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];

    // Category Relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Review Relationship
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    function carts()
    {
        return $this->hasMany(Cart::class);
    }
}