<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toollink extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'toollinks';

    protected $fillable = ['type', 'title', 'image', 'link', 'tags'];

    public function tool()
    {
        return $this->belongsTo(Tool::class, 'tool_id');
    }
}
