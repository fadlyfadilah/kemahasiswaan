@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.mahasiswa.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.mahasiswas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.id') }}
                        </th>
                        <td>
                            {{ $mahasiswa->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.nim') }}
                        </th>
                        <td>
                            {{ $mahasiswa->nim }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.nama') }}
                        </th>
                        <td>
                            {{ $mahasiswa->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.perguruan') }}
                        </th>
                        <td>
                            {{ $mahasiswa->perguruan->nama ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.prodi') }}
                        </th>
                        <td>
                            {{ $mahasiswa->prodi->nama ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.alamat') }}
                        </th>
                        <td>
                            {{ $mahasiswa->alamat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.email') }}
                        </th>
                        <td>
                            {{ $mahasiswa->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.nohp') }}
                        </th>
                        <td>
                            {{ $mahasiswa->nohp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.poto') }}
                        </th>
                        <td>
                            <img src="{{ $mahasiswa->getImage() }}" alt="Poto" width="15%"> 
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mahasiswa.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Mahasiswa::STATUS_SELECT[$mahasiswa->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.mahasiswas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#mahasiswa_semesters" role="tab" data-toggle="tab">
                {{ trans('cruds.semester.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="mahasiswa_semesters">
            @includeIf('admin.mahasiswas.relationships.mahasiswaSemesters', ['semesters' => $mahasiswa->mahasiswaSemesters])
        </div>
    </div>
</div>

@endsection