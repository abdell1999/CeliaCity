<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Se usa increments para que el la clave primaria sea autoincrementable.
     * El segundo apellido es algo opcional ya que no se da en todos los paises
     *El correo y los números de teléfono (el fijo es opcional) deben de ser únicos, es decir no puede
     *haber varios usuarios con el mismo número
     *El rol lo controlamos con un número 0->ADMIN y 1->USER
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname1');
            $table->string('surname2')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone', 9)->nullable()->unique();
            $table->string('movilphone', 9)->unique();
            $table->date('borndate');
            $table->string('photo');
            $table->string('address');
            $table->unsignedSmallInteger('rol');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
