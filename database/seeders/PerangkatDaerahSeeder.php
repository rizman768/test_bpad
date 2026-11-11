<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerangkatDaerahSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('perangkat_daerah')->insert([
            ['nama_instansi' => 'Dinas Pekerjaan Umum'],
            ['nama_instansi' => 'Dinas Perhubungan'],
            ['nama_instansi' => 'Dinas Komunikasi dan Informatika'],
        ]);
    }
}
