<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_path',
        'category',
        'order',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('active_galleries_all');
            Cache::forget('active_galleries_home');
            Cache::forget('active_galleries_footer');
        });

        static::deleted(function () {
            Cache::forget('active_galleries_all');
            Cache::forget('active_galleries_home');
            Cache::forget('active_galleries_footer');
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function getImageUrlAttribute()
    {
        if (!$this->image_path) {
            return asset('frontend/images/gallery/gallery-1.webp');
        }
        if (str_starts_with($this->image_path, 'http://') || str_starts_with($this->image_path, 'https://')) {
            return $this->image_path;
        }
        if (file_exists(public_path($this->image_path))) {
            return asset($this->image_path);
        }
        return asset('storage/' . $this->image_path);
    }
}
