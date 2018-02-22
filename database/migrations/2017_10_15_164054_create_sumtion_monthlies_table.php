<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSumtionMonthliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sumtion_monthlies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doc');
            $table->string('ph');
            $table->string('station_h');
            $table->string('station_m');
            $table->string('station_w');
            $table->string('num_h');
            $table->string('num_m');
            $table->string('num_w');
            $table->string('pr');
            $table->string('actual');
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
        Schema::dropIfExists('sumtion_monthlies');
    }
}
