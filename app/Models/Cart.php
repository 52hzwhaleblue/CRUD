<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user' ,
        'id_prod',
        'photo',
        'name',
        'regular_price',
        'sale_price',
        'temp_price',
        'quantity',
    ];
}
