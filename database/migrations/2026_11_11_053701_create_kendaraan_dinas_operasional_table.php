<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kendaraan_dinas_operasional', function (Blueprint $table) {
            $table->id();

            $table->string('nopol_kendaraan', 100)->nullable();
            $table->string('merek_kendaraan', 100)->nullable();
            $table->string('tipe_kendaraan', 100)->nullable();
            $table->string('tahun_produksi', 100)->nullable();
            $table->string('warna_kendaraan', 100)->nullable();
            $table->string('kondisi_kendaraan', 100)->nullable();

            $table->unsignedBigInteger('pegawai_id')->nullable();

            $table->foreign('pegawai_id')
                ->references('id')
                ->on('pegawai')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kendaraan_dinas_operasional');
    }
};
