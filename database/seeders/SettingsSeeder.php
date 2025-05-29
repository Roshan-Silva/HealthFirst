<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $settings = [
            ['key' => 'site_name', 'value' => 'My Website'],
            ['key' => 'site_description', 'value' => 'This is a sample website description.'],
            ['key' => 'site_email', 'value' => 'laravel'],
            ['key' => 'site_phone', 'value' => '123-456-7890'],
            ['key' => 'site_address', 'value' => '123 Main St, Anytown, USA'],
            ['key' => 'site_logo', 'value' => 'logo.png'],
            ['key' => 'site_favicon', 'value' => 'favicon.ico'],
            ['key' => 'site_keywords', 'value' => 'laravel, php, web development'],
            ['key' => 'site_copyright', 'value' => '&copy; 2025 My Website. All rights reserved.'],
            ['key' => 'site_social_facebook', 'value' => 'https://facebook.com/mywebsite'],
            ['key' => 'site_social_twitter', 'value' => 'https://twitter.com/mywebsite'],
            ['key' => 'site_social_instagram', 'value' => 'https://instagram.com/mywebsite'],
            ['key' => 'site_social_linkedin', 'value' => 'https://linkedin.com/company/mywebsite'],
            ['key' => 'site_social_youtube', 'value' => 'https://youtube.com/mywebsite'],
            

        ];

        foreach ($settings as $setting) {
            Settings::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
}
