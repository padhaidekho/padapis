<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class BusinessUser extends Model
{
    use HasFactory;
    protected $table = 'business_users';
    protected $fillable = [
        'role',
        'status',
        'business_id',
        'user_id',
        'joined_at',
        'extra_data',
    ];

    protected $casts = [
        'joined_at' => 'datetime',
        'extra_data' => 'array',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
