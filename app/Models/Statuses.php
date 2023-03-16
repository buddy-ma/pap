<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
    protected $fillable = ['title', 'color', 'sort'];

    use HasFactory;
}