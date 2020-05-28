<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable = [
        'room_type', 'price', 'size', 'max_persons','view' ,'bed'
    ];
}
