<?php

namespace App\Http\Requests\PerangkatDaerah;

use Illuminate\Foundation\Http\FormRequest;

class StorePerangkatDaerahRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama_instansi' => [
                'required',
                'string',
                'max:100',
            ],
        ];
    }
}
