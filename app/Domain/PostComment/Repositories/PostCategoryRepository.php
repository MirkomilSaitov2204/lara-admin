<?php
/**
 * Created by PhpStorm.
 * User: 99899
 * Date: 25.04.2021
 * Time: 16:48
 */

namespace App\Domain\PostCategory\Repositories;


use App\Domain\Core\GlobalFunctionInterface;
use App\Domain\PostCategory\Interfaces\PostCategoryInterface;
use App\Domain\PostCategory\Services\PostCategoryService;

class PostCategoryRepository implements PostCategoryInterface, GlobalFunctionInterface
{

    protected  $postCategoryServices;

    public function __construct(PostCategoryService $postCategoryServices)
    {
        $this->postCategoryServices= $postCategoryServices;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function getAllPostCategories($data)
    {
        try {
            $postCategory = $this->postCategoryServices->postCategory();
            if(!empty($data) && !$data['page']){
                    dd($data);
                $postCategory = $this->postCategoryServices->filter($data, $postCategory);
            }
            return $postCategory->orderBy('id', 'desc')->paginate(self::PER_PAGE);

        }catch (\Throwable $exception){
            logger($exception);
        }
    }

    /**
     * @param array $data
     * @return array
     */
    public function storePostCategory(array $data): array
    {
        // TODO: Implement storePostCategory() method.
    }

    /**
     * @param array $data
     * @param $id
     * @return array
     */
    public function updatePostCategory(array $data, $id): array
    {
        // TODO: Implement updatePostCategory() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deletePostCategory($id)
    {
        // TODO: Implement deletePostCategory() method.
    }
}
