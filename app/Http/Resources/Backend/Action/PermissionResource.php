<?php

namespace App\Http\Resources\Backend\Action;

use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            self::ID = $this->id;
            self::NAME = $this->name;
        ]
    }
}
