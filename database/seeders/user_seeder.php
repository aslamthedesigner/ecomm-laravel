<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'nawaz',
            'email'=>'nawaz@balapariya.com',
            'password'=>Hash::make('12345')
        ],
        [
            'name'=>'aslam',
            'email'=>'aslam@bala.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
 