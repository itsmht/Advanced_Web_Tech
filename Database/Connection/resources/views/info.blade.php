
@foreach ($d as $d)   
Department Name: {{$d->name}}</br>
Department Id: {{$d->dept_id}}</br>

Offered Courses & Details:</br>
@foreach($d->course as $c)

Course Details: </br>{{$c->name}}== @foreach ($c->teachercourse as $ct ) 
                            {{$ct->teacher->name}},  
                            @endforeach </br>

@foreach($c->studentcourse as $s)
Student Info: 

{{$s->student->std_id}}. {{$s->student->name}}</br></br>
@endforeach

@endforeach
@endforeach

