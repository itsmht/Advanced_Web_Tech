@extends('layouts.main')
@section('content')
<h1> Student Details</h1>
Id: {{$students->id}}</br>
Name:  {{$students->name}}</br>
Student Id: {{$students->std_id}}</br>
DOB: {{$students->dob}}</br>
Email: {{$students->email}}</br>
Phone: {{$students->phone}}</br>
@endsection