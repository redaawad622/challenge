<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeklyPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_plans', function (Blueprint $table) {
            $table->increments('id');

            $table->string('week_number');
            $table->string('day');
            $table->string('name_am');
            $table->string('name_pm');
            $table->string('starting_point_am');
            $table->string('starting_point_pm');
            $table->string('time_am');
            $table->string('time_pm');
            $table->string('user_id');
            $table->date('date');

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
        Schema::dropIfExists('weekly_plans');
    }
}
