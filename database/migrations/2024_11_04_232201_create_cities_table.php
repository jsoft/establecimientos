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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2024_11_04_232201_create_cities_table.php
            $table->string('name');
=======
            $table->foreignId('departamento_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('nombre', 45);
>>>>>>> 84e8e23e6acf4f5f1ef51443fe0b20871f748b56:database/migrations/2024_10_17_173488_create_ciudades_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
