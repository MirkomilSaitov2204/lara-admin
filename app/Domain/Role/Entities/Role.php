<?php

namespace App\Domain\Role\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;


/**
 * Class Role
 * @package App\Domain\Role\Entities
 * @package  \Spatie\Permission\Models\Role
 * @package \Spatie\HasTransactions
 * @package SoftDeletes
 *
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 *
 * @property integer $id
 * @property string $name
 * @property string $guard_name
 * @property json $description
 *
 */
class Role extends \Spatie\Permission\Models\Role
{
    use HasTranslations;
    use SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'guard_name', 'description'];

    /**
     * @var string[]
     */
    public $translatable = ['description'];


}
