<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['order_id', 'user_id', 'issue_date', 'invoice_number', 'billing_name', 'billing_address', 'billing_phone', 'total_amount', 'status', 'note'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
