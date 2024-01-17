<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => '3400 Train',
                'passengers' => 230,
                'year' => 2018,
                'train_type_id' => 1
            ],
            [
                'name' => '4000 Train',
                'passengers' => 130,
                'year' => 2012,
                'train_type_id' => 2
            ],
            [
                'name' => '3570 Train',
                'passengers' => 300,
                'year' => 2021,
                'train_type_id' => 3
            ]
        ]);
    }
}
