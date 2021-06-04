<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = \App\Domain\Tag\Entities\Tag::inRandomOrder()->take(5)->get();
        factory(\App\Domain\Post\Entities\Post::class, 1000)->create()
            ->each(function($post) use ($tags){
                $post->tags()->sync($tags);
            });;

    }
}
