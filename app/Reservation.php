<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function room()
    {
        return $this->belongsTo('App\Room');
    }
    public function bill()
    {
        return $this->belongsTo('App\Bill');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'name', 'email','phonenumber','room_numbers', 'room_type' ,'check_in_date' ,'check_out_date',
    ];
}
