<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [ 'destination', 'short_name', ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function flightroute()
    {
        return $this->hasMany('App\FlightRoute');
    }
}
