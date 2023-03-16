<?php

namespace App\Models;

use App\Models\ProductSize;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function ProductImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function ProductSizes()
    {
        return $this->hasMany(ProductSize::class)->orderBy('title', 'DESC');
    }
}