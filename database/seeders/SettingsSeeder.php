<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            # General
            [
                'key' => 'website_name',
                'value' => 'THIYA',
            ],
            [
                'key' => 'website_url',
                'value' => 'https://thehimalayanfarm.in',
            ],
            [
                'key' => 'website_email_address',
                'value' => 'support@thehimalayanfarm.in',
            ],
            [
                'key' => 'user_registration',
                'value' => '1',
            ],
            [
                'key' => 'new_user_default_role',
                'value' => 'user',
            ],
            [
                'key' => 'website_language',
                'value' => 'en',
            ],
            [
                'key' => 'timezone',
                'value' => 'Asia/Kolkata',
            ],
            [
                'key' => 'date_format',
                'value' => 'F j, Y',
            ],

            # SEO Configuration
            [
                'key' => 'seo_title',
                'value' => 'THIYA',
            ],
            [
                'key' => 'seo_author',
                'value' => 'Vineet Chauhan',
            ],
            [
                'key' => 'seo_keywords',
                'value' => '',
            ],
            [
                'key' => 'seo_description',
                'value' => '',
            ],
            [
                'key' => 'social_title',
                'value' => 'THIYA',
            ],
            [
                'key' => 'social_description',
                'value' => '',
            ],
            [
                'key' => 'social_image',
                'value' => '',
            ],

            // Logo & Favicon
            [
                'key' => 'light_logo',
                'value' => '',
            ],
            [
                'key' => 'dark_logo',
                'value' => '',
            ],
            [
                'key' => 'favicon',
                'value' => '',
            ],

            // SMTP
            [
                'key' => 'smtp_host',
                'value' => '',
            ],
            [
                'key' => 'smtp_port',
                'value' => '',
            ],
            [
                'key' => 'smtp_username',
                'value' => '',
            ],
            [
                'key' => 'smtp_password',
                'value' => '',
            ],
            [
                'key' => 'smtp_sender_email',
                'value' => '',
            ],
            [
                'key' => 'smtp_sender_name',
                'value' => '',
            ],
            [
                'key' => 'smtp_encryption',
                'value' => '',
            ],

            // Custom Code
            [
                'key' => 'header_code',
                'value' => '',
            ],
            [
                'key' => 'footer_code',
                'value' => '',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
