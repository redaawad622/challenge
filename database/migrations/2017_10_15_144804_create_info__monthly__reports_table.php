<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoMonthlyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info__monthly__reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pranch');
            $table->string('name');
            $table->string('place');
            $table->string('area');
            $table->string('km_start');
            $table->string('km_end');
            $table->string('km_consum');
            $table->string('km_paid');
            $table->string('total_samples');
            $table->string('paid_samples');
            $table->string('back_samples');
            $table->string('average_samples');
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
        Schema::dropIfExists('info__monthly__reports');
    }
}
