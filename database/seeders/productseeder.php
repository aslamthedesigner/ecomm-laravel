<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => "lg mobile",
                'price' => '12000',
                'category' => 'mobile',
                'gallery' => 'https://www.lg.com/levant_en/mobile-phones',
                'description' => 'android mobile with year 2025 feature'
            ],
            [
                'name' => "lg tv",
                'price' => '42000',
                'category' => 'tv',
                'gallery' => 'https://www.lg.com/content/dam/channel/wcms/in/images/tvs/70up7500ptz_atr_eail_in_c/gallery/70UP7500PTZ-DZ-01-v1.jpg',
                'description' => 'google tv with year all google feature'
            ],
            [
                'name' => "samsung moniter",
                'price' => '9000',
                'category' => 'moniter',
                'gallery' => 'https://www.amazon.in/Samsung-Freesync-Bezel-Less-Eye-Saver-LS24DG300EWXXL/dp/B0D9KCPPTK?th=1',
                'description' => 'android mobile with year 2025 feature'
            ]

        ]);
    }
}
