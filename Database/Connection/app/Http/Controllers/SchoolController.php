<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    function info()
    {
        $all = Department::all();
        return view('info')
                ->with('all', $all);
    }
}
