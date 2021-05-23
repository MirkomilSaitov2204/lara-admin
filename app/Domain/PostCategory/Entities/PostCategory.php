<?php

namespace App\Domain\PostCategory\Entities;

use App\Domain\Core\Entity;
use App\Domain\Post\Entities\Post;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class PostCategory extends Entity
{
    use SoftDeletes, HasTranslations;


    protected $table = 'post_categories';


    /**
     * @var array
     * Translatable columns
     */
    public $translatable = ['description', 'name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class, 'parent_id');
    }
}
