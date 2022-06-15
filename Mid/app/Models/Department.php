<?php

namespace App\Models;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = "department";
    protected $primarykey = "id";
    public $incrementing = true;
    public $timestamp = false;
    function students()
    {
        return $this->hasMany(Student::class, 'dept_id', 'dept_id');
    }
}
