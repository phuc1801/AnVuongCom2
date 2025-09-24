<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity', 'total_price'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function warrantySerial()
    {
        return $this->hasMany(WarrantySerial::class);
    }

    public function orderItemDetails()
    {
        return $this->hasMany(OrderItemDetail::class);
    }
}
