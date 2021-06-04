<?php


namespace App\Domain\Permission\Services;


use App\Domain\Permission\Entities\Permission;

class PermissionService
{
    protected $permissions;

    public function __construct(Permission $permissions)
    {
        return $this->permissions = $permissions;
    }

    public function permissions(): Permission
    {
        return $this->permissions;
    }

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
