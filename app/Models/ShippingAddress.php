<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $fillable = ['user_id', 'name', 'address', 'phone'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getCityAttribute()
    {
        $addressParts = array_map('trim', explode(',', $this->address));
        return end($addressParts) ?: null;
    }
}
