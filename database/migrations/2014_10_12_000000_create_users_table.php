<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //Integer Unsigned Increment
            $table->string('name'/*,100*/); //Varchar (255)
            $table->string('email')->unique(); //varchar 255 unico
            $table->timestamp('email_verified_at')->nullable(); //columna timestamp activa verificacion de correos (pone la fecha de verificacion) nullable
            $table->string('password'); //varchar 255
            $table->rememberToken(); //varchar 100 (se almacena el token de sesion)
            $table->timestamps(); //created-at updated-at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
