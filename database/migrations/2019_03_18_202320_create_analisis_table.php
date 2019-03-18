<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analisis', function (Blueprint $table) {
            $table->increments('id');
             $table->string('categoria')->nullable();
            $table->string('determinacion')->nullable();
            $table->string('botella')->nullable();
            $table->string('volumen_gastado')->nullable();
            $table->string('factor_dilucion')->nullable();
            $table->string('volumen_calculado')->nullable();
             $table->string('resultado')->nullable();
               $table->string('estado')->nullable();
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
        Schema::dropIfExists('analisis');
    }
}
