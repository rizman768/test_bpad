<?php

namespace App\Http\Requests\KendaraanDinasOperasional;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKendaraanDinasOperasionalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nopol_kendaraan' => ['sometimes', 'required', 'string', 'max:100'],
            'merek_kendaraan' => ['sometimes', 'nullable', 'string', 'max:100'],
            'tipe_kendaraan' => ['sometimes', 'nullable', 'string', 'max:100'],
            'tahun_produksi' => ['sometimes', 'nullable', 'string', 'max:100'],
            'warna_kendaraan' => ['sometimes', 'nullable', 'string', 'max:100'],
            'kondisi_kendaraan' => ['sometimes', 'nullable', 'string', 'max:100'],
            'pegawai_id' => [
                'sometimes',
                'nullable',
                'integer',
                'exists:pegawai,id',
            ],
        ];
    }
}
