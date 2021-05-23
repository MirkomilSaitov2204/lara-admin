<?php

namespace App\Domain\Post\Entities;

use App\Domain\Core\Entity;
use App\Domain\Tag\Entities\Tag;
use App\Domain\User\Employee\Entities\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpOffice\PhpSpreadsheet\Calculation\Category;
use Spatie\Translatable\HasTranslations;

/**
 * Class Post
 * @package App\Domain\Post\Entities
 * @relation belongs To Category Model
 * @relation belongs To User Model
 * @relation belongsTo Many Tag model
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 */
class Post extends Entity
{
    use HasTranslations, SoftDeletes;

    /**
     * @var array
     * Translatable columns
     */
    public $translatable = ['name', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
}
