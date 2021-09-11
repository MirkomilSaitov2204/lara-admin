<?php
/**
 * Created by PhpStorm.
 * User: 99899
 * Date: 25.04.2021
 * Time: 16:48
 */

namespace App\Domain\User\Employee\Repositories;


use App\Domain\Core\GlobalFunctionInterface;
use App\Domain\User\Employee\Interfaces\UserInterface;
use App\Domain\User\Employee\Services\UserService;

class PostCategoryRepository implements UserInterface, GlobalFunctionInterface
{

    protected  $userServices;

    public function __construct(UserServices $userServices)
    {
        $this->userServices= $userServices;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function getAllEmployees($data)
    {
        try {
            $users = $this->userServices->users();
            if(!empty($data) && !$data['page']){
                $users = $this->userServices->filter($data, $users);
            }
            return $users->orderBy('id', 'desc')->paginate(self::PER_PAGE);

        }catch (\Throwable $exception){
            logger($exception);
        }
    }

    /**
     * @param array $data
     * @return array
     */
    public function storeEmployee(array $data): array
    {
        try {
            
        } catch (Exception $e) {
            
        }
    }

    /**
     * @param array $data
     * @param $id
     * @return array
     */
    public function updateEmployee(array $data, $id): array
    {
        // TODO: Implement updateEmployee() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteEmployee($id)
    {
        // TODO: Implement deleteEmployee() method.
    }
}
