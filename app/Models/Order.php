<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'total_price', 'coupon_id', 'status', 'shipping_address_id', 'requestDestroy', 'sendMail', 'expired_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function shippingAddress()
    {
        return $this->belongsTo(ShippingAddress::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function orderStatusHistory()
    {
        return $this->hasMany(OrderStatusHistory::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
}
