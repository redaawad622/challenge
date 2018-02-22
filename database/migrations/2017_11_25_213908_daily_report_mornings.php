<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DailyReportMornings extends Migration
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
            $table->string('code_no');
            $table->string('doctor_name');
            $table->string('specialty');
            $table->string('pro_f1');
            $table->string('pro_f2');
            $table->string('pro_r');
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
