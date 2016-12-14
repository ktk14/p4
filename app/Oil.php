<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oil extends Model
{
	public function orders() {

	   return $this->belongsTo('App\Order');
   }
}
