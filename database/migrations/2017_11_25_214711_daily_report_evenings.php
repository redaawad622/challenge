<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DailyReportEvenings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_report_evenings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_m');
            $table->string('doctors_name');
            $table->string('specialty_m');
            $table->string('class_m');
            $table->string('clinic_address');
            $table->string('prd_f1');
            $table->string('prd_f2');
            $table->string('prd_r');
            $table->string('prd_d');
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
        Schema::dropIfExists('daily_report_evenings');
    }
}
