<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    protected $table = 'designs';

    protected $fillable = ['category_id', 'type', 'title', 'description', 'client', 'image', 'date', 'link', 'status', 'sort'];

    public function Category()
    {
        return $this->hasOne(DesignCategory::class, 'id', 'category_id');
    }

    public function gettype($design, $type)
    {
        return $type == $design ? 1 : 0;
    }
}