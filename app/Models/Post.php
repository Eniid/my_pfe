<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;

    const EXCERPT_LENGTH = 600;

    protected $fillable = [
        'body',
     ];

     public function user()
     {
         return $this->belongsTo(User::class);
     }


     public function excerpt()
     {
         return Str::limit($this->body, Post::EXCERPT_LENGTH);
     }

     public function postable()
     {
         return $this->morphTo();
     }

     public function scopeLatestPost($query)
     {
         return $query->latest()->take(1);
     }

     public function likes()
     {
         return $this->belongsToMany(User::class, 'likes');
     }

}
