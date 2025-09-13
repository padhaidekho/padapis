<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    use HasFactory;
    protected $table = 'business_types';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'typename',
        'typeslug',
        'description',
    ];
}
