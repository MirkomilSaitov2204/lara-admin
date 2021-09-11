<?php
/**
 * Created by PhpStorm.
 * User: 99899
 * Date: 25.04.2021
 * Time: 16:44
 */

namespace App\Domain\User\Employee\Services;


use App\Domain\User\Employee\Entities\User;

class UserService
{
    protected $users;

    /**
     * RoleService constructor.
     * @param Role $roles
     */
    public function __construct(Users $users)
    {
        $this->users = $users;
    }

    /**
     * @return Role
     */
    public function users(): Users
    {
        return $this->users;
    }

    /**
     * @param array $data
     * @param $roles
     * @return mixed
     */
    public function filter(array $data, $users)
    {
        $users = $data['id']
            ? $users->where('id', $data['id'])
            : $users;

        $users = $data['name']
            ? $users->where('name', 'LIKE', '%' . $data["name"] . '%')
            : $users;

        $users = $data['email']
            ? $users->where('email', 'LIKE', '%' . $data["email"] . '%')
            : $users;

        return $users;

    }
}
