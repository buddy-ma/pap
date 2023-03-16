<?php

namespace App\Models;

use App\Models\Toollink;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tool extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tools';

    protected $fillable = ['category', 'title', 'image', 'status'];

    public function tool_links()
    {
        return $this->hasMany(Toollink::class);
    }

}
