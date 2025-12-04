<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'amount',
        'order_status',
        'customer_id',
        'address_id',
        'product_id',

    ];
}
