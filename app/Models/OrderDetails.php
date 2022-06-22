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
        'name',
        'regular_price',
        'sale_price',
        'temp_price',
        'quantity',
        ];
}
