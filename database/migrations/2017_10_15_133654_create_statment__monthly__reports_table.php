<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatmentMonthlyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statment__monthly__reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('work_days_pa');
            $table->string('doctors_clinic_pa');
            $table->string('pharmacy_pa');
            $table->string('station_h_pa');
            $table->string('station_m_pa');
            $table->string('station_w_pa');
            $table->string('doctors_num_h_pa');
            $table->string('doctors_num_m_pa');
            $table->string('doctors_num_w_pa');
            $table->string('eg_pranch_pa');
            $table->string('work_days_ac');
            $table->string('doctors_clinic_ac');
            $table->string('pharmacy_ac');
            $table->string('station_h_ac');
            $table->string('station_m_ac');
            $table->string('station_w_ac');
            $table->string('doctors_num_h_ac');
            $table->string('doctors_num_m_ac');
            $table->string('doctors_num_w_ac');
            $table->string('eg_pranch_ac');
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
        Schema::dropIfExists('statment__monthly__reports');
    }
}
