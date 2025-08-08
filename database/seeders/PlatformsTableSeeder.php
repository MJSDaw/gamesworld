<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('platforms')->insert([
            ['name' => 'PC'],
            ['name' => 'PlayStation 5'],
            ['name' => 'Xbox Series X'],
            ['name' => 'Nintendo Switch'],
            ['name' => 'Mobile'],
        ]);
    }
}
