<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable'); // _id, _type
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable'); // _id, _type
    }
}
