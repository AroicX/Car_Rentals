<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    private $car_name;

    protected $fillable = [
      'car_name',
      'car_type',
      'car_model',
      'car_color',
      'gear_type',
      'car_documents',
      'size_of_tyre',
      'plate_num',
      'hire_cost',
      'capacity',
      'engine_num',
      'year_of_make',
      'description',
      'image',
      'ac',
      'fuel',
      // 'status',
    ];

    public function Client(User $user)
  {
      return $this->belongsTo('App\User');
  }

  public function Reservation()
  {
     return $this->hasMany('App\Reservation');
  }


}
