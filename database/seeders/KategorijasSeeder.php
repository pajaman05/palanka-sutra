<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategorijasSeeder extends Seeder
{
    
     // Run the database seeds.

     //Ovaj kod nije gotov, pratite komentare, tako da ga podesite za nas database
     
    public function run(): void
    {
        DB::table('kategorijas')->insert([
            [ //dati ime tabeli
            'naziv' => 'Kultura i Sport', //String
            'slug' => 'kultura-sport', //text
            'opis' => 'Ovo je uvodni tekst prve kategorije koji moye da sadri <b>html </b>', //String
            ],

            [ //dati ime tabeli
                'naziv' => 'Politika', //String
                'slug' => 'politika', //text
                'opis' => 'Ovo je uvodni tekst prve kategorije koji moye da sadri <b>html </b>', //String
            ],

            [ //dati ime tabeli
                'naziv' => 'Drustvo', //String
                'slug' => 'drustvo', //text
                'opis' => 'Ovo je uvodni tekst prve kategorije koji moye da sadri <b>html </b>', //String
            ],

            [ //dati ime tabeli
                'naziv' => 'Hronika', //String
                'slug' => 'hronika', //text
                'opis' => 'Ovo je uvodni tekst prve kategorije koji moye da sadri <b>html </b>', //String
            ],
    ]); 
    }
}
