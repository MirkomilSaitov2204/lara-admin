<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->string('slug');

            $table->string('image')->nullable();
            $table->json('description')->nullable();

            $table->foreignId('author_id')
                    ->constrained('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignId('category_id')
                    ->constrained('post_categories')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
