<?php

namespace App\Http\Requests;

use App\Models\Semester;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSemesterRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('semester_edit');
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
            'frs' => [
                'string',
                'nullable',
            ],
            'sks' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'ipsfile' => [
                'string',
                'nullable',
            ],
            'ips' => [
                'string',
                'nullable',
            ],
        ];
    }
}