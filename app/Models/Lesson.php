<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lessons';
    protected $fillable = [
        'title',
        'description',
        'lesson_type',
        'video_url',
        'file_url',
        'duration',
        'order',
        'module_id',
    ];
}
