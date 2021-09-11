<?php
/**
 * Created by PhpStorm.
 * User: 99899
 * Date: 25.04.2021
 * Time: 16:44
 */

namespace App\Domain\PostCategory\Services;


use App\Domain\PostCategory\Entities\PostCategory;

class PostCategoryService
{
    protected $postCategories;

    /**
     * RoleService constructor.
     * @param Role $roles
     */
    public function __construct(PostCategory $postCategories)
    {
        $this->postCategories = $postCategories;
    }

    /**
     * @return Role
     */
    public function postCategory(): PostCategory
    {
        return $this->postCategories;
    }

    /**
     * @param array $data
     * @param $roles
     * @return mixed
     */
    public function filter(array $data, $postCategories)
    {
        $postCategories = $data['id']
            ? $postCategories->where('id', $data['id'])
            : $postCategories;

        $postCategories = $data['name']
            ? $postCategories->where('name', 'LIKE', '%' . $data["name"] . '%')
            : $postCategories;

        $postCategories = $data['slug']
            ? $postCategories->where('slug', 'LIKE', '%' . $data["slug"] . '%')
            : $postCategories;

        return $postCategories;

    }
}
