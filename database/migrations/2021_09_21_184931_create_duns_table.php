<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duns', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parliament_id');
            $table->string('kerusi_id');
            $table->unsignedInteger('state_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('parliament_id')->references('id')->on('parliaments')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duns');
    }
}
