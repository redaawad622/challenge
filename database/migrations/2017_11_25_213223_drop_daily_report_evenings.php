<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropDailyReportEvenings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('daily_report_evenings');            //

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            //
        Schema::dropIfExists('daily_report_evenings');
    }
}
