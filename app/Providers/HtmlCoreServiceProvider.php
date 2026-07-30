<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use Exception;

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
        // Load HtmlCore config via config file.
        Config::set('htmlcore', require config_path('htmlcore.php'));

        // Load other HtmlCore settings via settings table in database.
        try {

            // Check if the database connection is available
            DB::connection()->getPdo();

            if (Schema::hasTable('settings')) {
                $settings = Setting::all();
                foreach ($settings as $setting) {
                    Config::set('htmlcore.' . $setting->key, $setting->value);
                }
            }
        } catch (Exception $e) {
            // Handle the case where the database connection is not available or the table doesn't exist.
            // Log the exception or perform other actions.
            \Log::error('Could not load settings from the database: ' . $e->getMessage());
        }
    }
}
