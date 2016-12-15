<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \App\User;
use \App\Order;
use \App\Oil;

class OrderController extends Controller
{
    // Get orders associated with user

	public function index(Request $request)
	{


		$user = $request->user();
        if($user) {
			$orders = Order::where('user_id', '=', $user->id)->orderBy('title', 'ASC')->get();
        }
        else {
            $orders = [];
        }
        return view('order.index')->with([
            'orders' => $orders
        ]);

/*

		$user = $request->user();
        if($user) {
            $oils = $user->oils()->get();
			$oils_for_this_order = [];
			foreach($order->oils as $oil) {
				$oils_for_this_order[] = $oil->name;
			}
        }
        else {
            $oils = [];
        }
        return view('order.index')->with([
            'oils' => $oils,
			'oils_for_this_order' => $oils_for_this_order,
        ]);
*/
	}

	public function show($id)
	{
	/*
		$order = Order::find($id);

		if(is_null($order)) {
			Session::flash('message', 'Order not found');
			return redirect('/orders');
		}
		return view('order.show')->with([
			'order' => $order,
		]);*/
	}
}
