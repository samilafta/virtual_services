<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['cart_id', 'customer_id', 'total_amount', 'address', 'message', 'payment_status', 'status'];



}
