<?php

namespace App\Http\Requests\Pegawai;

use Illuminate\Foundation\Http\FormRequest;

class StorePegawaiRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:100'],
            'nip' => ['required', 'integer', 'unique:pegawai,nip'],
            'jabatan' => ['nullable', 'string', 'max:100'],
            'golongan' => ['nullable', 'string', 'max:100'],
            'perangkat_daerah_id' => [
                'nullable',
                'integer',
                'exists:perangkat_daerah,id',
            ],
        ];
    }
}
