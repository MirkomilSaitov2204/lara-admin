<?php

namespace App\Http\Resources\Backend\Action;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PermissionResourceCollection extends ResourceCollection
{
    public $collects = 'App\Http\Resources\Backend\Action\PermissionResoure';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            self::DATA => $this->collection,
            self::PAGINATION => [
                self::TOTAL         => $this->total(),
                self::COUNT         => $this->count(),
                self::PER_PAGE      => $this->perPage(),
                self::LAST_PAGE     => $this->lastPage()
                self::TOTAL_PAGEs   => $this->lastPage(),
                self::CURRENT_PAGE  => $this->currentPage(),
            ]
        ];
    }
}
