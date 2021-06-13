<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        Post::create([
            'title'=>'My first post personal',
            'category_id' => '1',
            'slug'=> 'first-blog',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
            'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                     magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                     pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                     laborum.',
        ]);

        Post::create([
            'title'=>'My second post hobby',
            'category_id' => '2',
            'slug'=> 'second-blog',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, jnfje jbfsajfb jnakjfn jnfjasfb najsbfnjse f jknfjdefne njsndefjsnefjbdrjgbrdjgbv mn vev gbdrsjg vdr',
        ]);

        Post::create([
            'title'=>'My third post work',
            'category_id' => '3',
            'slug'=> 'third-blog',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
            'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.',
        ]);

        Post::create([
            'title'=>'My forth post personal',
            'category_id' => '1',
            'slug'=> 'forth-blog',
            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
            'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' =>'personal'
        ]);
        Category::create([
            'name' => 'hobby',
            'slug' =>'hobby'
        ]);
        Category::create([
            'name' => 'work',
            'slug' =>'work'
        ]);
    }
}
