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
        Schema::table('valoraciones', function (Blueprint $table) {
            if (Schema::hasColumn('valoraciones', 'establecimeinto_id')) {
                $table->renameColumn('establecimeinto_id', 'establecimiento_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('valoraciones', function (Blueprint $table) {
            if (Schema::hasColumn('valoraciones', 'establecimiento_id')) {
                $table->renameColumn('establecimiento_id', 'establecimeinto_id');
            }
        });
    }
};
