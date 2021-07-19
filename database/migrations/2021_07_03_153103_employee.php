<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table){
            $table->id('id');
            $table->text('name');
            $table->text('address');
            $table->text('city');
            $table->text('state');
            $table->integer('zipcode');
            $table->string('employment_status');
            $table->string('gender');
            $table->string('department');
            $table->timestamps();
            //$table->unsignedBigInteger('user_id');
            //$table->foreign('user_id')->references('user_id')->on('users');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
