<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();

            $table->string('nama', 100)->nullable();
            $table->bigInteger('nip')->nullable()->unique();
            $table->string('jabatan', 100)->nullable();
            $table->string('golongan', 100)->nullable();

           $table->unsignedInteger('perangkat_daerah_id')->nullable();

            $table->foreign('perangkat_daerah_id')
                ->references('id')
                ->on('perangkat_daerah')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
