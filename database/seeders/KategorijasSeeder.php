<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorijasSeeder extends Seeder
{
    
     // Run the database seeds.

     //Ovaj kod nije gotov, pratite komentare, tako da ga podesite za nas database
     
    public function run(): void
    {
        DB::table('')->insert([ //dati ime tabeli
            'naziv' => 'Prav kategorija', //String
            'slug' => 'prva-kategorija', //text
            'opis' => 'Ovo je uvodni tekst prve kategorije koji moye da sadri <b>html </b>', //String
        ]); 
    }
}
