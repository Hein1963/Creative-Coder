<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Blog::truncate();
        $frontend = Category::factory()->create(['name'=>'frontend']);
        $backend = Category::factory()->create(['name'=>'backend']);
        Blog::factory(2)->create(['category_id'=>$frontend->id]);
        Blog::factory(2)->create(['category_id'=>$backend->id]);
    }
}