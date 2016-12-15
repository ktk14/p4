<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Illuminate\Validation\Rule;
use \App\User;
use \App\Order;
use \App\Oil;

class OilController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $user = $request->user();
        if($user) {
            $oils = $user->oils()->get();
        }
        else {
            $oils = [];
        }
        return view('oil.index')->with([
            'oils' => $oils
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $orders_for_dropdown = Order::getForDropdown();
        return view('oil.create')->with([
            'orders_for_dropdown' => $orders_for_dropdown,
        ]);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        # Validate
        $this->validate($request, [
            'name' => 'required|min:2',
        ]);

        $name = $request->input('name');

        $oil = new Oil();
        $oil->name = $request->input('name');
        $oil->order_id = $request->order_id;
        $oil->user_id = $request->user()->id;
        $oil->save();

        Session::flash('flash_message', 'Your oil '.$book->name.' was added.');

        return redirect('/oils');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $oil = Oil::find($id);

        if(is_null($oil)) {
            Session::flash('message', 'Oil not found');
            return redirect('/oils');
        }
        return view('oil.show')->with([
            'oil' => $oil,
        ]);
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $oil = Oil::find($id);

        # Order possibilities
        $orders_for_dropdown = Order::getForDropdown();

        return view('oil.edit')->with([
            'oil' => $oil,
            'orders_for_dropdown' => $orders_for_dropdown,
        ]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        # Validate
        $this->validate($request, [
            'name' => 'required|min:2',
        ]);

        # find oil and update
        $oil = Oil::find($request->id);
        $oil->name = $request->name;
        $oil->order_id = $request->order_id;
        $oil->save();

        Session::flash('flash_message', 'Your changes to'.$oil->name.' were saved.');
        return redirect('/oils');
    }

    public function delete($id) {

        $oil = Oil::find($id);

        return view('oil.delete')->with('oil', $oil);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $oil = Oil::find($id);

        if(is_null($oil)) {
            Session::flash('message','Oil not found.');
            return redirect('/oils');
        }

        $oil->delete();
        
        Session::flash('flash_message', $oil->name.' was deleted.');
        return redirect('/oils');
    }
}
