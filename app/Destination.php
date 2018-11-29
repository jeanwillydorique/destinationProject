<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    public function Hotel()
    {
        return $this->belongsTo('App\Hotel');
    }
    public function Company()
    {
        return $this->belongsTo('App\Company');
    }
    public function ArrivalAirport()
    {
        return $this->belongsTo('App\ArrivalAirport');
    }
    public function DepartureAirport()
    {
        return $this->belongsTo('App\DepartureAirport');
    }
    public function Type()
    {
        return $this->belongsTo('App\Type');
    }
    
}
