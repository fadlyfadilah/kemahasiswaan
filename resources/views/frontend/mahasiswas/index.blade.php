@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        Profil Mahasiswa
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('frontend.mahasiswas.store') }}" enctype="multipart/form-data">
                            @csrf
                            @if ($mahasiswa === null)
                                <div class="form-group">
                                    <label class="required" for="nim">{{ trans('cruds.mahasiswa.fields.nim') }}</label>
                                    <input class="form-control" type="text" name="nim" id="nim"
                                        value="{{ old('nim', '') }}" required>
                                    @if ($errors->has('nim'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nim') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.nim_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="nama">{{ trans('cruds.mahasiswa.fields.nama') }}</label>
                                    <input class="form-control" type="text" name="nama" id="nama"
                                        value="{{ old('nama', '') }}" required>
                                    @if ($errors->has('nama'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nama') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.nama_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="nik">{{ trans('cruds.mahasiswa.fields.nik') }}</label>
                                    <input class="form-control" type="text" name="nik" id="nik"
                                        value="{{ old('nik', '') }}" required>
                                    @if ($errors->has('nik'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nik') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.nik_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="ttl">{{ trans('cruds.mahasiswa.fields.ttl') }}</label>
                                    <input class="form-control" type="text" name="ttl" id="ttl"
                                        value="{{ old('ttl', '') }}" required>
                                    @if ($errors->has('ttl'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('ttl') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.ttl_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="perguruan_id">{{ trans('cruds.mahasiswa.fields.perguruan') }}</label>
                                    <select class="form-control select2" name="perguruan_id" id="perguruan_id" required>
                                        <option value="" disabled selected>Pilih Perguruan Tinggi!</option>
                                        @foreach ($perguruans as $perguruan)
                                            <option value="{{ $perguruan->id }}">{{ $perguruan->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" id="prodi_group" style="display: none;">
                                    <label class="required"
                                        for="prodi_id">{{ trans('cruds.mahasiswa.fields.prodi') }}</label>
                                    <select class="form-control select2" name="prodi_id" id="prodi_id" required>
                                        <!-- Options will be dynamically added here using JavaScript -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="alamat">{{ trans('cruds.mahasiswa.fields.alamat') }}</label>
                                    <textarea class="form-control" name="alamat" id="alamat" required>{{ old('alamat') }}</textarea>
                                    @if ($errors->has('alamat'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('alamat') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.alamat_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="email">{{ trans('cruds.mahasiswa.fields.email') }}</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.email_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="beasiswa">{{ trans('cruds.mahasiswa.fields.beasiswa') }}</label>
                                    <input class="form-control" type="text" name="beasiswa" id="beasiswa"
                                        value="{{ old('beasiswa', '') }}">
                                    @if ($errors->has('beasiswa'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('beasiswa') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.beasiswa_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="nohp">{{ trans('cruds.mahasiswa.fields.nohp') }}</label>
                                    <input class="form-control" type="text" name="nohp" id="nohp"
                                        value="{{ old('nohp', '') }}">
                                    @if ($errors->has('nohp'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nohp') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.nohp_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="nama_ortu">{{ trans('cruds.mahasiswa.fields.nama_ortu') }}</label>
                                    <input class="form-control" type="text" name="nama_ortu" id="nama_ortu"
                                        value="{{ old('nama_ortu', '') }}" required>
                                    @if ($errors->has('nama_ortu'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nama_ortu') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.nama_ortu_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="noortu">{{ trans('cruds.mahasiswa.fields.noortu') }}</label>
                                    <input class="form-control" type="text" name="noortu" id="noortu"
                                        value="{{ old('noortu', '') }}">
                                    @if ($errors->has('noortu'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('noortu') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.noortu_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="image">Poto</label>
                                    <img id="previewImage" class="mb-2" src="#" width="15%" alt="">
                                    <div class="custom-file">
                                        <input type="file" name="poto" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label {{ $errors->has('poto') ? 'is-invalid' : '' }}" for="customFile">Pilih Gambar</label>
                                    </div>
                                    @if ($errors->has('poto'))
                                        <span class="text-danger">{{ $errors->first('poto') }}</span>
                                    @endif
                                </div>
                            @else
                                <div class="form-group">
                                    <label class="required"
                                        for="nim">{{ trans('cruds.mahasiswa.fields.nim') }}</label>
                                    <input class="form-control" type="text" name="nim" id="nim"
                                        value="{{ old('nim', $mahasiswa->nim) }}" required>
                                    @if ($errors->has('nim'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nim') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.nim_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="nama">{{ trans('cruds.mahasiswa.fields.nama') }}</label>
                                    <input class="form-control" type="text" name="nama" id="nama"
                                        value="{{ old('nama', $mahasiswa->nama) }}" required>
                                    @if ($errors->has('nama'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nama') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.nama_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="nik">{{ trans('cruds.mahasiswa.fields.nik') }}</label>
                                    <input class="form-control" type="text" name="nik" id="nik"
                                        value="{{ old('nik', $mahasiswa->nik) }}" required>
                                    @if ($errors->has('nik'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nik') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.nik_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="ttl">{{ trans('cruds.mahasiswa.fields.ttl') }}</label>
                                    <input class="form-control" type="text" name="ttl" id="ttl"
                                        value="{{ old('ttl', $mahasiswa->ttl) }}" required>
                                    @if ($errors->has('ttl'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('ttl') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.ttl_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="perguruan_id">{{ trans('cruds.mahasiswa.fields.perguruan') }}</label>
                                    <select class="form-control select2" name="perguruan_id" id="perguruan_id" required>
                                        <option value="" disabled>Pilih Perguruan Tinggi!</option>
                                        @foreach ($perguruans as $perguruan)
                                            <option value="{{ $perguruan->id }}"
                                                {{ $mahasiswa->perguruan_id == $perguruan->id ? 'selected' : '' }}>
                                                {{ $perguruan->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" id="prodi_group">
                                    <label class="required"
                                        for="prodi_id">{{ trans('cruds.mahasiswa.fields.prodi') }}</label>
                                    <select class="form-control select2" name="prodi_id" id="prodi_id" required>
                                        @foreach ($prodis as $prodi)
                                            <option value="{{ $prodi->id }}"
                                                {{ $mahasiswa->prodi_id == $prodi->id ? 'selected' : '' }}>
                                                {{ $prodi->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="alamat">{{ trans('cruds.mahasiswa.fields.alamat') }}</label>
                                    <textarea class="form-control" name="alamat" id="alamat" required>{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                                    @if ($errors->has('alamat'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('alamat') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.alamat_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="email">{{ trans('cruds.mahasiswa.fields.email') }}</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        value="{{ old('email', $mahasiswa->email) }}" required>
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.email_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="beasiswa">{{ trans('cruds.mahasiswa.fields.beasiswa') }}</label>
                                    <input class="form-control" type="text" name="beasiswa" id="beasiswa"
                                        value="{{ old('beasiswa', $mahasiswa->beasiswa) }}">
                                    @if ($errors->has('beasiswa'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('beasiswa') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.beasiswa_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="nohp">{{ trans('cruds.mahasiswa.fields.nohp') }}</label>
                                    <input class="form-control" type="text" name="nohp" id="nohp"
                                        value="{{ old('nohp', $mahasiswa->nohp) }}">
                                    @if ($errors->has('nohp'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nohp') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.nohp_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="nama_ortu">{{ trans('cruds.mahasiswa.fields.nama_ortu') }}</label>
                                    <input class="form-control" type="text" name="nama_ortu" id="nama_ortu"
                                        value="{{ old('nama_ortu', $mahasiswa->nama_ortu) }}" required>
                                    @if ($errors->has('nama_ortu'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nama_ortu') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.mahasiswa.fields.nama_ortu_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="noortu">{{ trans('cruds.mahasiswa.fields.noortu') }}</label>
                                    <input class="form-control" type="text" name="noortu" id="noortu"
                                        value="{{ old('noortu', $mahasiswa->noortu) }}">
                                    @if ($errors->has('noortu'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('noortu') }}
                                        </div>
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
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var perguruanSelect = $('#perguruan_id');
        var prodiGroup = $('#prodi_group');
        var prodiSelect = $('#prodi_id');

        function updateProdiOptions() {
            var selectedPerguruan = perguruanSelect.val();
            if (selectedPerguruan === '') {
                prodiGroup.hide();
                prodiSelect.empty();
                return;
            }

            $.get(`/get-prodis-by-perguruan/${selectedPerguruan}`, function(data) {
                prodiSelect.empty();

                if (data.length > 0) {
                    prodiGroup.show();
                    data.forEach(function(prodi) {
                        prodiSelect.append($('<option>', {
                            value: prodi.id,
                            text: prodi.nama
                        }));
                    });
                } else {
                    prodiGroup.hide();
                }
            });
        }

        perguruanSelect.on('change', function() {
            updateProdiOptions();
        });
    </script>
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
