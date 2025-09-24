<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'real_price', 'quantity', 'category_id', 'status', 'unit', 'slug', 'guarantee', 'outline', 'rating_avg', 'rating_count'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function productSerials()
    {
        return $this->hasMany(ProductSerial::class);
    }
    //
    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function primaryImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }
    //
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'product_attributes')
            ->withPivot('value', 'short_value');
    }
    //
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function updateRating()
    {
        $this->rating_avg = $this->reviews()->avg('rating') ?? 0;
        $this->rating_count = $this->reviews()->count();
        $this->save();
    }
    //
    public function getImageUrlAttribute()
    {
        $filename = $this->primaryImage->image ?? null;

        if (!$filename) {
            return asset('images/noimage.png');
        }

        $path = "img/products/{$this->id}/{$filename}";

        return Storage::disk('public')->exists($path)
            ? Storage::url($path)
            : asset('images/noimage.png');
    }

    public function getImageUrlsAttribute()
    {
        return $this->productImages->map(function ($img) {
            $filename = $img->image ?? null;

            if (!$filename) {
                return asset('images/noimage.png');
            }

            $path = "img/products/{$this->id}/{$filename}";

            return Storage::disk('public')->exists($path)
                ? Storage::url($path)
                : asset('images/noimage.png');
        })->toArray();
    }

    public function getRatingSumAttribute()
    {
        return [
            5 => $this->reviews->where('rating', 5)->count(),
            4 => $this->reviews->where('rating', 4)->count(),
            3 => $this->reviews->where('rating', 3)->count(),
            2 => $this->reviews->where('rating', 2)->count(),
            1 => $this->reviews->where('rating', 1)->count(),
        ];
    }

    public function refreshQuantityAndStatus(): void
    {
        $quantity = $this->productSerials()
            ->where('status', 'in_stock')
            ->count();

        $this->updateQuietly([
            'quantity' => $quantity,
            'status'   => $quantity > 0 ? 'in_stock' : 'out_stock',
        ]);
    }
}
