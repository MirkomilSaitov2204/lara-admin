<?php


namespace App\Domain\Role\Repositories;


use App\Domain\Core\GlobalFunctionInterface;
use App\Domain\Role\Interfaces\RoleInterface;
use App\Domain\Role\Services\RoleService;

/**
 * Class RoleRepository
 * @package App\Domain\Role\Repositories
 * @implements RoleInterface
 * @implements GlobalFunctionInterFace
 * @service RoleService
 *
 * @author Mirkomil Saitov <mirkomilsaitov@mgial.com>
 *
 */
class RoleRepository implements RoleInterface, GlobalFunctionInterface
{

    /**
     * @var RoleService
     */
    protected $roleServices;


    /**
     * @const PER_PAGE
     */

    /**
     * RoleRepository constructor.
     * @param RoleService $roleServices
     */
    public function __construct(RoleService $roleServices)
    {
        $this->roleServices = $roleServices;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function getAllRoles($data)
    {

        try {
            $roles = $this->roleServices->roles();
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
