@extends('layouts.main')
@section('content')
   
    <table border="1">
        <tr>
        
            <th>Id</th>
            <th>Name</th>
            
        </tr>
        @foreach($products as $s)
            <tr>
                <td><a href="{{route('products.teams',['id'=>$s->id,'name'=>$s->name])}}">{{$s->name}}</a></td>
                <td>{{$s->id}}</td>
                
            </tr>
        @endforeach
    </table>
@endsection