<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuestrasTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up () {
        Schema::create('muestras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha_ingreso');
            $table->string('fecha_toma_muestra');
            $table->integer('procedencia')->unsigned();
            $table->integer('tipo_muestra')->unsigned();
            $table->string('remitida_tomada');
            $table->integer('tipo_analisis')->unsigned();
            $table->string('descripcion')->nullable();
            $table->string('detalles')->nullable();
            $table->foreign('procedencia')->references('id')->on('procedencias')->onDelete('cascade');
            $table->foreign('tipo_muestra')->references('id')->on('tipomuestras')->onDelete('cascade');
            $table->foreign('tipo_analisis')->references('id')->on('tipoanalisis')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down () {
        Schema::dropIfExists('muestras');
    }
}
