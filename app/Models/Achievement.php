<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    protected $table = 'achievements';
    protected $fillable = [
        'achievement_name',
        'achievement_description',
        'achievement_image',
        'achievement_status',
    ];
}
