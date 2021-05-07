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


     public function getRouteKeyName()
    {
        return 'slug';
    }


     public function categories()
     {
         return $this->hasMany(Categorie::class);
     }
}
