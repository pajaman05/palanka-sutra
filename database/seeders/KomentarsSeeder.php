<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomentarsSeeder extends Seeder
{   
    public function run(): void {
        DB::table('komentars')->insert([ //dati ime tabeli
            'datum' => now()->toDateString(),  //datum
            'sadrzaj' => 'Ne verujem da je ovo moguce da se desi, barem ne u narednih nedelju dve dana', // .txt , ovde se moze i html pisati i to vazi za sve .txt filove
            'user_id' => '', //ovo je samo primer!!! 2 zameniti sa kljucem
            'vest_id' => '', // ovo je samo primer!!! 1 zameniti sa kljucem
    ]); 
    }
}
