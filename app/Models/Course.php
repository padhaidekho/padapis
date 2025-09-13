<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'course_title',
        'course_slug',
        'description',
        'thumbnail',
        'language',
        'price',
        'is_free',
        'level',
        'status',
        'tags',
        'business_id',
        'created_by',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_free' => 'boolean',
    ];
}
