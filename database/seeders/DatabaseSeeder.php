<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Idea;
use App\Models\Vote;
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
        User::factory()->create([
            'name' => 'Helen',
            'email' => 'helen@example.com',
        ]);
        User::factory(19)->create();

        Category::factory()->create(['name' => 'category1']);
        Category::factory()->create(['name' => 'category2']);
        Category::factory()->create(['name' => 'category3']);
        Category::factory()->create(['name' => 'category4']);
        Idea::factory(100)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        foreach(range(1,20) as $user_id){
            foreach(range(1,100) as $idea_id){
                Vote::factory()->create([
                    'user_id' => $user_id,
                    'idea_id' => $idea_id,
                ]);
            }
        }
    }
}
