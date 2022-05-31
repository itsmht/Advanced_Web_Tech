<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function list()
    {
        $students = array ();
        for($i=1;$i<=10;$i++)
        {
            $student = array("id"=>$i,
                             "name"=>"student $i" 
                            );

            $students[]=(object)$student;

        }
        return view('student.list')
                ->with('students',$students);
        
    }
    function welcome()
    {
        return view('/student.welcome');
    }
}
