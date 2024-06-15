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
        Schema::create('setting_aplikasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_aplikasi');
            $table->string('daerah');
            $table->string('provinsi');
            $table->string('logo');
            $table->string('login');
            $table->string('lokasi');
            $table->string('lokasi_gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_aplikasis');
    }
};
