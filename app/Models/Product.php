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

    public function ville()
    {
        return $this->belongsTo(ProductVille::class, 'product_ville_id');
    }

    public function quartier()
    {
        return $this->belongsTo(ProductQuartier::class, 'product_quartier_id');
    }

    public function images()
    {
        return $this->hasMany(ProductImages::class);
    }

    public function biens()
    {
        return $this->hasMany(ProductBiens::class);
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

    // public function scopeVilles($query, $count = 0)
    // {
    //     $villes = $query->pluck('ville')->toArray();
    //     $villes = implode(',', $villes);
    //     $villes = explode(',', $villes);
    //     $villes = array_filter($villes);
    //     if ($count != 0) {
    //         $villes = array_slice($villes, 0, $count);
    //     }
    //     $villes = array_unique($villes);
    //     return $villes;
    // }

    public function scopeQuartiers($query, $count = 0)
    {
        $quartiers = $query->pluck('quartier')->toArray();
        $quartiers = implode(',', $quartiers);
        $quartiers = explode(',', $quartiers);
        $quartiers = array_filter($quartiers);
        if ($count != 0) {
            $quartiers = array_slice($quartiers, 0, $count);
        }
        $quartiers = array_unique($quartiers);
        return $quartiers;
    }
}