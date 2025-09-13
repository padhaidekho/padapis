<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [
        'user_id',
        'profile_slug',
        'profile_photo',
        'bio',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'postcode',
        'dob',
        'gender',
        'social_links',
        'education',
        'experience',
    ];

    protected $casts = [
        'social_links' => 'array',
        'dob' => 'date',
    ];
}
