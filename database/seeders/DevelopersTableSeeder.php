<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevelopersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('developers')->insert([
            ['name' => 'Nintendo'],
            ['name' => 'Valve'],
            ['name' => 'CD Projekt Red'],
            ['name' => 'Rockstar Games'],
            ['name' => 'Ubisoft'],
        ]);
    }
}
