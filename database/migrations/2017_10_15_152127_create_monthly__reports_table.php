<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthlyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly__reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('date_num');
            $table->string('day_name');
            $table->string(' route_pm');
            $table->string('doctors_pm');
            $table->string('pharma_pm');
            $table->string(' route_am');
            $table->string('station_h_am');
            $table->string('station_m_am');
            $table->string('station_w_am');
            $table->string('doctors_num_h_am');
            $table->string('doctors_num_m_am');
            $table->string('doctors_num_w_am');
            $table->string('egption_pranch');
            $table->string('actual_paid');
            $table->integer('user_id');
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
        Schema::dropIfExists('monthly__reports');
    }
}
