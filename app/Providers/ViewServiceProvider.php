<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\SiteSetting;
use App\Models\Gallery;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('frontend.*', function ($view) {
            $settings = SiteSetting::getAllSettings();
            $view->with('settings', $settings);
        });

        View::composer('frontend.layouts.footer', function ($view) {
            $footerGalleries = Cache::remember('active_galleries_footer', 86400, function () {
                return Gallery::active()->orderBy('order', 'asc')->take(6)->get();
            });
            $view->with('footerGalleries', $footerGalleries);
        });
    }
}
