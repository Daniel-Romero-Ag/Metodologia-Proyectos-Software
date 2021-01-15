<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pacientes');
            $table->foreign('id_pacientes')->references('id')->on('pacientes');
            $table->unsignedBigInteger('id_doctores');
            $table->foreign('id_doctores')->references('id')->on('doctores');
            $table->date('fecha');
            $table->time('hora');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
