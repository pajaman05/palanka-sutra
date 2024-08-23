<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Komentar;

class KomentarsSeeder extends Seeder
{   
    public function run(): void {
        // Define an array of komentars to seed
        $komentars = [
            [
                'user_id' => 1,
                'vest_id' => 1,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Ne verujem da je ovo moguce da se desi, barem ne u narednih nedelju dve dana',
            ],

            [
                'user_id' => 2,
                'vest_id' => 2,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Sta sve ljudi rade, ovo me uopste ne bi cudilo',
            ],

            [
                'user_id' => 3, // Replace with appropriate user ID
                'vest_id' => 3, // Replace with appropriate post ID
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Ovo je apsolutno neprihvatljivo! Ne smemo dozvoliti ovako nešto u dečijem filmu!',
            ],

            [
                'user_id' => 2, // Replace with appropriate user ID
                'vest_id' => 4, // Replace with appropriate post ID
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Predivna ideja! Starijima je zaista potrebno ovakvo mesto za druženje i podršku.',
            ],
            // Add more komentars here if needed
        ];

        // Loop through the array and create or update each komentar
        foreach ($komentars as $komentar) {
            Komentar::updateOrCreate(
                [
                    'user_id' => $komentar['user_id'],
                    'vest_id' => $komentar['vest_id'],
                ],
                
                [
                    'datum' => $komentar['datum'],
                    'sadrzaj' => $komentar['sadrzaj'],
                ]
            );
        }
    }
}
