@extends('layouts.main')
@section('content')
<form action ="{{route('students.reg.submit')}}" method="post">
{{@csrf_field()}}
Name: <input type = "text" value = "{{old('name')}}" name ="name"></br>
@error('name')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Student ID: <input type = "text" value = "{{old('std_id')}}" name ="std_id"></br>
@error('std_id')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Date Of Birth: <input type = "date" value = "{{old('dob')}}" name ="dob"></br>
@error('dob')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Email: <input type = "text" value = "{{old('email')}}" name ="email"></br>
@error('email')
        <span class="text-danger">{{$message}}</span><br>
@enderror
Phone: <input type = "text" value = "{{old('phone')}}" name ="phone"></br>
@error('phone')
        <span class="text-danger">{{$message}}</span><br>
@enderror
<input type="submit" value="Add">




</form>
@endsection