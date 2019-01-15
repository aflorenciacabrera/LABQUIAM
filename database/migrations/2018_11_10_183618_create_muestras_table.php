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
            $table->string('procedencia');
            $table->string('tipo_muestra');
            $table->string('remitida_tomada');
            $table->string('tipo_analisis');
            $table->string('descripcion');
            $table->string('detalles');
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
