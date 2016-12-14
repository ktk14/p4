<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function oils() {

	   return $this->hasMany('App\Oil');
   }
}
