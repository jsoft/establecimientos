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
        Schema::create('localities', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2024_11_04_232246_create_localities_table.php
            $table->string('name');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
=======
            $table->foreignId('ciudad_id')->constrained('ciudades')->onDelete('cascade');
            $table->string('nombre', 45);
>>>>>>> 84e8e23e6acf4f5f1ef51443fe0b20871f748b56:database/migrations/2024_10_20_060638_create_barrios_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localities');
    }
};
