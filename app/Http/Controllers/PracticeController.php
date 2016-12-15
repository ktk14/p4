<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Order;
use \App\Oil;

class PracticeController extends Controller
{
	public function example1() {
		$orders = DB::table('oils')->where([
			['user_id', '=', '1'],
			['order_id', '>', '0'],
			])->get();

		foreach($orders as $order) {
			 $order->order_id = title;
		}
	}
	public function example2() {
		$orders = Oil::where('user_id', '=', '1')->get();
 	   $oils_for_order = [];

 	   foreach($orders as $order) {
 		   //echo $oils_for_order[$order];
		   $oils_for_order[$order->id] = $order->;
		    dump($oils_for_order);
 	   }

		}




}
