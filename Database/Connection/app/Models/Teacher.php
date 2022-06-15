<?php

namespace App\Models;
use App\Models\Department;
use App\Models\TeacherCourse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = "teacher";
    protected $primarykey = "teacher_id";
    public $incrementing = true;
    public $timestamp = false;
    function department()
    {
        return $this->belongsTo(Department::class, 'dept_id', 'dept_id');
    }
    public function teachercourse()
    {
        return $this->hasMany(TeacherCourse::class,'teacher_id','teacher_id');
    }
}
