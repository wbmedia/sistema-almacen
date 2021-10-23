<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryActivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_actives', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Entry', 'Egress']);
            $table->float('amount');
            $table->string('responsible');
            $table->date('date');
            $table->text('note');

            $table->unsignedBigInteger('active_id');
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
        Schema::dropIfExists('history_actives');
    }
}
