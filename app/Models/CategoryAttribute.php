<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryAttribute extends Model
{
    protected $fillable = ['attribute_id', 'category_id', 'is_filter'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
