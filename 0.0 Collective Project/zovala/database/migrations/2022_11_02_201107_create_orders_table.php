<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer');
            $table->unsignedInteger('quanity');
            $table->unsignedInteger('price');
            $table->dateTime('recieved')->nullable();
            $table->dateTime('completed')->nullable();
            $table->unsignedFloat('amound_paid')->nullable();
            $table->unsignedInteger('tailor');
            $table->dateTime('preferred_date')->nullable();
            $table->string('occasion',200);
            $table->text('details');
            $table->timestamps();
            
            $table->foreign('customer')->references('id')->on('users');
            $table->foreign('tailor')->references('id')->on('users');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
