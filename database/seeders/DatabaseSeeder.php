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
        $this->call([StateSeeder::class]);
        $this->call([DistrictSeeder::class]);
        $this->call([SubDistrictSeeder::class]);
        $this->call([ParliamentSeeder::class]);
        $this->call([DunSeeder::class]);
    }
}
