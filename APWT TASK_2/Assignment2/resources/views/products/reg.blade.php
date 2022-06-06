@extends('layouts.main')
@section('content')
<form action ="{{route('products.reg.submit')}}" method="post">
{{@csrf_field()}}
Name: <input type = "text" value = "{{old('name')}}" name ="name"></br>
@error('name')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Price: <input type = "text" value = "{{old('price')}}" name ="price"></br>
@error('price')
        <span class="text-danger">{{$message}}</span><br>
@enderror
<input type="submit" value="Add">




</form>
@endsection