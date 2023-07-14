<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_design', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('design_id');
            $table->unsignedInteger('order_id');
            
            $table->timestamps();

            $table->foreign('design_id')->references('id')->on('designs');
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
        Schema::dropIfExists('order_design');
    }
}
