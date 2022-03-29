<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyOnSoortToDierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dier', function (Blueprint $table) {
            $table->foreign('diersoort')->references('soort')->on('soorten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dier', function(Blueprint $table){
            $table->dropForeign('dier_diersoort_foreign');
        });
    }
}
