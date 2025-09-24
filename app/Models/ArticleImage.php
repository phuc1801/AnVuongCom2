<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    protected $fillable = ['article_id', 'image'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
