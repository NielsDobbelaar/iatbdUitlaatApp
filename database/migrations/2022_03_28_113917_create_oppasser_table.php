<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOppasserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oppasser', function (Blueprint $table) {
            $table->id();
            $table->string("naam");
            $table->string("email");
            $table->string("foto")->default('/img/default_home.jpg');
            $table->string("beschrijving");
            $table->integer('user')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oppasser');
    }
}
