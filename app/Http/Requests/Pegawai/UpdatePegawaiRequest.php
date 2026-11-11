<?php

namespace App\Http\Requests\Pegawai;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePegawaiRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $pegawaiId = $this->route('pegawai');

        return [
            'nama' => ['sometimes', 'required', 'string', 'max:100'],
            'nip' => [
                'sometimes',
                'required',
                'integer',
                Rule::unique('pegawai', 'nip')->ignore($pegawaiId, 'id'),
            ],
            'jabatan' => ['sometimes', 'nullable', 'string', 'max:100'],
            'golongan' => ['sometimes', 'nullable', 'string', 'max:100'],
            'perangkat_daerah_id' => [
                'sometimes',
                'nullable',
                'integer',
                'exists:perangkat_daerah,id',
            ],
        ];
    }
}
