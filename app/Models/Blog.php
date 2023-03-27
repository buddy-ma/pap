<?php

namespace App\Models;

use Conner\Likeable\Likeable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes, Likeable;

    protected static function booted()
    {
        if (Request::is('admin') || Request::is('admin/*') || Auth::guard() == 'web') {
            static::addGlobalScope('adminScope', function (Builder $builder) {
                if (!Auth::guard('web')->user()->hasRole('Administrator')) {
                    $builder->where('user_id', Auth::id());
                }
            });
        }
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

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function ($query) use ($term) {
            $query->where('blogs.title', 'like', $term)
                ->orWhere('blogs.subtitle', 'like', $term)
                ->orWhere('blogs.text', 'like', $term)
                ->orWhere('blogs.tags', 'like', $term);
        });
    }

    // public function scopeSimilaires($query, $count = 3)
    // {
    //     dd($query->category_id);
    //     $category = Categorie::find($query->category_id);
    //     $query = $query->where('category_id', $this->category_id)
    //         ->where('slug', '!=', $this->slug);

    //     return $query->take($count);
    // }
}
