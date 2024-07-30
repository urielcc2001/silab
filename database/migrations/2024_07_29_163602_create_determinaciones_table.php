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
        Schema::create('determinaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_muestra_id')->constrained('tipos_muestra')->onDelete('cascade');
            $table->string('nombre', 100); // Ejemplo: pH, Conductividad Eléctrica, Materia Orgánica, Textura
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('determinaciones');
    }
};
