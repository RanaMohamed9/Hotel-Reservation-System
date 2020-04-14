<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function reserve()
    {
        return $this->hasMany('App\Reservation');
    }
}
