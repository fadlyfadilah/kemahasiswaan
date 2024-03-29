<?php

namespace App\Http\Requests;

use App\Models\Semester;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSemesterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('semester_create');
    }

    public function rules()
    {
        return [
            'tahunangkatan' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'semester' => [
                'string',
                'nullable',
            ],
            'sks' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'ips' => [
                'string',
                'nullable',
            ],
        ];
    }
}