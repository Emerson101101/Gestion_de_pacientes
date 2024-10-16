<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id('codigo_cita');
            $table->bigInteger('paciente')->unsigned();
            $table->foreign('paciente')->references('codigo_paciente')->on('paciente'); 
            $table->bigInteger('medico')->unsigned(); 
            $table->foreign('medico')->references('codigo_medico')->on('medico'); 
            $table->bigInteger('especialidad')->unsigned(); 
            $table->foreign('especialidad')->references('codico_especialidad')->on('especialidad'); 
            $table->date('fecha'); 
            $table->string('hora'); 
            $table->string('motivo'); 
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
        Schema::dropIfExists('citas');
    }
};
