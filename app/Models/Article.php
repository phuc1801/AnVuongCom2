<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'type'];

    public function articleImages()
    {
        return $this->hasMany(ArticleImage::class);
    }

    public function firstImage()
    {
        return $this->hasOne(ArticleImage::class)->orderBy('id');
    }

    public function getImageUrlAttribute()
    {
        $filename = $this->firstImage->image ?? null;

        if (!$filename) {
            return asset('images/noimage.png');
        }

        $path = "img/articles/{$filename}";

        return Storage::disk('public')->exists($path)
            ? Storage::url($path)
            : asset('images/noimage.png');
    }

    public function getImageUrlsAttribute()
    {
        return $this->articleImages->map(function ($img) {
            $filename = $img->image ?? null;

            if (!$filename) {
                return asset('images/noimage.png');
            }

            $path = "img/articles/{$filename}";

            return Storage::disk('public')->exists($path)
                ? Storage::url($path)
                : asset('images/noimage.png');
        })->toArray();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
