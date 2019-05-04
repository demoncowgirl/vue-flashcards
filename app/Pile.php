<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pile extends Model
{
    public function user() {
		return $this->belongsTo('App\User', 'pile_id');
}
