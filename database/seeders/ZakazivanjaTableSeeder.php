<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZakazivanjaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zakazivanjes')->insert(
            [
                ['ime' => 'Stefan', 'prezime' => 'Tanasic', 'opis_problema' => 'polomio nogu', 'datum' => '2021-02-03', 'lekar_id' => 2],
                ['ime' => 'Nikola', 'prezime' => 'Jeremic', 'opis_problema' => 'polomio obe noge', 'datum' => '2021-02-02', 'lekar_id' => 1]
            ]
        );
    }
}
