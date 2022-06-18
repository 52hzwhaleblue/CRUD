<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;

    protected $fillable = [
    'id_prod',
    'photo',
    ];

    // Nhiều sản phẩm chi tiết sẽ thuộc về 1 sản phẩm
    public function products(){
        return $this->belongsTo(Products::class,'id_prod');
    }
}
