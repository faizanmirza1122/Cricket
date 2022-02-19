<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'json',
    ];

    protected $fillable = ['product_name', 'featured_image', 'product_category', 'product_size', 'product_color', 'product_quantity', 'images', 'product_price', 'product_description', 'slug'];
}
