<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ["title", "body", "thumbnail", "likes_count", "comments_count"];

    public function auther()
    {
        return $this->belongsTo(Auther::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
