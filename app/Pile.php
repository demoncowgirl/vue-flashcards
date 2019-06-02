<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pile extends Model
{

  public function words()
    {
        return $this->hasMany('App\Word');
    }
  public function user()
    {
        return $this->belongsTo('App\User');
    }

}
