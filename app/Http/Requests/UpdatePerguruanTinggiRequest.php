<?php

namespace App\Http\Requests;

use App\Models\PerguruanTinggi;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePerguruanTinggiRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('perguruan_tinggi_edit');
    }

    public function rules()
    {
        return [
            'nama' => [
                'string',
                'required',
            ],
            'prodis.*' => [
                'integer',
            ],
            'prodis' => [
                'array',
            ],
        ];
    }
}