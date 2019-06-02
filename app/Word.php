<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
  public function pile()
  {
      return $this->belongsTo('App\Pile');
  }
}
