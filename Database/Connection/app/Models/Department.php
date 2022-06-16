<?php

namespace App\Models;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "department";
   // protected $primarykey = "dept_id";
    //public $incrementing = true;
    //public $timestamp = false;
    function student()
    {
        return $this->hasMany(Student::class, 'dept_id', 'dept_id');
    }
    function teacher()
    {
        return $this->hasMany(Teacher::class, 'dept_id', 'dept_id');
    }
    function course()
    {
        return $this->hasMany(Course::class, 'dept_id', 'dept_id');
    } 
}