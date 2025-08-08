<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('games')->insert([
            [
                'title' => 'The Legend of Zelda: Breath of the Wild',
                'description' => 'Open-world adventure game developed by Nintendo.',
                'releaseDate' => '2017-03-03',
                'developer' => 1,
                'publisher' => 1,
            ],
            [
                'title' => 'Half-Life 2',
                'description' => 'First-person shooter by Valve.',
                'releaseDate' => '2004-11-16',
                'developer' => 2,
                'publisher' => 2,
            ],
        ]);
    }
}
