<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'img',
     ];


     public function getRouteKeyName()
    {
        return 'slug';
    }

     public function forum()
     {
         return $this->belongsTo(Forum::class);
     }

     public function topics()
     {
         return $this->hasMany(Topic::class);
     }


}
  