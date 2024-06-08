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
        Schema::create('kesiapan_strukturs', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('komponen');
            $table->string('kondisi');
            $table->boolean('baik');
            $table->boolean('sedang');
            $table->boolean('buruk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesiapan_strukturs');
    }
};
