
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PegawaiController;
use App\Http\Controllers\Api\PerangkatDaerahController;
use App\Http\Controllers\Api\KendaraanDinasOperasionalController;

Route::apiResource('pegawai', PegawaiController::class);
Route::apiResource('perangkat-daerah', PerangkatDaerahController::class);
Route::apiResource('kendaraan-dinas-operasional', KendaraanDinasOperasionalController::class);
Route::get(
    'perangkat-daerah/{perangkat_daerah}/kendaraan',
    [PerangkatDaerahController::class, 'kendaraan']
);
