<?php


namespace App\Domain\Permission\Repositories;


use App\Domain\Core\GlobalFunctionInterface;
use App\Domain\Permission\Entities\Permission;
use App\Domain\Permission\Interfaces\PermissionInterface;
use App\Domain\Permission\Services\PermissionService;

class PermissionRepository implements PermissionInterface, GlobalFunctionInterface
{
    /**
     * @var $permissionServices
     */
    protected $permissionServices;


    /**
     * @const PER_PAGE
     */

    /**
     * RoleRepository constructor.
     * @param PermissionService $permissionServices
     */
    public function __construct(PermissionService $permissionServices)
    {
        $this->permissionServices = $permissionServices;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function getAllPermissions($data)
    {
        try {
            $permissions = $this->permissionServices->permissions();
            if(!empty($data)){
                $permissions = $this->permissionServices->filter($data, $permissions);
            }
            return $permissions->orderBy('id', 'asc')->paginate(self::PER_PAGE);

        }catch (\Throwable $exception){
            logger($exception);
        }

    }

    public function getAllParentPermissions()
    {
        $permissions = $this->permissionServices->permissions()->where('parent_id', 0)->get();
        return $permissions;
    }


    public function storePermissions($data)
    {

        try{
            $permissions = Permission::create($data);
            return $permissions;
        }catch (\Throwable $exception){
            logger($exception);
        }
    }

    public function updatePermissions(array $data, $id): array
    {
        // TODO: Implement storePermissions() method.
    }

    public function deletePermissions($id)
    {
        // TODO: Implement storePermissions() method.
    }

}
