<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Semester;

class HomeController
{
    public function index()
    {
        $semesters = Semester::get();

        $labels = $semesters->pluck('semester');
        $data = $semesters->pluck('ips');
        
        return view('frontend.home', compact('labels', 'data'));
    }
}
