<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id',
     ];

     protected $table = 'event_user';

     public function event()
     {
         return $this->belongsTo(Event::class);
     }

     public function user()
     {
         return $this->belongsTo(User::class);
     }

}
