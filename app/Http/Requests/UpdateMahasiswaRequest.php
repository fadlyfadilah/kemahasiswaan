<?php

namespace App\Http\Requests;

use App\Models\Mahasiswa;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMahasiswaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('mahasiswa_edit');
    }

    public function rules()
    {
        return [
            'nim' => [
                'string',
                'required',
            ],
            'nama' => [
                'string',
                'required',
            ],
            'nik' => [
                'string',
                'required',
            ],
            'ttl' => [
                'string',
                'required',
            ],
            'perguruan_id' => [
                'required',
                'integer',
            ],
            'prodi_id' => [
                'required',
                'integer',
            ],
            'alamat' => [
                'required',
            ],
            'email' => [
                'required',
            ],
            'beasiswa' => [
                'string',
                'nullable',
            ],
            'nohp' => [
                'string',
                'nullable',
            ],
            'nama_ortu' => [
                'string',
                'required',
            ],
            'noortu' => [
                'string',
                'nullable',
            ],
            'poto' => [
                'string',
                'nullable',
            ],
        ];
    }
}