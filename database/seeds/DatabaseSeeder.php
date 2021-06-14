<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); // remove it here before PostFactory seed
        Category::truncate();

        $this->call(PostSeeder::class);
    }
}
