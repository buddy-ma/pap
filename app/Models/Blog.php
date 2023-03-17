<?php

namespace App\Models;

use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    use SoftDeletes, Likeable;

    protected static function booted()
    {
        static::addGlobalScope('adminScope', function (Builder $builder) {
            if (!Auth::guard('web')->user()->hasRole('Administrator')) {
                $builder->where('user_id', Auth::id());
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class, 'blog_has_categories');
    }
}
