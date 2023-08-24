@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.perguruanTinggi.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.perguruan-tinggis.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.perguruanTinggi.fields.id') }}
                        </th>
                        <td>
                            {{ $perguruanTinggi->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.perguruanTinggi.fields.nama') }}
                        </th>
                        <td>
                            {{ $perguruanTinggi->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.perguruanTinggi.fields.prodi') }}
                        </th>
                        <td>
                            @foreach($perguruanTinggi->prodis as $key => $prodi)
                                <span class="label label-info">{{ $prodi->nama }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.perguruan-tinggis.index') }}">
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
            <a class="nav-link" href="#perguruan_mahasiswas" role="tab" data-toggle="tab">
                {{ trans('cruds.mahasiswa.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="perguruan_mahasiswas">
            @includeIf('admin.perguruanTinggis.relationships.perguruanMahasiswas', ['mahasiswas' => $perguruanTinggi->perguruanMahasiswas])
        </div>
    </div>
</div>

@endsection