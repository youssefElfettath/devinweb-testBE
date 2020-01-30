<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery_times extends Model
{
    public function Delivery_times()
    {
        return $this->belongsTo('App\City', 'city_id', 'id');
    }
}
