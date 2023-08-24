<?php

namespace App\Http\Requests;

use App\Models\Prodi;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProdiRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('prodi_edit');
    }

    public function rules()
    {
        return [
            'nama' => [
                'string',
                'required',
            ],
        ];
    }
}