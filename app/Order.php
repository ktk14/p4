<?php

namespace App;
use \App\Order;
use \App\Oil;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function oils() {

	   return $this->hasMany('App\Oil');
   }

   public static function getForDropdown() {
	   $orders = Order::orderBy('title', 'ASC')->get();

	   $orders_for_dropdown = [];
	   foreach($orders as $order) {
		   $orders_for_dropdown[$order->id] = $order->title;
	   }
	   return $orders_for_dropdown;
   }

}
