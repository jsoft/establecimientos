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
        Schema::create('valoraciones', function (Blueprint $table) {
            $table->id();
            $table->integer('calificacion');
            $table->comentario('direccion');
            $table->foreignId('usuario_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('establecimeinto_id')->nullable()->constrained('establecimientos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        Schema::dropIfExists('valoraciones');
    }
};
