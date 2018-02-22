<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthlyPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly__plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date_num');
            $table->string('day');
            $table->string('location');
            $table->string('pharm');
            $table->string('time');
            $table->string('locationPm');
            $table->string('pharmPm');
            $table->string('timePm');
            $table->string('note');
            $table->date('date');
            $table->integer('user_id');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly__plans');
    }
}
