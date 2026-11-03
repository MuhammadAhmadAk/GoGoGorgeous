<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'group',
    ];

    protected static $runtimeCache = null;

    protected static function booted()
    {
        static::saved(function () {
            static::clearSettingsCache();
        });

        static::deleted(function () {
            static::clearSettingsCache();
        });
    }

    public static function clearSettingsCache()
    {
        static::$runtimeCache = null;
        Cache::forget('site_settings_all');
    }

    public static function getAllSettings()
    {
        if (static::$runtimeCache !== null) {
            return static::$runtimeCache;
        }

        static::$runtimeCache = Cache::remember('site_settings_all', 86400, function () {
            return static::pluck('value', 'key')->toArray();
        });

        return static::$runtimeCache;
    }

    public static function get($key, $default = null)
    {
        $settings = static::getAllSettings();
        return array_key_exists($key, $settings) ? $settings[$key] : $default;
    }

    public static function set($key, $value, $group = 'general')
    {
        $setting = static::updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'group' => $group]
        );
        static::clearSettingsCache();
        return $setting;
    }
}
