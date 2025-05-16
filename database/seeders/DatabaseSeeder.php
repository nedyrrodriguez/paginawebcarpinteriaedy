<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Producto1;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();
        Producto1::factory(100)->create();

        
    }
}
