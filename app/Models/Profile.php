<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
//    public function posts()
//    {
//        return $this->hasMany(Post::class);
//    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//    public function comments()
//    {
//        return $this->hasMany(Comment::class);
//    }
    public function profileable()
    {
        return $this->morphTo();
    }
    public function likedPosts()
    {
        return $this->morphedByMany(Post::class,'likeable');
    }
    public function likedComments()
    {
        return $this->morphedByMany(Comment::class,'likeable');
    }
}