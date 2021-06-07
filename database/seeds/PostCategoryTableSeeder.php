<?php

use Illuminate\Database\Seeder;

class PostCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(\App\Domain\PostCategory\Entities\PostCategory::class, 10)->create();
//            ->each(function($category) {
//               $category->posts()->createMany(factory(\App\Domain\Post\Entities\Post::class, 1)
//                   ->make()->map->getAttributes());
//            }
//        );
    }
}
