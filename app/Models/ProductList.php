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


    public function product_cat()
    {
        return $this->hasMany(ProductCat::class,'id'); // id của product_cats
    }

    public function products()
    {
        return $this->hasMany(Products::class,'id'); // id của products
    }

}
