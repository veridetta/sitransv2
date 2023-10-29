<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'author', 'date', 'category', 'tags', 'slug'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected static function booted()
    {
        parent::booted();

        static::creating(function ($article) {
            $article->slug = Str::slug($article->title);
        });
    }
    protected $casts = [
        'tags' => 'array',
    ];
}