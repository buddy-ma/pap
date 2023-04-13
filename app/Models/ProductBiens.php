<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBiens extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'title', 'price', 'surface'];


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}