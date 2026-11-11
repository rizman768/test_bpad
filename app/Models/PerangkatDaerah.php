<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PerangkatDaerah extends Model
{
    protected $table = 'perangkat_daerah';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'nama_instansi',
    ];

    public function pegawai(): HasMany
    {
        return $this->hasMany(
            Pegawai::class,
            'perangkat_daerah_id',
            'id'
        );
    }
}
