<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPilotoIdToNavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('naves', function (Blueprint $table) {
            $table->bigInteger('piloto_id')->unsigned();
            $table
                ->foreign('piloto_id')
                ->references('id')
                ->on('pilotos')
                ->after('name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('naves', function (Blueprint $table) {
            //
        });
    }
}
