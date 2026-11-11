<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanDinasOperasionalSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kendaraan_dinas_operasional')->insert([
            [
                'nopol_kendaraan' => 'B 1234 ABC',
                'merek_kendaraan' => 'Toyota',
                'tipe_kendaraan' => 'Innova',
                'tahun_produksi' => '2023',
                'warna_kendaraan' => 'Hitam',
                'kondisi_kendaraan' => 'Baik',
                'pegawai_id' => 1,
            ],
            [
                'nopol_kendaraan' => 'B 5678 DEF',
                'merek_kendaraan' => 'Mitsubishi',
                'tipe_kendaraan' => 'Pajero Sport',
                'tahun_produksi' => '2022',
                'warna_kendaraan' => 'Putih',
                'kondisi_kendaraan' => 'Baik',
                'pegawai_id' => 1,
            ],
            [
                'nopol_kendaraan' => 'B 9012 GHI',
                'merek_kendaraan' => 'Toyota',
                'tipe_kendaraan' => 'Avanza',
                'tahun_produksi' => '2021',
                'warna_kendaraan' => 'Silver',
                'kondisi_kendaraan' => 'Baik',
                'pegawai_id' => 2,
            ],
        ]);
    }
}
