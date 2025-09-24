<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'status',
        'password',
        'phone',
        'avatar',
        'address',
        'role_id',
        'activation_token',
        'remember_token',
        'google_id',
        'birthday'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isActive()
    {
        return $this->status === 'active';
    }

    public function isPending()
    {
        return $this->status === 'pending';
    }

    public function isBanned()
    {
        return $this->status === 'banned';
    }

    public function isDeleted()
    {
        return $this->status === 'deleted';
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function shippingAddresses()
    {
        return $this->hasMany(ShippingAddress::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function getImageUrlAttribute()
    {
        if ($this->avatar) {
            return asset('storage/img/users/' . $this->avatar);
        }
        return asset('images/noimage.png');
    }
}
