<?php
namespace Arbory\Merchant\Models;

use Illuminate\Database\Eloquent\Model;
use Arbory\Merchant\Models\Order;

class OrderLine extends Model
{
    protected $table = 'merchant_order_lines';

    protected $fillable = [
        'order_id',
        'object_id',
        'object_options',
        'object_class',
        'price',
        'vat',
        'quantity',
        'total',
        'summary'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    protected $casts = [
        'object_options' => 'array',
    ];
}