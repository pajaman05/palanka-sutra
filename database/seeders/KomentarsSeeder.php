<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomentarsSeeder extends Seeder
{   
    public function run(): void {
        DB::table('')->insert([ //dati ime tabeli
            'date' => now()->toDateString(),  //datum
            'sadrzaj' => 'Ne verujem da je ovo moguce da se desi, barem ne u narednih nedelju dve dana', // .txt , ovde se moze i html pisati i to vazi za sve .txt filove
            'user_id' => '1', //ovo je samo primer!!! 2 zameniti sa kljucem
            'vest_id' => '2', // ovo je samo primer!!! 1 zameniti sa kljucem
    ]); 
    }
}
