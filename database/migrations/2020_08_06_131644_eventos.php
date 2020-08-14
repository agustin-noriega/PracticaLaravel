<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('eventos', function (Blueprint $table) {
          $table->bigIncrements('id');

          $table->date('fechaEvento');
          $table->string('tipoEvento');
          $table->string('agasajado');
          $table->string('padres');
          $talbe->string('colegio');
          $table->integer('edad');
          $table->string('rangoHora'); // sera MedioDoa. Tarde y Noche.
          $table->string('horaEvento');// MedioDia(12.30a17)Tarde(18a22)Noche(19a24)
          $table->integer('cantNinios');
          $table->integer('cantAdultos');
          $table->string('entret');
          $table->string('catering');
          $table->text('observaciones');
          $table->string('imagen',500);

          // RELACIONES CON CLIENTE: id, nombre_ape, fechaNaci


          /*$table->unsignedBigInteger('users_id');
          $table->foreign('users_id')->references('id')->on('users');

          $table->unsignedBigInteger('post_categories_id');
          $table->foreign('post_categories_id')->references('id')->on('post_categories');*/

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
        //
    }
}
