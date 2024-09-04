<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
        DB::table('users')->insert([
            [
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('admin1'),
                'tip' => 'admin',
                'active' => true,
            ],
            [
                'name' => 'urednik1',
                'email' => 'urednik1@gmail.com',
                'password' => Hash::make('urednik1'),
                'tip' => 'urednik',
                'active' => true,
            ],
            [
                'name' => 'korisnik1',
                'email' => 'korisnik1@gmail.com',
                'password' => Hash::make('korisnik1'),
                'tip' => 'korisnik',
                'active' => true,
            ],
            [
                'name' => 'korisnik2',
                'email' => 'korisnik2@gmail.com',
                'password' => Hash::make('korisnik2'),
                'tip' => 'korisnik',
                'active' => true,
            ],
            [
                'name' => 'korisnik3',
                'email' => 'korisnik3@gmail.com',
                'password' => Hash::make('korisnik3'),
                'tip' => 'korisnik',
                'active' => true,
            ],
            [
                'name' => 'korisnik4',
                'email' => 'korisnik4@gmail.com',
                'password' => Hash::make('korisnik4'),
                'tip' => 'korisnik',
                'active' => true,
            ],
        ]);
        
    }
}
