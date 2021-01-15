<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiosProgramadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios_programados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estudio');
            $table->foreign('id_estudio')->references('id')->on('estudios');
            $table->unsignedBigInteger('id_paciente');
            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->string('fecha',200);
            $table->string('hora',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudios_programados');
    }
}
