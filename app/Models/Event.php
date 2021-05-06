<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'part_description',
        'date',
        'place',
        'link',
     ];

     public function posts()
     {
         return $this->morphMany(Post::class, 'postable');
     }

     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
