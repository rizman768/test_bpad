<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KendaraanDinasOperasionalResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nopol_kendaraan' => $this->nopol_kendaraan,
            'merek_kendaraan' => $this->merek_kendaraan,
            'tipe_kendaraan' => $this->tipe_kendaraan,
            'tahun_produksi' => $this->tahun_produksi,
            'warna_kendaraan' => $this->warna_kendaraan,
            'kondisi_kendaraan' => $this->kondisi_kendaraan,

            'pegawai' => $this->whenLoaded('pegawai', function () {
                if (!$this->pegawai) {
                    return null;
                }

                return [
                    'id' => $this->pegawai->id,
                    'nip' => (string) $this->pegawai->nip,
                    'nama' => $this->pegawai->nama,
                ];
            }),
        ];
    }
}