<?php

namespace App\Models;
use App\Models\Teacher;
use App\Models\Course;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherCourse extends Model
{
    use HasFactory;
    protected $table = "teachercourse";
    protected $primarykey = "teach_crs_id";
    public $incrementing = true;
    public $timestamp = false;
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id','course_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id','teacher_id');
    }
}