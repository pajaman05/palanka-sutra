<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class sponzorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sponzors')->insert([
                [
                'naziv' => "Coca Cola",
                'opis' => "Coca Cola je najpopularnije i najprodavanije bezalkoholno piće u istoriji, kao i jedan od najprepoznatljivijih brendova na svetu.",
                'slika' => "https://i5.walmartimages.com/asr/f9d7f134-f5cc-4bec-8e24-5a04f7cb186a.1a448df2a26f2a53e52e0ecc7f0274f8.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF",
            ],[ 
                'naziv' => "Red Bull",
                'opis' => "Red Bull okrepljuje duh i telo — Ostani fokusiran i pun energije uz Red Bull.",
                'slika' => "https://media.designrush.com/inspiration_images/296009/conversions/Red_Bull_logo_design_2_718dd0bf66ed-mobile.jpg",
            ],[ 
                'naziv' => "Jaffa cakes",
                'opis' => "Već duže od 4 decenije Jaffa širi optimizam i mami osmeh na lice generacijama.",
                'slika' => "https://3dsolutions.rs/wp-content/uploads/2022/02/Logo-%E2%80%93-6-1.png",
            ],[ 
                'naziv' => "Doritos",
                'opis' => "Doritosi: Hrskavost koja budi sva čula!",
                'slika' => "https://pbs.twimg.com/profile_images/1730980016752656384/GYfW_JFT_400x400.jpg",
            ],[ 
                'naziv' => "Imlek",
                'opis' => "Imlek - Snažna tradicija, svežina u svakom gutljaju!",
                'slika' => "https://logowik.com/content/uploads/images/316_imlek_logo.jpg",
            ],[ 
                'naziv' => "ROCK sok",
                'opis' => "ROCK sok je najbolji sok!",
                'slika' => "https://www.rocksnacks.rs/images/multi-grozdje-jabuka-3-home-1.png",
            ]
        ]);
    }
}
