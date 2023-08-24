<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySemesterRequest;
use App\Http\Requests\StoreSemesterRequest;
use App\Http\Requests\UpdateSemesterRequest;
use App\Models\Mahasiswa;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class SemesterController extends Controller
{
    public function index($semesterr)
    {
        abort_if(Gate::denies('semester_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mahasiswa = Mahasiswa::first();

        $semester = Semester::with(['mahasiswa', 'created_by'])->where('semester', $semesterr)->first();

        return view('frontend.semesters.index', compact('semester', 'mahasiswa', 'semesterr'));
    }

    public function create()
    {
        abort_if(Gate::denies('semester_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mahasiswas = Mahasiswa::pluck('nama', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.semesters.create', compact('mahasiswas'));
    }

    public function store(StoreSemesterRequest $request)
    {
        $mahasiswa = Mahasiswa::where('created_by_id', auth()->id())->first();
        $attr = $request->all();
        $attr['mahasiswa_id'] = $mahasiswa->id;
        $semester = Semester::create($attr);

        return redirect()->route('frontend.semesters.indexx', '1');
    }

    public function edit(Semester $semester)
    {
        abort_if(Gate::denies('semester_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mahasiswas = Mahasiswa::pluck('nama', 'id')->prepend(trans('global.pleaseSelect'), '');

        $semester->load('mahasiswa', 'created_by');

        return view('frontend.semesters.edit', compact('mahasiswas', 'semester'));
    }

    public function update(UpdateSemesterRequest $request, Semester $semester)
    {
        $semester->update($request->all());

        return redirect()->route('frontend.semesters.index');
    }

    public function show(Semester $semester)
    {
        abort_if(Gate::denies('semester_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $semester->load('mahasiswa', 'created_by');

        return view('frontend.semesters.show', compact('semester'));
    }

    public function destroy(Semester $semester)
    {
        abort_if(Gate::denies('semester_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $semester->delete();

        return back();
    }
}