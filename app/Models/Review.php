<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id', 'product_id', 'rating', 'status', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected static function booted()
    {
        static::created(function ($review) {
            $review->product->updateRating();
        });

        static::updated(function ($review) {
            $review->product->updateRating();
        });

        static::deleted(function ($review) {
            $review->product->updateRating();
        });
    }
    //
}
