<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // ProductSeeder::class,
        // OrderSeeder::class,
        // OrderDetailSeeder::class
       ]);
    }
}
