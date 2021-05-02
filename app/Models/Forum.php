<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

     protected $fillable = [
        'slug',
        'name',
     ];

     public function categorie()
     {
         return $this->hasMany(Categorie::class);
     }
}
