<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',200);
            $table->string('apellido',200);
            $table->string('edad',200);
            $table->string('telefono',200);
            $table->string('alergias',200);
            $table->string('padecimientos_previos',200);
            $table->string('intervenciones_previas',200);
            $table->unsignedBigInteger('id_tipos_sangres');
            $table->foreign('id_tipos_sangres')->references('id')->on('tipos_sangres');
            $table->unsignedBigInteger('id_sexos');
            $table->foreign('id_sexos')->references('id')->on('sexos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}

