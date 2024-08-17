<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiskusijasSeeder extends Seeder
{   
    public function run(): void {
        DB::table('diskusijas')->insert([
            [
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Ne verujem da je ovo moguce da se desi, barem ne u narednih nedelju dve dana',
                'user_id' => 1,
            ],

            [
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Kako ne veruješ? Videli smo toliko čudnih stvari u poslednje vreme.',
                'user_id' => 2,
            ],

            [
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Nema šanse, to je samo neko ko želi da napravi paniku.',
                'user_id' => 1,
            ],

            [
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Moguće, ali bolje da smo oprezni nego da kasnije žalimo.',
                'user_id' => 2,
            ],
            
            [
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Slažem se, ali mislim da preterujemo sa panikom.',
                'user_id' => 1,
            ],
        ]);
    }
}
