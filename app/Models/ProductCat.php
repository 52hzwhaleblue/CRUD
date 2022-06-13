<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCat extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_list',
        'photo',
        'name',
        'desc',
        'content',
        'status',
    ];

    protected $casts = [
        'status' => 'array',
    ];

    // public function product_list()
    // {
    //     return $this->belongsTo(ProductList::class);
    // }
}
