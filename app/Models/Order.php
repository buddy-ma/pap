<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Statuses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->hasOne(Statuses::class, 'id', 'status_id');
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}