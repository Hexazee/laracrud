<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        
        Category::create([
            'name' => 'Programming'
        ]);
        Category::create([
            'name' => 'Tutorial'
        ]);
        Category::create([
            'name' => 'Article'
        ]);

        Post::factory(10)->create();

    }
}
