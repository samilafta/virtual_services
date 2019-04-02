<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['cart_id', 'customer_id', 'order_code', 'total_amount',
        'payment_method', 'address', 'message', 'payment_status', 'status'];



}
