<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = factory(Post::class, 5)
            ->create()
            ->each(function ($post) {

                // Create Models Support
                $tag = factory(Tag::class)->create();

                // Create Pivot with Parameters
                $post->tags()->attach($tag->id);
            });
    }
}
