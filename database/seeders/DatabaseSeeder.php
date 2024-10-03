<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    /**
 * Run the database seeders.
 */
public function run(): void
{
    $this->call([ UserSeeder::class, ]);
}
}
