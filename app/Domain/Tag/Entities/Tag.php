<?php

namespace App\Domain\Tag\Entities;

use App\Domain\Core\Entity;
use App\Domain\Post\Entities\Post;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;


/**
 * Class Tag
 * @package App\Domain\Tag\Entities
 * @relation belongs To Many Tag Model
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 */
class Tag extends Entity
{

    use HasTranslations, SoftDeletes;

    /**
     * @var array
     * Translatable columns
     */
    public $translatable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_tags');
    }
}
