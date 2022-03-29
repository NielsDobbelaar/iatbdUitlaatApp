<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dier', function (Blueprint $table) {
            $table->id();
            $table->string("naam");
            $table->string("diersoort");
            $table->date("start-datum");
            $table->date("eind-datum");
            $table->integer("uurtarief");
            $table->string("beschrijving");
            $table->string("foto")->default('/img/default_dier.jpg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dier');
    }
}