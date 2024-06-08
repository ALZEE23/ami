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
        Schema::create('analisis_twos', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->text('kekuatan');
            $table->text('kelemahan');
            $table->text('peluang');
            $table->text('strategi_peluang_kekuatan');
            $table->text('strategi_kelemahan_peluang');
            $table->text('ancaman');
            $table->text('strategi_ancaman_kekuatan');
            $table->text('strategi_kelemahan_ancaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analisis_twos');
    }
};
