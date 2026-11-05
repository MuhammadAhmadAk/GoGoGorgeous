<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
        'order',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('active_faqs_all');
        });

        static::deleted(function () {
            Cache::forget('active_faqs_all');
        });
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
