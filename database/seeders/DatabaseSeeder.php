<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            KategorijasSeeder::class,
            VestsSeeder::class,
            DiskusijasSeeder::class,
            KomentarsSeeder::class,
            SponzorsSeeder::class,
            TimsSeeder::class,
        ]);
    }
}
