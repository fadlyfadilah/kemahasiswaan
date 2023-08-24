@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.semester.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.semesters.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.semester.fields.id') }}
                        </th>
                        <td>
                            {{ $semester->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.semester.fields.mahasiswa') }}
                        </th>
                        <td>
                            {{ $semester->mahasiswa->nama ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.semester.fields.tahunangkatan') }}
                        </th>
                        <td>
                            {{ $semester->tahunangkatan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.semester.fields.semester') }}
                        </th>
                        <td>
                            {{ $semester->semester }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.semester.fields.frs') }}
                        </th>
                        <td>
                            {{ $semester->frs }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.semester.fields.sks') }}
                        </th>
                        <td>
                            {{ $semester->sks }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.semester.fields.ipsfile') }}
                        </th>
                        <td>
                            {{ $semester->ipsfile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.semester.fields.ips') }}
                        </th>
                        <td>
                            {{ $semester->ips }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.semesters.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection