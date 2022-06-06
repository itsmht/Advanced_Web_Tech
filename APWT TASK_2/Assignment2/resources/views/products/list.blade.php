@extends('layouts.main')
@section('content')
   
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Price</th>
        </tr>
        @foreach($products as $s)
            <tr>
                <td><a href="{{route('products.details',['id'=>$s->id,'name'=>$s->name,'price'=>$s->price])}}">{{$s->name}}</a></td>
                <td>{{$s->id}}</td>
                <td>{{$s->price}}</td>
            </tr>
        @endforeach
    </table>
@endsection