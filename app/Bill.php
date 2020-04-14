<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function reserve()
    {
        return $this->hasOne('App\Reservation');
    }
}
