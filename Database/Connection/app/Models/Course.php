<?php

namespace App\Models;
use App\Models\StudentCourse;
use App\Models\TeacherCourse;
use App\Models\Student;
use App\Models\Department;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = "course";
    protected $primarykey = "course_id";
    public $incrementing = true;
    public $timestamp = false;
    public function studentcourse()
    {
        return $this->hasMany(StudentCourse::class,'course_id','course_id');
    }
    public function teachercourse()
    {
        return $this->hasMany(TeacherCourse::class,'course_id','course_id');
    }
    function department()
    {
        return $this->belongsTo(Department::class, 'dept_id', 'dept_id');
    } 
}