<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function list()
    {
        $students = Student::all();
       
        return view('students.list')
                ->with('students',$students);
        
    }
    function reg()
    {
        return view('students.reg');
    }
    function regSubmit(Request $req)
    {
        $this-> validate($req,
            [
                "name"=>"required|max:20|regex:/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/",
                "std_id"=>"required|regex:/^([0-5]{3}-[0-9]{2}-[1-3]{2})+$/",
                "dob"=>"required|date|before:-18 years",
                "email"=>"required|regex:/^([1-9]{2}-[0-9]{5}-[1-3]{1})\@student\.aiub\.edu+$/",
                "phone"=>"required|regex:/^([0]{1}[1]{1}[0-9]{9}+$)/"

            ],
            [
                "name.required"=> "Name is required",
                "name.max"=> "Exceeds 20 characters",
                "name.regex"=>"Not a valid Name",
                "std_id.required"=>"Please Enter Student ID",
                "std_id.regex"=>"The Student ID Must Follow XXX-XX-XX",
                "dob.required"=>"Date Of Birth is required",
                "dob.before"=> "Must be 18 years old",
                "email.required"=>"Email is required",
                "email.regex"=>"Enter a valid email",
                "phone.required"=>"Phone is required",
                "phone.regex"=>"Enter a valid phone number"
            ]
            );
            $s1 = new Student();
            $s1->name = $req->name;
            $s1->std_id = $req->std_id;
            $s1->dob = $req->dob;
            $s1->email = $req->email;
            $s1->phone = $req->phone;
            $s1->save();
            return "Submitted with valid value";
    }
    function details(Request $req)
    {
        $students = Student::where('id', '=', $req->id)
                                ->select('id','name','std_id','dob','email','phone')
                                ->first();
        return view('students.details')
                    ->with('students', $students);
    }
    
}
