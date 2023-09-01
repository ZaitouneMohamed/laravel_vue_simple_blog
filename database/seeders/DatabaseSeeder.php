<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(RolesSeeder::class);
        $this->call(CreateUsersSeeder::class);
        \App\Models\Categorie::factory(10)->create();
        \App\Models\Post::factory(20)->create();
        \App\Models\Comment::factory(100)->create();
    }
}
