<?php


namespace App\Domain\Role\Repositories;


use App\Domain\Role\Entities\Role;
use App\Domain\Role\Interfaces\RoleInterface;
use App\Domain\Role\Services\RoleService;

/**
 * Class RoleRepository
 * @package App\Domain\Role\Repositories
 * @implements RoleInterface
 * @service RoleService
 * @model Role
 *
 * @author Mirkomil Saitov <mirkomilsaitov@mgial.com>
 *
 */
class RoleRepository implements RoleInterface
{

    /**
     * @var RoleService
     */
    protected $roleServices;

    /**
     * @var Role
     */
    protected $roles;

    /**
     * @const PER_PAGE
     */
    const PER_PAGE = 20;

    /**
     * RoleRepository constructor.
     * @param RoleService $roleServices
     * @param Role $roles
     */
    public function __construct(RoleService $roleServices, Role $roles)
    {
        $this->roles = $roles;
        $this->roleServices = $roleServices;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function getAllRoles($data)
    {
        try {
            $roles = $this->roles;
            if(!empty($data)){
                $roles = $this->roleServices->filter($data, $roles);
            }
            return $roles->orderBy('id', 'desc')->paginate(self::PER_PAGE);

        }catch (\Throwable $exception){
            logger($exception);
        }

    }


    public function storeRole(array $data): array
    {
        // TODO: Implement storeRole() method.
    }

    public function updateRole(array $data, $id): array
    {
        // TODO: Implement updateRole() method.
    }

    public function deleteRole($id)
    {
        // TODO: Implement deleteRole() method.
    }
}
