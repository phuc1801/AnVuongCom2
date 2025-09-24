<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSerial extends Model
{
    protected $fillable = [
        'serial_number',
        'product_id',
        'status'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function warrantySerial()
    {
        return $this->hasOne(WarrantySerial::class);
    }

    public function orderItemDetail()
    {
        return $this->hasOne(OrderItemDetail::class);
    }
}
