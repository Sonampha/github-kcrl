<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlightRoute extends Model
{
    protected $fillable = [ 'flight_code', 'origin_point', 'destin_point', 'depart_time', 'arrive_time', 'date_of_week',];

    public function destination()
    {
        return $this->belongsTo('App\Destination');
    }
}
