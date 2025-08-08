<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('publishers')->insert([
            ['name' => 'Nintendo'],
            ['name' => 'Valve'],
            ['name' => 'CD Projekt'],
            ['name' => 'Rockstar Games'],
            ['name' => 'Ubisoft'],
        ]);
    }
}
