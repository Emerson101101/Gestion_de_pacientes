<?php use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint; 
 use Illuminate\Support\Facades\Schema; 
 return new class extends Migration { 
    /** * Run the migrations. * * 
     * @return void 
     * */ public function up() 
     { Schema::create('reporte', function (Blueprint $table) { 
        $table->id('codigo_reporte'); 
        $table->bigInteger('paciente')->unsigned();
         $table->foreign('paciente')->references('codigo_paciente')->on('paciente'); 
         $table->bigInteger('medico')->unsigned(); 
         $table->foreign('medico')->references('codigo_medico')->on('medico'); 
         $table->timestamps(); });
         } 
         /** * Reverse the migrations. * 
          * * @return void 
          */
           public function down() {
             Schema::dropIfExists('reporte');
             } };