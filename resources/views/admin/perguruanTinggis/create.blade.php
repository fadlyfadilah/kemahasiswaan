@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.perguruanTinggi.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.perguruan-tinggis.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="nama">{{ trans('cruds.perguruanTinggi.fields.nama') }}</label>
                <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" type="text" name="nama" id="nama" value="{{ old('nama', '') }}" required>
                @if($errors->has('nama'))
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.perguruanTinggi.fields.nama_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="prodis">{{ trans('cruds.perguruanTinggi.fields.prodi') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('prodis') ? 'is-invalid' : '' }}" name="prodis[]" id="prodis" multiple>
                    @foreach($prodis as $id => $prodi)
                        <option value="{{ $id }}" {{ in_array($id, old('prodis', [])) ? 'selected' : '' }}>{{ $prodi }}</option>
                    @endforeach
                </select>
                @if($errors->has('prodis'))
                    <span class="text-danger">{{ $errors->first('prodis') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.perguruanTinggi.fields.prodi_helper') }}</span>
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