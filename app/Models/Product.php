<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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

public function category()
{
    return $this->belongsTo(Category::class);
}

}
