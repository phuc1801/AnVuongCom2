<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItemDetail extends Model
{
    protected $fillable = ['order_item_id', 'product_serial_id'];

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function productSerial()
    {
        return $this->belongsTo(ProductSerial::class);
    }
}
