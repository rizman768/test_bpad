<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KendaraanDinasOperasional extends Model
{
    protected $table = 'kendaraan_dinas_operasional';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nopol_kendaraan',
        'merek_kendaraan',
        'tipe_kendaraan',
        'tahun_produksi',
        'warna_kendaraan',
        'kondisi_kendaraan',
        'pegawai_id'
    ];

    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(
            Pegawai::class,
            'pegawai_id',
            'id'
        );
    }
}
