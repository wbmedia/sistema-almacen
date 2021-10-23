<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JobActives extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_job', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('active_id');
            $table->foreign('job_id')->references('id')
                ->on('jobs')->onDelete('cascade');
            $table->foreign('active_id')->references('id')
                ->on('actives')->onDelete('cascade');
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
        Schema::dropIfExists('active_job');
    }
}
