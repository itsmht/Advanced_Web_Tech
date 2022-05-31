@extends('layouts.main')
@section('content')
<table border= "1">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    @foreach($student as $s)
    <tr>
        <td>{{$->id}}</td>
        <td>{{$->name}}</td>
    </tr>
    @endforeach
</table>
@endsection
