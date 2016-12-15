<?php

use Illuminate\Database\Seeder;
use \App\Order;
use \App\User;

class OilsTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $order_id = Order::where('title','=','Okay')->pluck('id')->first();
        DB::table('oils')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Frankincense',
            'order_id' => $order_id,
            'user_id' => 1,
        ]);
        $order_id = Order::where('title','=','Next Month')->pluck('id')->first();
        DB::table('oils')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Jade Lemon',
            'order_id' => $order_id,
            'user_id' => 1,
        ]);
        $order_id = Order::where('title','=','Never Again')->pluck('id')->first();
        DB::table('oils')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Myrrh',
            'order_id' => $order_id,
            'user_id' => 1,
        ]);
        $order_id = Order::where('title','=','Okay')->pluck('id')->first();
        DB::table('oils')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Brain Power',
            'order_id' => $order_id,
            'user_id' => 1,
        ]);
    }
}
