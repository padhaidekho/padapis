<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $table = 'enrollments';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'course_id',
        'user_id',
        'enrolled_at',
        'status',
        'price_paid',
    ];
}
