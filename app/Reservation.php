<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Car;


class Reservation extends Model
{
    public function Client()
    {
       return $this->belongsTo('App\User','client_id','id');
    }

    public function Car()
    {
      return $this->hasOne('App\Car','id','car_id');
    }

    public function  reservationID($length) {
        $key = '';
        $keys = array_merge(range(0, 9),range('A', 'Z'));
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $key;
    }



}
