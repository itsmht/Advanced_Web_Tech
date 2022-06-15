
@foreach($all as $d)
    
        Department Name: {{$d->name}}</br>
        Department Id: {{$d->dept_id}}</br>
        Offered Courses & Details:</br>
        @foreach($all as $d)
        {{$d->course->course_id}}. {{$d->course->name}}: {{$d->teacher->name}}</br>
                {{$d->student->std_id}}. {{$d->student->name}}->{{$d->course->course_id}}</br>
        @endforeach
    
    @endforeach