<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $guard = 'author';

    protected $fillable = [
        'id', 'firstname', 'lastname', 'name', 'phone', 'date_birth', 'email', 'password', 'adress', 'link_facebook', 'link_instagram', 'link_twiter', 'link_linkdin',
    ];


    protected $hidden  = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
