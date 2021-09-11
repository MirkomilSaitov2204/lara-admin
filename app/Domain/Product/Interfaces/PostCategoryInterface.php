<?php
/**
 * Created by PhpStorm.
 * User: 99899
 * Date: 25.04.2021
 * Time: 16:42
 */

namespace App\Domain\PostCategory\Interfaces;


/**
 * Interface PostCategoryInterface
 * @package App\Domain\PottCategory\Interfaces
 *
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 */

interface PostCategoryInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function  getAllPostCategories($data);

    /**
     * @param array $data
     * @return array
     */
    public function storePostCategory(array $data): array;

    /**
     * @param array $data
     * @param $id
     * @return array
     */
    public function updatePostCategory(array $data, $id): array;

    /**
     * @param $id
     * @return mixed
     */
    public function deletePostCategory($id);
}
