<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['image', 'title', 'slug', 'content', 'category_id', 'active'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
