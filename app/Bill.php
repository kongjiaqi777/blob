<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table='wechat_bill';

    protected $fillable = [
        'bill_type',
        'trade_user', 
        'goods',
        'trade_type',
        'amount',
        'pay_way',
        'status',
        'trade_code',
        'order_code',
        'comment',
        'bill_time',
        'source'
    ];
}
