<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectOrdersAndOils extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('oils', function (Blueprint $table) {

            $table->integer('order_id')->unsigned();
            
            $table->foreign('order_id')->references('id')->on('orders');

        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::table('oils', function (Blueprint $table) {

            $table->dropForeign('oils_order_id_foreign');
            $table->dropColumn('order_id');
        });
    }
}
