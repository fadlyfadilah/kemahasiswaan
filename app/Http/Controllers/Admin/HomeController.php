<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mahasiswa;

class HomeController
{
    public function index()
    {
        $status = Mahasiswa::select('status')
            ->groupBy('status')
            ->selectRaw('status, count(*) as total')
            ->get();
        return view('home', compact('status'));
    }
}
