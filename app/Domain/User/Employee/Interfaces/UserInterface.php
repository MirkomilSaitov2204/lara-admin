<?php
/**
 * Created by PhpStorm.
 * User: 99899
 * Date: 25.04.2021
 * Time: 16:42
 */

namespace App\Domain\User\Employee\Interfaces;


/**
 * Interface UserInterface
 * @package App\Domain\User\Employee\Interfaces
 *
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 */

interface UserInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function  getAllEmployees($data);

    /**
     * @param array $data
     * @return array
     */
    public function storeEmployee(array $data): array;

    /**
     * @param array $data
     * @param $id
     * @return array
     */
    public function updateEmployee(array $data, $id): array;

    /**
     * @param $id
     * @return mixed
     */
    public function deleteEmployee($id);
}
