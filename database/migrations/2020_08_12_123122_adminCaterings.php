<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminCaterings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminCatering', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('nombre');
            $table->string('tel');
            $table->string('email');
            $table->string('tipo');
            $table->string('facebook');
            $table->string('instagram');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_catering');
    }
}
