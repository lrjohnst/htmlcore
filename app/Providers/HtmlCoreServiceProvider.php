<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

class HtmlCoreServiceProvider extends ServiceProvider
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
        // Load LJB config via config file.
        Config::set('htmlcore', require config_path('htmlcore.php'));

        // Load other HtmlCore settings via settings table in database.
        if (Schema::hasTable('settings')) {
            $settings = Setting::all();
            foreach ($settings as $setting) {
                Config::set('htmlcore.' . $setting->key, $setting->value);
            }
        }
    }
}
