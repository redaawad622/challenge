<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyReportMorningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_report_mornings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DirNameAm');
            $table->string('DoctorAm');
            $table->string('pharmacianAm');
            $table->string('pharmacyAm');
            $table->string('publicNote');
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
        Schema::dropIfExists('daily_report_mornings');
    }
}
