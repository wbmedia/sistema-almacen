<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('features');
            $table->string('unit');
            $table->float('stock');
            $table->text('note');
            $table->enum('state', ['New', 'Used', 'Sploit', 'Defect']);

            $table->unsignedBigInteger('category_active_id')->unsigned();
            $table->unsignedBigInteger('location_id')->unsigned();
            $table->foreign('category_active_id')->references('id')
                ->on('category_actives')->onDelete('cascade');
            $table->foreign('location_id')->references('id')
                ->on('locations')->onDelete('cascade');

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
        Schema::dropIfExists('actives');
    }
}
