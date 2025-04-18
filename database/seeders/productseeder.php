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
                'gallery' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnnFf6DXcgRxe71BOQm1orHpnKjJloo9c2jg&s",
                'description' => 'android mobile with year 2025 feature'
            ],
            [
                'name' => "lg tv",
                'price' => '42000',
                'category' => 'tv',
                'gallery' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnnFf6DXcgRxe71BOQm1orHpnKjJloo9c2jg&s",
                'description' => 'google tv with year all google feature'
            ],
            [
                'name' => "samsung moniter",
                'price' => '9000',
                'category' => 'moniter',
                'gallery' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnnFf6DXcgRxe71BOQm1orHpnKjJloo9c2jg&s",
                'description' => 'android mobile with year 2025 feature'
            ] ,
            [
                'name' => "intel moniter",
                'price' => '5000',
                'category' => 'moniter',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnnFf6DXcgRxe71BOQm1orHpnKjJloo9c2jg&s',
                'description' => 'android mobile with year 2025 feature'
            ]

        ]);
    }
}
