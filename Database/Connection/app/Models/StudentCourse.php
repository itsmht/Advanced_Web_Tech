<?php

namespace App\Models;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;
    protected $table = "studentcourse";
    protected $primarykey = "std_crs_id";
    public $incrementing = true;
    public $timestamp = false;
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','course_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class,'std_id','std_id');
    }
}