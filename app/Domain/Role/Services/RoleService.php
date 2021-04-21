<?php


namespace App\Domain\Role\Services;


use App\Domain\Role\Entities\Role;

/**
 * Class RoleService
 * @package App\Domain\Role\Services
 * @method constructor(array $roles)
 * @method  filters(array $requst, mixed $roles)
 *
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 */
class RoleService
{
    protected $roles;

    /**
     * RoleService constructor.
     * @param Role $roles
     */
    public function __construct(Role $roles)
    {
        $this->roles = $roles;
    }

    /**
     * @param array $data
     * @param $roles
     * @return mixed
     */
    public function filter(array $data, $roles)
    {
        $roles = $data['id']
            ? $roles->where('id', $data['id'])
            :$roles;

        $roles = $data['name']
                ? $roles->where('name', 'LIKE', '%'.$data["name"].'%')
                :$roles;

        $roles = $data['description']
                ? $roles->where('description', 'LIKE', '%'.$data["description"].'%')
                : $roles;

        return $roles;

    }
}
