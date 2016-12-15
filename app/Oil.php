<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oil extends Model
{
	public function order() {
		return $this->belongsTo('App\Order');
	}

	public function user() {
		return $this->belongsTo('App\User');
	}
}
