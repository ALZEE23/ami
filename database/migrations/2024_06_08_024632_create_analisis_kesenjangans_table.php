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
        Schema::create('analisis_kesenjangans', function (Blueprint $table) {
            $table->id();
            $table->string('dimensi');
            $table->string('kondisi');
            $table->string('tren');
            $table->string('gap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analisis_kesenjangans');
    }
};
