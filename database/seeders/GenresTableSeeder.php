<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('genres')->insert([
            ['name' => 'Action'],
            ['name' => 'Adventure'],
            ['name' => 'RPG'],
            ['name' => 'Shooter'],
            ['name' => 'Strategy'],
            ['name' => 'Simulation'],
            ['name' => 'Sports'],
        ]);
    }
}
