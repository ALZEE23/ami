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
        Schema::create('sasaran_smarts', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->text('dimensi');
            $table->text('sub_dimensi');
            $table->text('sasaran');
            $table->text('dasar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sasaran_smarts');
    }
};
