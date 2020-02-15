<?php

use App\Models\FeatureSection;
use Illuminate\Database\Seeder;

class FeatureSectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeatureSection::create([
            'title' => 'Your title',
            'sub_title' => 'Your subtitle goes here',
            'price' => '190.00',
            'shop_now_link' => 'http://ahmedshakil.com',
            'details_link' => 'http://ahmedshakil.com',
        ]);
    }
}
