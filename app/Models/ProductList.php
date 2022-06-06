<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class ProductList extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'name',
        'desc',
        'content',
        'status',
    ];

    protected $casts = [
        'status' => 'array',
    ];

}
