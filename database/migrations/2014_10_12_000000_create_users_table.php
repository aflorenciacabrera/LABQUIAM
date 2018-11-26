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
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('email')->unique();
            $table->string('telefono')->nullable();
            $table->string('rol');
            $table->string('especialidad')->nullable();
            $table->boolean('estado')->default(false);
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
