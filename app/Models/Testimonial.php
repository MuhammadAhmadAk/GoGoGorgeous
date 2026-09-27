<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_role',
        'rating',
        'review',
        'avatar',
        'order',
        'status',
    ];

    protected $casts = [
        'rating' => 'integer',
        'status' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function getAvatarUrlAttribute()
    {
        if (!$this->avatar) {
            return asset('frontend/images/gallery/gallery-1.webp');
        }
        if (str_starts_with($this->avatar, 'http://') || str_starts_with($this->avatar, 'https://')) {
            return $this->avatar;
        }
        if (file_exists(public_path($this->avatar))) {
            return asset($this->avatar);
        }
        return asset('storage/' . $this->avatar);
    }
}
