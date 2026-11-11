<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PegawaiResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nip' => (string) $this->nip,
            'nama' => $this->nama,
            'jabatan' => $this->jabatan,
            'golongan' => $this->golongan,

            'perangkat_daerah' => new PerangkatDaerahResource(
                $this->whenLoaded('perangkatDaerah')
            ),

            'kendaraan_dinas' => KendaraanDinasOperasionalResource::collection(
                $this->whenLoaded('kendaraanDinas')
            ),
        ];
    }
}