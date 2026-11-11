<?php

namespace App\Http\Requests\KendaraanDinasOperasional;

use Illuminate\Foundation\Http\FormRequest;

class StoreKendaraanDinasOperasionalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nopol_kendaraan' => ['required', 'string', 'max:100'],
            'merek_kendaraan' => ['nullable', 'string', 'max:100'],
            'tipe_kendaraan' => ['nullable', 'string', 'max:100'],
            'tahun_produksi' => ['nullable', 'string', 'max:100'],
            'warna_kendaraan' => ['nullable', 'string', 'max:100'],
            'kondisi_kendaraan' => ['nullable', 'string', 'max:100'],
            'pegawai_id' => [
                'nullable',
                'integer',
                'exists:pegawai,id',
            ],
        ];
    }
}
