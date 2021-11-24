<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_user');
            $table->Integer('id_pointofinterest');
            $table->date('date');
            $table->unsignedSmallInteger('valoration');
            $table->string('text');
            $table->timestamps();

            //$table->foreign('id_user')->references('id')->on('users');
            //$table->foreign('id_point')->references('id')->on('pointofinterest');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
