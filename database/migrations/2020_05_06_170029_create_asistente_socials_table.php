<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsistenteSocialsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistente_socials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('dni');
            $table->string('matricula');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('foto');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asistente_socials');
    }
}
