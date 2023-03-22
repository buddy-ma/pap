<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommercialiserContact extends Model
{
    protected $fillable = ['fullname', 'phone', 'email', 'message'];

    use HasFactory;
}
