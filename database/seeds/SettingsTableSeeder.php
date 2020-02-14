<?php

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'company_name' => 'Your Company',
            'description' => 'This is your description.',
            'mobile' => '01834507645',
            'hotline' => '01834507645',
            'telephone' => '02-0900900',
            'email' => 'admin@yourdomain.com',
            'address' => 'Your address',
            'footer_text' => 'Your company all rights reserved.'
        ]);
    }
}
