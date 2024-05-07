<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Idea;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::factory()->create(['name' => 'category1']);
        Category::factory()->create(['name' => 'category2']);
        Category::factory()->create(['name' => 'category3']);
        Category::factory()->create(['name' => 'category4']);
        Idea::factory(30)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
