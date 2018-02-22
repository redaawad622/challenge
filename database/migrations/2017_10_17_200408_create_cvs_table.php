<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title');
            $table->string('pr_email');
            $table->string('pr_fb');
            $table->string('pr_ln');
            $table->string('pr_other');
            $table->string('sk_name');
            $table->string('sk_ratio');
            $table->string('summary');

            $table->string('ex_name');
            $table->date('ex_date');
            $table->string('respons');
            $table->string('ed_name');
            $table->date('ed_date');
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
        Schema::dropIfExists('cvs');
    }
}
