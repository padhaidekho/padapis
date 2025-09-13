<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonProgress extends Model
{
    use HasFactory;
    protected $table = 'lesson_progress';
    protected $primaryKey = 'id';
    protected $fillable = [
        'enrollment_id',
        'lesson_id',
        'status',
        'progress_percent',
        'started_at',
        'completed_at',
    ];
}
