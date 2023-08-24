@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.semester.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.semesters.update", [$semester->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="mahasiswa_id">{{ trans('cruds.semester.fields.mahasiswa') }}</label>
                <select class="form-control select2 {{ $errors->has('mahasiswa') ? 'is-invalid' : '' }}" name="mahasiswa_id" id="mahasiswa_id">
                    @foreach($mahasiswas as $id => $entry)
                        <option value="{{ $id }}" {{ (old('mahasiswa_id') ? old('mahasiswa_id') : $semester->mahasiswa->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('mahasiswa'))
                    <span class="text-danger">{{ $errors->first('mahasiswa') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.semester.fields.mahasiswa_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tahunangkatan">{{ trans('cruds.semester.fields.tahunangkatan') }}</label>
                <input class="form-control {{ $errors->has('tahunangkatan') ? 'is-invalid' : '' }}" type="number" name="tahunangkatan" id="tahunangkatan" value="{{ old('tahunangkatan', $semester->tahunangkatan) }}" step="1" required>
                @if($errors->has('tahunangkatan'))
                    <span class="text-danger">{{ $errors->first('tahunangkatan') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.semester.fields.tahunangkatan_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="semester">{{ trans('cruds.semester.fields.semester') }}</label>
                <input class="form-control {{ $errors->has('semester') ? 'is-invalid' : '' }}" type="text" name="semester" id="semester" value="{{ old('semester', $semester->semester) }}">
                @if($errors->has('semester'))
                    <span class="text-danger">{{ $errors->first('semester') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.semester.fields.semester_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="frs">{{ trans('cruds.semester.fields.frs') }}</label>
                <input class="form-control {{ $errors->has('frs') ? 'is-invalid' : '' }}" type="text" name="frs" id="frs" value="{{ old('frs', $semester->frs) }}">
                @if($errors->has('frs'))
                    <span class="text-danger">{{ $errors->first('frs') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.semester.fields.frs_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sks">{{ trans('cruds.semester.fields.sks') }}</label>
                <input class="form-control {{ $errors->has('sks') ? 'is-invalid' : '' }}" type="number" name="sks" id="sks" value="{{ old('sks', $semester->sks) }}" step="1">
                @if($errors->has('sks'))
                    <span class="text-danger">{{ $errors->first('sks') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.semester.fields.sks_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ipsfile">{{ trans('cruds.semester.fields.ipsfile') }}</label>
                <input class="form-control {{ $errors->has('ipsfile') ? 'is-invalid' : '' }}" type="text" name="ipsfile" id="ipsfile" value="{{ old('ipsfile', $semester->ipsfile) }}">
                @if($errors->has('ipsfile'))
                    <span class="text-danger">{{ $errors->first('ipsfile') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.semester.fields.ipsfile_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ips">{{ trans('cruds.semester.fields.ips') }}</label>
                <input class="form-control {{ $errors->has('ips') ? 'is-invalid' : '' }}" type="text" name="ips" id="ips" value="{{ old('ips', $semester->ips) }}">
                @if($errors->has('ips'))
                    <span class="text-danger">{{ $errors->first('ips') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.semester.fields.ips_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection