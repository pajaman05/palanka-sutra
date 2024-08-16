<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Komentar;

class KomentarsSeeder extends Seeder
{   
    public function run(): void {
        $user_id = 1; // Replace with a valid user ID
        $vest_id = 1; // Replace with a valid user ID

        Komentar::updateOrCreate(
            ['user_id' => $user_id, 'vest_id' => $vest_id], // Unique constraints
            [
                'datum' => now()->toDateString(),
                'sadrzaj' => 'Ne verujem da je ovo moguce da se desi, barem ne u narednih nedelju dve dana',
            ]
        );
    }
}
