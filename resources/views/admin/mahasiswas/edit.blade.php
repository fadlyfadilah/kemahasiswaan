@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.mahasiswa.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.mahasiswas.update", [$mahasiswa->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="nim">{{ trans('cruds.mahasiswa.fields.nim') }}</label>
                <input class="form-control {{ $errors->has('nim') ? 'is-invalid' : '' }}" type="text" name="nim" id="nim" value="{{ old('nim', $mahasiswa->nim) }}" required>
                @if($errors->has('nim'))
                    <span class="text-danger">{{ $errors->first('nim') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.nim_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nama">{{ trans('cruds.mahasiswa.fields.nama') }}</label>
                <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" type="text" name="nama" id="nama" value="{{ old('nama', $mahasiswa->nama) }}" required>
                @if($errors->has('nama'))
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.nama_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nik">{{ trans('cruds.mahasiswa.fields.nik') }}</label>
                <input class="form-control {{ $errors->has('nik') ? 'is-invalid' : '' }}" type="text" name="nik" id="nik" value="{{ old('nik', $mahasiswa->nik) }}" required>
                @if($errors->has('nik'))
                    <span class="text-danger">{{ $errors->first('nik') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.nik_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ttl">{{ trans('cruds.mahasiswa.fields.ttl') }}</label>
                <input class="form-control {{ $errors->has('ttl') ? 'is-invalid' : '' }}" type="text" name="ttl" id="ttl" value="{{ old('ttl', $mahasiswa->ttl) }}" required>
                @if($errors->has('ttl'))
                    <span class="text-danger">{{ $errors->first('ttl') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.ttl_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="perguruan_id">{{ trans('cruds.mahasiswa.fields.perguruan') }}</label>
                <select class="form-control select2 {{ $errors->has('perguruan') ? 'is-invalid' : '' }}" name="perguruan_id" id="perguruan_id" required>
                    @foreach($perguruans as $id => $entry)
                        <option value="{{ $id }}" {{ (old('perguruan_id') ? old('perguruan_id') : $mahasiswa->perguruan->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('perguruan'))
                    <span class="text-danger">{{ $errors->first('perguruan') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.perguruan_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="prodi_id">{{ trans('cruds.mahasiswa.fields.prodi') }}</label>
                <select class="form-control select2 {{ $errors->has('prodi') ? 'is-invalid' : '' }}" name="prodi_id" id="prodi_id" required>
                    @foreach($prodis as $id => $entry)
                        <option value="{{ $id }}" {{ (old('prodi_id') ? old('prodi_id') : $mahasiswa->prodi->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('prodi'))
                    <span class="text-danger">{{ $errors->first('prodi') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.prodi_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="alamat">{{ trans('cruds.mahasiswa.fields.alamat') }}</label>
                <textarea class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" name="alamat" id="alamat" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                @if($errors->has('alamat'))
                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.alamat_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.mahasiswa.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $mahasiswa->email) }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="beasiswa">{{ trans('cruds.mahasiswa.fields.beasiswa') }}</label>
                <input class="form-control {{ $errors->has('beasiswa') ? 'is-invalid' : '' }}" type="text" name="beasiswa" id="beasiswa" value="{{ old('beasiswa', $mahasiswa->beasiswa) }}">
                @if($errors->has('beasiswa'))
                    <span class="text-danger">{{ $errors->first('beasiswa') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.beasiswa_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nohp">{{ trans('cruds.mahasiswa.fields.nohp') }}</label>
                <input class="form-control {{ $errors->has('nohp') ? 'is-invalid' : '' }}" type="text" name="nohp" id="nohp" value="{{ old('nohp', $mahasiswa->nohp) }}">
                @if($errors->has('nohp'))
                    <span class="text-danger">{{ $errors->first('nohp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.nohp_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nama_ortu">{{ trans('cruds.mahasiswa.fields.nama_ortu') }}</label>
                <input class="form-control {{ $errors->has('nama_ortu') ? 'is-invalid' : '' }}" type="text" name="nama_ortu" id="nama_ortu" value="{{ old('nama_ortu', $mahasiswa->nama_ortu) }}" required>
                @if($errors->has('nama_ortu'))
                    <span class="text-danger">{{ $errors->first('nama_ortu') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.nama_ortu_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="noortu">{{ trans('cruds.mahasiswa.fields.noortu') }}</label>
                <input class="form-control {{ $errors->has('noortu') ? 'is-invalid' : '' }}" type="text" name="noortu" id="noortu" value="{{ old('noortu', $mahasiswa->noortu) }}">
                @if($errors->has('noortu'))
                    <span class="text-danger">{{ $errors->first('noortu') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.mahasiswa.fields.noortu_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image">Poto</label><br/>
                <img id="previewImage" class="mb-2" src="{{ $mahasiswa->getImage() }}" width="15%" alt="">
                <div class="custom-file">
                    <input type="file" name="poto" class="custom-file-input" id="customFile">
                    <label class="custom-file-label {{ $errors->has('poto') ? 'is-invalid' : '' }}" for="customFile">Pilih Gambar</label>
                </div>
                @if ($errors->has('poto'))
                    <span class="text-danger">{{ $errors->first('poto') }}</span>
                @endif
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
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>

    // fungsi ini akan berjalan ketika akan menambahkan gambar dimana fungsi ini
    // akan membuat preview image sebelum kita simpan gambar tersebut.      
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#previewImage').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    // Ketika tag input file denghan class image di klik akan menjalankan fungsi di atas
    $("#image").change(function() {
        readURL(this);
    });
</script>
@endsection