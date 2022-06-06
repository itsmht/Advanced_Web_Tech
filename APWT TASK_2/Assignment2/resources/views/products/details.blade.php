@extends('layouts.main')
@section('content')
<h1> Product Details</h1>
Name:  {{$products->name}}</br>
Id: {{$products->id}}</br>
Price: {{$products->price}}</br>
@endsection
