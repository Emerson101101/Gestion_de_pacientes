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
        Schema::create('medicamento', function (Blueprint $table) {
            $table->id('codigo_medicamento');
            $table->string('nombre');
            $table->string('fechaI');
            $table->string('fechaV');
            $table->string('forma');//forma farmaceutica, si es tableta, clapusla, etc
            $table->string('imagen')->nullable(); 
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
        Schema::dropIfExists('medicamento');
    }
};
