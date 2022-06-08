<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'name',
        'desc',
        'content',
        'status',
        'date_create',
    ];

    protected $casts = [
        'status' => 'array',
    ];
}
