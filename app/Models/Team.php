<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'image_path',
        'facebook_url',
        'instagram_url',
        'dribbble_url',
        'linkedin_url',
        'order',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('active_teams_home');
            Cache::forget('active_teams_all');
        });

        static::deleted(function () {
            Cache::forget('active_teams_home');
            Cache::forget('active_teams_all');
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function getImageUrlAttribute()
    {
        if (!$this->image_path) {
            return asset('frontend/images/team/team-1.webp');
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
