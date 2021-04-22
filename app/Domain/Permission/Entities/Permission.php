<?php

namespace App\Domain\Permission\Entities;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

/**
 * Class Permission
 * @package App\Domain\Permission\Entities
 * @package \Spatie\HasTransactions
 * @package SoftDeletes
 *
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property json $description
 * @property static   $guard_name
 */
class Permission extends \Spatie\Permission\Models\Permission
{
    use SoftDeletes, HasTranslations;

    /**
     * @var array $guarded
     */
    protected $guarded = [];

    /**
     * @var string $table name
     */
    protected $table = 'permissions';

    /**
     * @var string[] $translatable
     */
    public  $translatable = ['description'];

    /**
     * @return BelongsTo get parent
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Permission::class);
    }

    /**
     * @return HasMany get children
     */
    public function children(): HasMany
    {
        return $this->hasMany(Permission::class, 'parent_id', 'id');
    }


}
