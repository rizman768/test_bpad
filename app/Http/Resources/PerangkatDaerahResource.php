<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PerangkatDaerahResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama_instansi' => $this->nama_instansi,
            'jumlah_pegawai' => $this->whenCounted('pegawai'),
        ];
    }
}