<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPerguruanTinggiRequest;
use App\Http\Requests\StorePerguruanTinggiRequest;
use App\Http\Requests\UpdatePerguruanTinggiRequest;
use App\Models\PerguruanTinggi;
use App\Models\Prodi;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PerguruanTinggiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('perguruan_tinggi_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $perguruanTinggis = PerguruanTinggi::with(['prodis'])->get();

        return view('admin.perguruanTinggis.index', compact('perguruanTinggis'));
    }

    public function create()
    {
        abort_if(Gate::denies('perguruan_tinggi_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prodis = Prodi::pluck('nama', 'id');

        return view('admin.perguruanTinggis.create', compact('prodis'));
    }

    public function store(StorePerguruanTinggiRequest $request)
    {
        $perguruanTinggi = PerguruanTinggi::create($request->all());
        $perguruanTinggi->prodis()->sync($request->input('prodis', []));

        return redirect()->route('admin.perguruan-tinggis.index');
    }

    public function edit(PerguruanTinggi $perguruanTinggi)
    {
        abort_if(Gate::denies('perguruan_tinggi_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prodis = Prodi::pluck('nama', 'id');

        $perguruanTinggi->load('prodis');

        return view('admin.perguruanTinggis.edit', compact('perguruanTinggi', 'prodis'));
    }

    public function update(UpdatePerguruanTinggiRequest $request, PerguruanTinggi $perguruanTinggi)
    {
        $perguruanTinggi->update($request->all());
        $perguruanTinggi->prodis()->sync($request->input('prodis', []));

        return redirect()->route('admin.perguruan-tinggis.index');
    }

    public function show(PerguruanTinggi $perguruanTinggi)
    {
        abort_if(Gate::denies('perguruan_tinggi_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $perguruanTinggi->load('prodis', 'perguruanMahasiswas');

        return view('admin.perguruanTinggis.show', compact('perguruanTinggi'));
    }

    public function destroy(PerguruanTinggi $perguruanTinggi)
    {
        abort_if(Gate::denies('perguruan_tinggi_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $perguruanTinggi->delete();

        return back();
    }
}