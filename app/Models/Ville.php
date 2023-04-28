<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'ville_id');
    }

    public function links()
    {
        return $this->hasMany(VilleLinks::class, 'ville_id');
    }
}