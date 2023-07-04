<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            KriteriaSeeder::class,
            SubKriteriaSeeder::class,
            MahasiswaSeeder::class,
            UserSeeder::class,
            NilaiSeeder::class,
    ]);
    }
}
