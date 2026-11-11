<?php

namespace App\Http\Requests\PerangkatDaerah;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePerangkatDaerahRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama_instansi' => [
                'sometimes',
                'required',
                'string',
                'max:100',
            ],
        ];
    }
}
