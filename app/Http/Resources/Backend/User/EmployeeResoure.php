<?php

namespace App\Http\Resources\Backend\User;

use App\Http\Resources\Backend\BaseResource;

class EmployeeResoure extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        self::ID = $this->id;
        self::NAME = $this->name;
        self::EMAIL = $this->email;
    }
}
