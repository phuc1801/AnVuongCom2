<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarrantySerial extends Model
{
    protected $fillable = [
        'order_item_id',
        'product_serial_id',
        'start_at',
        'end_at',
        'status'
    ];

    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime'
    ];

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function productSerial()
    {
        return $this->belongsTo(ProductSerial::class);
    }
}
