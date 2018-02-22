<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyReportFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_report_footers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hospital');
            $table->string('hospital_doctor');
            $table->string('medical_center');
            $table->string('medical_center_doctor');
            $table->string('clinic_doctor');
            $table->string('pharmacies');
            $table->string('aa');
            $table->string('ab');
            $table->string('ac');
            $table->string('ba');
            $table->string('bb');
            $table->string('bc');
            $table->string('ca');
            $table->string('cb');
            $table->string('cc');
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
        Schema::dropIfExists('daily_report_footers');
    }
}
