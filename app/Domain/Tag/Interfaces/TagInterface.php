<?php


namespace App\Domain\Tag\Interfaces;

/**
 * Interface TagInterface
 * @package App\Domain\Tag\Interfaces
 *
 * @author Mirkomil Saitov <mirkomilsaitov@gmail.com>
 */
interface TagInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function  getAllTags($data);

    /**
     * @param array $data
     * @return array
     */
    public function storeTags($data);

    /**
     * @param array $data
     * @param $id
     * @return array
     */
    public function updateTags(array $data, $id): array;

    /**
     * @param $id
     * @return mixed
     */
    public function deleteTags($id);
}
