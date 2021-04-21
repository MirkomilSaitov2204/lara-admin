<?php


namespace App\Domain\Role\Interfaces;


/**
 * Interface RoleInterface
 * @package App\Domain\Role\Interfaces
 *
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 */
interface RoleInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function  getAllRoles($data);

    /**
     * @param array $data
     * @return array
     */
    public function storeRole(array $data): array;

    /**
     * @param array $data
     * @param $id
     * @return array
     */
    public function updateRole(array $data, $id): array;

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRole($id);
}
