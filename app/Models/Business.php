<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'business';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'business_slug',
        'description',
        'logo',
        'banner',
        'email',
        'phone',
        'website',
        'address',
        'city',
        'state',
        'country',
        'postcode',
        'established_year',
        'status',
        'social_links',
        'settings',
        'business_type_id',
        'owner_id',
    ];

    protected $casts = [
        'established_year' => 'datetime',
        'social_links' => 'array',
        'settings' => 'array',
    ];
}
