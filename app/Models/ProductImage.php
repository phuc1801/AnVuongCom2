<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    protected $fillable = ['product_id', 'image', 'is_primary'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getImageUrlAttribute()
    {
        $filename = $this->image ?? null;

        if (!$filename) {
            return asset('images/noimage.png');
        }

        $path = "img/products/{$this->product_id}/{$filename}";

        return Storage::disk('public')->exists($path)
            ? Storage::url($path)
            : asset('images/noimage.png');
    }
}
