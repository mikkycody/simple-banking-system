<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
                $table->increments('id');
                $table->string('loan_for');
                $table->integer('amount');
                $table->string('job_position');
                $table->string('job_date');
                $table->integer('income');
                $table->string('company');
                $table->boolean('is_granted')->default(0);
                $table->string('user_id');
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
        Schema::dropIfExists('loans');
    }
}
