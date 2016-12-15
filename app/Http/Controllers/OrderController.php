<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \App\User;
use \App\Order;
use \App\Oil;

class OrderController extends Controller
{
    // Get oils associated with order

	public function index(Request $request)
	{
/*
		$user = $request->user();
        if($user) {
            $oils = Oil::where('user_id', '=', $user->id)->orderBy('id', 'DESC')->get();
        }
        else {
            $oils = [];
        }
        return view('order.index')->with([
            'oils' => $oils
        ]); */

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

	}

	public function show($id)
	{
		$
		$oils = Oil::with('order')->get();
		foreach($oils as $oil) {
			$oil->order->title
		}
		return view('order.show')->with([
			'order' => $order,
			'oil' => $oil,
		]);
	}
}
