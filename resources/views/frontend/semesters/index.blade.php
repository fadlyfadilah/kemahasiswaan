@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        {{ trans('global.create') }} {{ trans('cruds.semester.title_singular') }}
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label class="required" for="nama">{{ trans('cruds.mahasiswa.fields.nama') }}</label>
                            <input disabled class="form-control" type="text" name="nama" id="nama"
                                value="{{ $mahasiswa->nama }}">
                        </div>
                        <div class="form-group">
                            <label class="required" for="prodi">Program Studi</label>
                            <input disabled class="form-control" type="text" name="prodi" id="prodi"
                                value="{{ $mahasiswa->prodi->nama }}">
                        </div>
                        <div class="form-group">
                            <label class="required" for="perguruan">Perguruan Tinggi</label>
                            <input disabled class="form-control" type="text" name="perguruan" id="perguruan"
                                value="{{ $mahasiswa->perguruan->nama }}">
                        </div>
                        <form method="POST" action="{{ route('frontend.semesters.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control" type="text" name="semester" hidden id="semester"
                                value="{{ $semesterr }}">
                            @if ($semester === null)
                                <div class="form-group">
                                    <label for="semester">{{ trans('cruds.semester.fields.semester') }}</label>
                                    <input class="form-control" type="text" disabled id="semester"
                                        value="{{ $semesterr }}">
                                    @if ($errors->has('semester'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('semester') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.semester.fields.semester_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="tahunangkatan">{{ trans('cruds.semester.fields.tahunangkatan') }}</label>
                                    <input class="form-control" type="number" name="tahunangkatan" id="tahunangkatan"
                                        value="{{ old('tahunangkatan', '') }}" step="1" required>
                                    @if ($errors->has('tahunangkatan'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tahunangkatan') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.semester.fields.tahunangkatan_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="" for="frs">{{ trans('cruds.semester.fields.frs') }}</label>
                                    <input class="form-control" type="file" name="frs" id="frs">
                                    @if ($errors->has('frs'))
                                        <span class="text-danger">{{ $errors->first('frs') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="sks">{{ trans('cruds.semester.fields.sks') }}</label>
                                    <input class="form-control" type="number" name="sks" id="sks"
                                        value="{{ old('sks', '') }}" step="1">
                                    @if ($errors->has('sks'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('sks') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.semester.fields.sks_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class=""
                                        for="ipsfile">{{ trans('cruds.semester.fields.ipsfile') }}</label>
                                    <input class="form-control" type="file" name="ipsfile" id="ipsfile">
                                    @if ($errors->has('ipsfile'))
                                        <span class="text-danger">{{ $errors->first('ipsfile') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="ips">Jumlah {{ trans('cruds.semester.fields.ips') }}</label>
                                    <input class="form-control" type="text" name="ips" id="ips"
                                        value="{{ old('ips', '') }}">
                                    @if ($errors->has('ips'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('ips') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.semester.fields.ips_helper') }}</span>
                                </div>
                            @else
                                <div class="form-group">
                                    <label for="semester">{{ trans('cruds.semester.fields.semester') }}</label>
                                    <input class="form-control" type="text" name="semester" disabled id="semester"
                                        value="{{ old('semester', $semester->semester) }}">
                                    @if ($errors->has('semester'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('semester') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.semester.fields.semester_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="tahunangkatan">{{ trans('cruds.semester.fields.tahunangkatan') }}</label>
                                    <input class="form-control" type="number" name="tahunangkatan" id="tahunangkatan"
                                        value="{{ old('tahunangkatan', $semester->tahunangkatan) }}" step="1"
                                        required>
                                    @if ($errors->has('tahunangkatan'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tahunangkatan') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.semester.fields.tahunangkatan_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="" for="frs">{{ trans('cruds.semester.fields.frs') }}</label>
                                    <input class="form-control" type="file" name="frs" id="frs">
                                    @if ($errors->has('frs'))
                                        <span class="text-danger">{{ $errors->first('frs') }}</span>
                                    @endif
                                    <a href="{{ $semester->getFrs() ?? '' }}" target="_blank">File Frs</a>
                                </div>
                                <div class="form-group">
                                    <label for="sks">{{ trans('cruds.semester.fields.sks') }}</label>
                                    <input class="form-control" type="number" name="sks" id="sks"
                                        value="{{ old('sks', $semester->sks) }}" step="1">
                                    @if ($errors->has('sks'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('sks') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.semester.fields.sks_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class=""
                                        for="ipsfile">{{ trans('cruds.semester.fields.ipsfile') }}</label>
                                    <input class="form-control" type="file" name="ipsfile" id="ipsfile">
                                    @if ($errors->has('ipsfile'))
                                        <span class="text-danger">{{ $errors->first('ipsfile') }}</span>
                                    @endif
                                    <a href="{{ $semester->getIps() ?? '' }}" target="_blank">File IPS</a>
                                </div>
                                <div class="form-group">
                                    <label for="ips">Jumlah {{ trans('cruds.semester.fields.ips') }}</label>
                                    <input class="form-control" type="text" name="ips" id="ips"
                                        value="{{ old('ips', $semester->ips) }}">
                                    @if ($errors->has('ips'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('ips') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.semester.fields.ips_helper') }}</span>
                                </div>
                            @endif
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">
                                    {{ trans('global.save') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
