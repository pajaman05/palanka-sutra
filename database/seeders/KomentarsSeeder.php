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
                'user_id' => 3,
                'vest_id' => 3,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Ovo je apsolutno neprihvatljivo! Ne smemo dozvoliti ovako nešto u dečijem filmu!',
            ],
            [
                'user_id' => 2,
                'vest_id' => 4,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Predivna ideja! Starijima je zaista potrebno ovakvo mesto za druženje i podršku.',
            ],
            [
                'user_id' => 4,
                'vest_id' => 1,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Ovo mi deluje kao preuveličavanje situacije.',
            ],
            [
                'user_id' => 1,
                'vest_id' => 2,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Mislim da nema dovoljno dokaza za ovu tvrdnju.',
            ],
            [
                'user_id' => 4,
                'vest_id' => 3,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Mogli su mnogo bolje da odrade ovaj film.',
            ],
            [
                'user_id' => 3,
                'vest_id' => 4,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Hvala na informacijama, ovo je veoma korisno.',
            ],
            [
                'user_id' => 1,
                'vest_id' => 5,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Zanimljiv pristup problemu, biće interesantno videti kako će se stvari odvijati.',
            ],
            [
                'user_id' => 2,
                'vest_id' => 5,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Ovo je samo vrh ledenog brega.',
            ],
            [
                'user_id' => 3,
                'vest_id' => 1,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Ne bih se složio sa ovakvim zaključkom.',
            ],
            [
                'user_id' => 4,
                'vest_id' => 2,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Verujem da se stvari neće razvijati kako je opisano.',
            ],
            [
                'user_id' => 3,
                'vest_id' => 3,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Ovaj film ima svojih mana, ali i dosta dobrih strana.',
            ],
            [
                'user_id' => 2,
                'vest_id' => 4,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Ovakvi projekti su od ključnog značaja za zajednicu.',
            ],
            [
                'user_id' => 1,
                'vest_id' => 5,
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Očekujem mnogo više dokaza pre nego što poverujem u ovakve tvrdnje.',
            ],
        ];
// Insert komentari

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
