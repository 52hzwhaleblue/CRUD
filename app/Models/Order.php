<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'phone',
        'address',
        'email',
        'fullname',
        'total',
        'id_order_status',
        'id_payment_method',
    ];
}
