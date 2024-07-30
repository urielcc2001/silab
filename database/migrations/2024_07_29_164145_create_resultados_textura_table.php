<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resultados_textura', function (Blueprint $table) {
            $table->id();
            $table->foreignId('determinacion_id')->constrained('determinaciones')->onDelete('cascade');
            $table->float('temperatura1');
            $table->float('temperatura2');
            $table->float('lectura1');
            $table->float('lectura2');
            $table->float('peso_suelo');
            $table->float('peso_grava');
            $table->float('resultado'); // Nueva columna para guardar el resultado de la operación
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados_textura');
    }
};
