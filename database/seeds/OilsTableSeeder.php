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
        $order_id = Order::where('title','=','Not Now')->pluck('id')->first();
        DB::table('oils')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Frankincense',
            'bottle' => 'https://static.youngliving.com/productimages/large/3548.jpg',
            'order_id' => $order_id,
            'user_id' => 1,
        ]);
        $order_id = Order::where('title','=','Next Month')->pluck('id')->first();
        DB::table('oils')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Jade Lemon',
            'bottle' => 'https://static.youngliving.com/productimages/large/4685.jpg',
            'order_id' => $order_id,
            'user_id' => 1,
        ]);
        $order_id = Order::where('title','=','Never Again')->pluck('id')->first();
        DB::table('oils')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Myrrh',
            'bottle' => 'https://static.youngliving.com/productimages/large/3593.jpg',
            'order_id' => $order_id,
            'user_id' => 1,
        ]);
        $order_id = Order::where('title','=','Not Now')->pluck('id')->first();
        DB::table('oils')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Brain Power',
            'bottle' => 'https://static.youngliving.com/productimages/large/3313.jpg',
            'order_id' => $order_id,
            'user_id' => 1,
        ]);
        $order_id = Order::where('title','=','Immediately')->pluck('id')->first();
        DB::table('oils')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Stress Away',
            'bottle' => 'https://static.youngliving.com/productimages/large/4630.jpg',
            'order_id' => $order_id,
            'user_id' => 1,
        ]);
    }
}
