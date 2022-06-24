<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

        protected $fillable = [
            'id_order' ,
            'id_prod',
            'photo',
            'name',
            'regular_price',
            'sale_price',
            'temp_price',
            'quantity',
        ];

    // // 1 order_details thuộc về 1 orders
    public function orders(){
        return $this->belongsTo(Order::class, 'id_order');
    }

}
