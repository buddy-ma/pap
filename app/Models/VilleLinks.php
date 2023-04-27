<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VilleLinks extends Model
{
    use HasFactory;

    public function ville()
    {
        return $this->belongsTo(Ville::class, 'ville_id');
    }

}