<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['image', 'title', 'description', 'link', 'button_text', 'active', 'sort'];
}
