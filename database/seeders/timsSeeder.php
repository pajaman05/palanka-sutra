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
                'opis' => "",
                'slika' => "",
            ],

            [   
                'naziv' => "Pavle Milošević",
                'opis' => "",
                'slika' => "",
            ],

            [   
                'naziv' => "Aleksandar Dunjić",
                'opis' => "",
                'slika' => "",
            ],

            [   
                'naziv' => "Mirko Mileusnić",
                'opis' => "",
                'slika' => "",
            ],
            
            [   
                'naziv' => "Mladen Vulićević",
                'opis' => "",
                'slika' => "",
            ]
        ]);
    }
}
