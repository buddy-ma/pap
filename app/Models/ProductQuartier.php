<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQuartier extends Model
{
    use HasFactory;

    public function ville()
    {
        return $this->belongsTo(ProductVille::class, 'product_ville_id');
    }
}