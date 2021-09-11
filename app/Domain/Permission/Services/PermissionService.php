<?php


namespace App\Domain\Permission\Services;


use App\Domain\Permission\Entities\Permission;

/**
 * Class PermissionService
 * @package App\Domain\Permission\Services
 * 
 * @method __construct()
 * @method permissions()
 * @method filter(array, array)
 * 
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 */
class PermissionService
{
    protected $permissions;

    /**
     * Constructor for initializing $permissions 
     * Permission $permission
     */
    public function __construct(Permission $permissions)
    {
        return $this->permissions = $permissions;
    }

    /**
     * Get All permissions
     */
    public function permissions(): Permission
    {
        return $this->permissions;
    }

    /**
     * Filter permissions 
     */
    public function filter(array $data, $permissions)
    {

        $permissions = isset($data['parent_id'])
            ? $permissions->where('parent_id', $data['parent_id'])
            : $permissions;

        $permissions = isset($data['name'])
            ? $permissions->where('name', 'LIKE', '%'.$data["name"].'%')
            : $permissions;

        $permissions = isset($data['description'])
            ? $permissions->where('description', 'LIKE', '%'.$data["description"].'%')
            : $permissions;


        return $permissions;
    }
}
