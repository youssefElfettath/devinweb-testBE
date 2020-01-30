<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";
    protected $primarykey = "id";

    public function delivery_times()
    {
        return $this->hasMany('App\Delivery_times', 'id', 'city_id');
    }
}
