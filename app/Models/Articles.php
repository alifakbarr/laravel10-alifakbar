<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'share', 'status', 'slug', 'content'];

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'article_categories');
    }
}
