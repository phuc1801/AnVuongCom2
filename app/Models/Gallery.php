<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    protected $fillable = ['name', 'image', 'is_active', 'display_order', 'type'];

    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return asset('images/noimage.png');
        }

        $folders = [
            'banner' => 'img/banner/',
            'right_banner' => 'img/right_banner/',
            'top_banner' => 'img/top_banner/',
            'left_banner' => 'img/left_banner/',
            'logo'   => 'img/logo/',
            'footer' => 'img/footer/',
            'slide' => 'img/slide/',
            'image_around_slide' => 'img/image_around_slide/',
        ];

        $folder = $folders[$this->type] ?? 'img/others/';

        if (!Storage::disk('public')->exists($folder . $this->image)) {
            return asset('images/noimage.png');
        }

        return Storage::url($folder . $this->image);
    }
}
