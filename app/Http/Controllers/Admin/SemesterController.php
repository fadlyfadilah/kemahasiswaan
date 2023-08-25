<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySemesterRequest;
use App\Http\Requests\StoreSemesterRequest;
use App\Http\Requests\UpdateSemesterRequest;
use App\Models\Mahasiswa;
use App\Models\Semester;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SemesterController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('semester_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $semesters = Semester::with(['mahasiswa', 'created_by'])->get();

        return view('admin.semesters.index', compact('semesters'));
    }

    public function approve(Semester $semester)
    {
        abort_if(Gate::denies('semester_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $semester->approved = request('approved');

        $semester->save();

        return back();
    }

    public function create()
    {
        abort_if(Gate::denies('semester_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mahasiswas = Mahasiswa::pluck('nama', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.semesters.create', compact('mahasiswas'));
    }

    public function store(StoreSemesterRequest $request)
    {
        $semester = Semester::create($request->all());

        return redirect()->route('admin.semesters.index');
    }

    public function edit(Semester $semester)
    {
        abort_if(Gate::denies('semester_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mahasiswas = Mahasiswa::pluck('nama', 'id')->prepend(trans('global.pleaseSelect'), '');

        $semester->load('mahasiswa', 'created_by');

        return view('admin.semesters.edit', compact('mahasiswas', 'semester'));
    }

    public function update(UpdateSemesterRequest $request, Semester $semester)
    {
        $semester->update($request->all());

        return redirect()->route('admin.semesters.index');
    }

    public function show(Semester $semester)
    {
        abort_if(Gate::denies('semester_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $semester->load('mahasiswa', 'created_by');

        return view('admin.semesters.show', compact('semester'));
    }

    public function destroy(Semester $semester)
    {
        abort_if(Gate::denies('semester_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $semester->delete();

        return back();
    }

    public function massDestroy(MassDestroySemesterRequest $request)
    {
        $semesters = Semester::find(request('ids'));

        foreach ($semesters as $semester) {
            $semester->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}