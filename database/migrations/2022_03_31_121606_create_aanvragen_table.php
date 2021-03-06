<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAanvragenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aanvragen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("oppasser");
            $table->foreign('oppasser')->references('id')->on('oppasser')->onDelete('cascade');
            $table->integer("dier");
            $table->string("naam");
            $table->string("geaccepteerd")->default('no');
            $table->foreign("geaccepteerd")->references('geaccepteerd')->on('geaccepteerd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aanvragen');
    }
}
