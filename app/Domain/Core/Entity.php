<?php


namespace App\Domain\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entity
 * @package App\Domain\Core
 * @property $guarded
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 */
class Entity extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];
}
