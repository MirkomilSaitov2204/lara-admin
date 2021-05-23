<?php


namespace App\Domain\Permission\Interfaces;

/**
 * Interface PermissionInterface
 * @package App\Domain\Permission\Interfaces
 *
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 */
interface PermissionInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function  getAllPermissions($data);


    /**
     * get all Permission which has parent
     */
    public function getAllParentPermissions();

    /**
     * @param array $data
     * @return array
     */
    public function storePermissions($data);

    /**
     * @param array $data
     * @param $id
     * @return array
     */
    public function updatePermissions(array $data, $id): array;

    /**
     * @param $id
     * @return mixed
     */
    public function deletePermissions($id);
}
