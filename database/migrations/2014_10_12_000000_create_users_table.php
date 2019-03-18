<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up () {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar')->default('default.jpg');
            $table->string('name');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('lugar');
            $table->string('trabajo');
            $table->string('direccion');
            $table->string('observacion');
            $table->string('email');
            $table->string('telefono');
            $table->string('rol');
            $table->boolean('estado');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down () {
        Schema::dropIfExists('users');
    }
}
