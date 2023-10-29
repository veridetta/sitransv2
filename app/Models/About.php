<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'author', 'date', 'slug'
    ];
  protected static function booted()
    {
        parent::booted();

        static::creating(function ($about) {
            $about->slug = Str::slug($about->title);
        });
    }
}