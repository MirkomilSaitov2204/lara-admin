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
        $permissions = $data['id']
                    ? $permissions->where('id', $data['id'])
                    : $permissions;

        $permissions = $data['name']
            ? $permissions->where('name', 'LIKE', '%'.$data["name"].'%')
            : $permissions;

        $permissions = $data['id']
            ? $permissions->where('description', 'LIKE', '%'.$data["description"].'%')
            : $permissions;


        return $permissions;
    }
}
