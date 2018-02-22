<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('A_mail1');
            $table->string('A_mail2');
            $table->string('A_num');
             $table->string('c_mail1');
            $table->string('c_mail2');
            $table->string('c_num');
            $table->string('p_mail1');
            $table->string('p_mail2');
            $table->string('p_num');

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
        Schema::dropIfExists('contacts');
    }
}
