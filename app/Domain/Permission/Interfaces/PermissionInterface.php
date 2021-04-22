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
     * @param array $data
     * @return array
     */
    public function storePermissions(array $data): array;

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
