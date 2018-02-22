<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyReportEveningsTable extends Migration
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
            $table->string('DoctorNamePm');
            $table->string('specialist');
            $table->string('code');
            $table->string('note');
            $table->string('publicNote');
            $table->string('withDoctor');
            $table->string('Km');
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
