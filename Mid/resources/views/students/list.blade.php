@extends('layouts.main')
@section('content')
<table border= "1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Student ID</th>
        <th>Date Of Birth</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    @foreach($students as $s)
    <tr>
        <td>{{$s->id}}</td>
        <td><a href="{{route('students.details',['id'=>$s->id,'name'=>$s->name,'std_id'=>$s->std_id,'dob'=>$s->dob,'email'=>$s->email,'phone'=>$s->phone,])}}">{{$s->name}}</a></td>
        <td>{{$s->std_id}}</td>
        <td>{{$s->dob}}</td>
        <td>{{$s->email}}</td>
        <td>{{$s->phone}}</td>
    </tr>
    @endforeach
</table>
@endsection
