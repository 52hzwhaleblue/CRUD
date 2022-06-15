<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_list',
        'id_cat',
        'photo',
        'name',
        'desc',
        'content',
        'regular_price',
        'discount',
        'sale_price',
        'stock',
        'status',
    ];

    protected $casts = [
    'status' => 'array',
    ];

    // // 1 sản phẩm thuộc về 1 danh mục cấp 1
    public function product_list(){
        return $this->belongsTo(ProductList::class, 'id_list');
    }

    // 1 sản phẩm thuộc về 1 danh mục cấp 2
    public function product_cat(){
        return $this->belongsTo(ProductCat::class, 'id_cat');
    } 
}
