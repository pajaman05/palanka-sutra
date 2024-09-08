<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class timsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tims')->insert([
            [ 
                'naziv' => "Petar Prvulović",
                'opis' => "mnogo dobar lik",
                'slika' => "slike/tim-petar.PNG",
            ],

            [   
                'naziv' => "Pavle Milošević",
                'opis' => "mnogo dobar lik",
                'slika' => "slike/tim-pavle.PNG",
            ],

            [   
                'naziv' => "Aleksandar Dunjić",
                'opis' => "lik",
                'slika' => "slike/tim-dunjic.PNG",
            ],

            [   
                'naziv' => "Mirko Mileusnić",
                'opis' => "mnogo dobar lik",
                'slika' => "slike/tim-mirko.PNG",
            ],
            
            [   
                'naziv' => "Mladen Vulićević",
                'opis' => "mnogo dobar lik",
                'slika' => "slike/tim-mladen.PNG",
            ]
        ]);
    }
}
