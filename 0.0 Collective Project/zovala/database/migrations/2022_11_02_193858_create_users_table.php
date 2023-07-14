<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id',10);
            $table->string('surName',50);
            $table->string('otherNames',200);
            $table->string('username',50);
            $table->tinyInteger('gender');
            $table->string('phoneNumber',20);
            $table->string('email',200);
            $table->text('password');
            $table->text('otp');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('town_id');
            $table->timestamps();
               // fk for roleId 
            $table->foreign('role_id')->references('id')->on('roles');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
