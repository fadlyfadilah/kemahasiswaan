<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMahasiswaRequest;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Models\Mahasiswa;
use App\Models\PerguruanTinggi;
use App\Models\Prodi;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MahasiswaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('mahasiswa_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mahasiswa = Mahasiswa::with(['perguruan', 'prodi', 'created_by'])->first();

        $perguruans = PerguruanTinggi::get();
        $prodis = Prodi::get();

        return view('frontend.mahasiswas.index', compact('mahasiswa', 'perguruans', 'prodis'));
    }
    
    public function getProdisByPerguruan($perguruanId)
    {
        $perguruan = PerguruanTinggi::findOrFail($perguruanId);
        $prodis = $perguruan->prodis;

        return response()->json($prodis);
    }

    public function create()
    {
        abort_if(Gate::denies('mahasiswa_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $perguruans = PerguruanTinggi::pluck('nama', 'id')->prepend(trans('global.pleaseSelect'), '');

        $prodis = Prodi::pluck('nama', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.mahasiswas.create', compact('perguruans', 'prodis'));
    }

    public function store(StoreMahasiswaRequest $request)
    {
        $mahasiswa = Mahasiswa::updateOrCreate([
            'created_by_id' => auth()->id(),
            'nim' => $request->get('nim'),
            'prodi_id'    => $request->get("prodi_id"),
            'perguruan_id'    => $request->get("perguruan_id"),
        ], [
            'nama'     => $request->get('nama'),
            'nik'   => $request->get('nik'),
            'ttl'   => $request->get('ttl'),
            'alamat'    => $request->get("alamat"),
            'email'    => $request->get("email"),
            'beasiswa'    => $request->get("beasiswa"),
            'nohp'    => $request->get("nohp"),
            'nama_ortu'    => $request->get("nama_ortu"),
            'noortu'    => $request->get("noortu"),
            'poto'    => $request->get("poto"),
            'status'    => 'aktif',
        ]);

        return redirect()->route('frontend.mahasiswas.index');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        abort_if(Gate::denies('mahasiswa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $perguruans = PerguruanTinggi::pluck('nama', 'id')->prepend(trans('global.pleaseSelect'), '');

        $prodis = Prodi::pluck('nama', 'id')->prepend(trans('global.pleaseSelect'), '');

        $mahasiswa->load('perguruan', 'prodi', 'created_by');

        return view('frontend.mahasiswas.edit', compact('mahasiswa', 'perguruans', 'prodis'));
    }

    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->all());

        return redirect()->route('frontend.mahasiswas.index');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        abort_if(Gate::denies('mahasiswa_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mahasiswa->load('perguruan', 'prodi', 'created_by', 'mahasiswaSemesters');

        return view('frontend.mahasiswas.show', compact('mahasiswa'));
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        abort_if(Gate::denies('mahasiswa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mahasiswa->delete();

        return back();
    }

    public function massDestroy(MassDestroyMahasiswaRequest $request)
    {
        $mahasiswas = Mahasiswa::find(request('ids'));

        foreach ($mahasiswas as $mahasiswa) {
            $mahasiswa->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}