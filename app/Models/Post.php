<?php

namespace App\Models;

use App\Observers\PostObserver;
use App\Traits\HasLog;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//#[ObservedBy(PostObserver::class)]
class Post extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function comments()
    {
        $this->morphMany(Comment::class,'commentable');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function log()
    {
        return $this->hasMany(Log::class);
    }

}
