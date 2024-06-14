<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'settings_seeded_timestamp',
                'value' => now(),
                'description' => 'The settings were seeded at this date and time.',
                'active' => true,
            ],
            [
                'key' => 'default_language',
                'value' => 'nl',
                'description' => 'Get the language when no language is explicitly set.',
                'active' => true,
            ],
            [
                'key' => 'front_page_nl',
                'value' => 'voorpagina-nl',
                'description' => 'Which content to load for the Dutch front page.',
                'active' => true,
            ],
            [
                'key' => 'front_page_en',
                'value' => 'front-page-en',
                'description' => 'Which content to load for the English front page.',
                'active' => true,
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
