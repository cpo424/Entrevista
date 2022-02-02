<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naves', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            /*$table->string('model')->nullable();
            $table->string('manufacturer')->nullable();
            $table->integer('cost_in_credits')->nullable();
            $table->integer('length')->nullable();
            $table->integer('max_atmosphering_speed')->nullable();
            $table->string('crew')->nullable();
            $table->integer('passengers')->nullable();
            $table->integer('cargo_capacity')->nullable;
            $table->string('consumables')->nullable;
            $table->string('hyperdrive_rating')->nullable;
            $table->integer('MGLT')->nullable;
            $table->string('starship_class')->nullable;*/
            $table->date('created');
            $table->date('edited');
            /*$table->string('url')->nullable;*/
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
        Schema::dropIfExists('naves');
    }
}
