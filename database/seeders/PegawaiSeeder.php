<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pegawai')->insert([
            [
                'nip' => '198805152010011001',
                'nama' => 'Budi Santoso',
                'jabatan' => 'Pranata Komputer',
                'golongan' => 'III/c',
                'perangkat_daerah_id' => 1,
            ],
            [
                'nip' => '199001012015011002',
                'nama' => 'Andi Saputra',
                'jabatan' => 'Analis Data',
                'golongan' => 'III/b',
                'perangkat_daerah_id' => 1,
            ],
            [
                'nip' => '199205102018011003',
                'nama' => 'Dewi Lestari',
                'jabatan' => 'Analis Kebijakan',
                'golongan' => 'III/a',
                'perangkat_daerah_id' => 2,
            ],
        ]);
    }
}
