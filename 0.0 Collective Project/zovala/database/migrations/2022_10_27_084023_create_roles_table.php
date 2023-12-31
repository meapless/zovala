<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//send 200 to john 
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',10);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()// deduct 200 from john 
    {
        Schema::dropIfExists('roles');
    }
}
