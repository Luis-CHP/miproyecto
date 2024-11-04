<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\categorias;
use App\Models\Computer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class, CategoriaSeeder::class]);

        User::factory(10)->create();
        //Computer::factory(10)->create();
        //categorias::factory(10)->create();
    }

    

}
