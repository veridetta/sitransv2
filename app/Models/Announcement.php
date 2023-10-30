<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = [
      'slug'
    ];
    protected static function booted()
    {
        parent::booted();
        static::creating(function ($announcement) {
            $announcement->slug = Str::slug($announcement->title);
        });
    }
}
