<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminEvento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('mozos');
            $table->string('seña');
            $table->integer('montoTotal');

            // RELACIONES CON CLIENTE Y EVENTO
            // cliente: id, telef, email, nombre, ape
            // evento: id, fecha, imagen_seña, hora_evento,
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_evento');
    }
}
