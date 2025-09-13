<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseExam extends Model
{
    use HasFactory;
    protected $table = 'course_exams';
    protected $primaryKey = 'id';
    protected $fillable = [
        'course_id',
        'exam_id',
    ];
    public $timestamps = false;
}
