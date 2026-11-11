<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\PerangkatDaerah;
use App\Models\KendaraanDinasOperasional;


class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
        'golongan',
        'perangkat_daerah_id'
    ];

    protected $casts = [
        'nip' => 'string',
    ];

    public function perangkatDaerah(): BelongsTo
    {
        return $this->belongsTo(
            PerangkatDaerah::class,
            'perangkat_daerah_id',
            'id'
        );
    }

    public function kendaraanDinas(): HasMany
    {
        return $this->hasMany(
            KendaraanDinasOperasional::class,
            'pegawai_id',
            'id'
        );
    }
}