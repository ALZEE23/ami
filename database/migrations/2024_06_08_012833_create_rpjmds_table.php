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
        Schema::create('rpjmds', function (Blueprint $table) {
            $table->id();
            $table->string('misi');
            $table->string('tujuan');
            $table->string('indikator_tujuan');
            $table->string('sasaran');
            $table->string('indikator_sasaran');
            $table->boolean('governance');
            $table->boolean('branding');
            $table->boolean('economy');
            $table->boolean('living');
            $table->boolean('society');
            $table->boolean('environment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpjmds');
    }
};
