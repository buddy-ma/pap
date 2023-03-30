<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class, 'proprietaire_id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImages::class);
    }

    public function contacts()
    {
        return $this->hasMany(ProductContact::class);
    }

    public function first_image()
    {
        return $this->images()->first();
    }

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('products.title', 'like', $term)
                ->orWhere('products.description', 'like', $term);
        });
    }
}