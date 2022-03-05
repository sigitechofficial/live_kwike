<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
      'order_no',
        'store_id',
        'user_id',
        'user_address_id',
        'voucher_code',
        'voucher_discount',
        'sub_total',
        'total',
        'schedule_date',
        'order_type',
        'nonce',
        'payment_method',
        'card_type',
        'status',
        'is_paid',


    ];
}
