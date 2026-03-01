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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();

            // relasi ke properties
            $table->foreignId('property_id')
                  ->nullable()
                  ->constrained('properties')
                  ->onDelete('cascade');

            $table->string('nama_gedung')->nullable();
            $table->string('area_id')->nullable();
            $table->text('alamat')->nullable();

            $table->string('luas_tanah')->nullable();
            $table->string('luas_gedung')->nullable();

            $table->string('status_tanah')->nullable();
            $table->string('penggunaan_saat_ini')->nullable();
            $table->string('peruntukan')->nullable();

            $table->text('batas_lahan')->nullable();
            $table->text('properti_sekitar')->nullable();

            $table->string('lebar_jalan')->nullable();
            $table->string('bentuk_lahan')->nullable();
            $table->string('lebar_lahan')->nullable();
            $table->string('kedalaman_lahan')->nullable();

            $table->text('potensi_pengembangan')->nullable();
            $table->string('jarak_pusat_kota')->nullable();
            $table->text('kondisi_lahan')->nullable();

            $table->string('titik_koordinat')->nullable();
            $table->string('space_idle_gedung')->nullable();
            $table->text('fasilitas')->nullable();
            $table->string('gambar')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};
