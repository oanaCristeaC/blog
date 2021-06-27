<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->create([
            'name' => 'John Doe',
        ]);

        $catNames = array('it', 'sport', 'food');

        //todo: O(1) instead of O(n)
        foreach ($catNames as $category) {
            $catObj = factory(Category::class)->create([
                'name' => $category,
            ]);

            factory(Post::class, 5)->create([
                'user_id' => $user->id,
                'category_id' => $catObj->id
            ]);
        }
    }
}
