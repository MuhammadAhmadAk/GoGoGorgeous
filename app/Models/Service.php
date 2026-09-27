<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'price',
        'icon_image',
        'featured_image',
        'is_featured',
        'order',
        'status',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'status' => 'boolean',
        'price' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function getIconUrlAttribute()
    {
        if (!$this->icon_image) {
            return asset('frontend/images/icons/icon-hair-color.svg');
        }
        if (str_starts_with($this->icon_image, 'http://') || str_starts_with($this->icon_image, 'https://')) {
            return $this->icon_image;
        }
        if (file_exists(public_path($this->icon_image))) {
            return asset($this->icon_image);
        }
        return asset('storage/' . $this->icon_image);
    }

    public function getFeaturedImageUrlAttribute()
    {
        $v = "?v=2";
        if (!$this->featured_image) {
            return asset('frontend/images/services/hair_color.jpg') . $v;
        }
        if (str_starts_with($this->featured_image, 'http://') || str_starts_with($this->featured_image, 'https://')) {
            return $this->featured_image;
        }
        if (file_exists(public_path($this->featured_image))) {
            return asset($this->featured_image) . $v;
        }
        return asset('storage/' . $this->featured_image) . $v;
    }
}
