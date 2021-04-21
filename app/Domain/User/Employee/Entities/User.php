<?php

namespace App\Domain\User\Employee\Entities;

use App\Domain\Core\Entity;
use Illuminate\Notifications\Notifiable;

class User extends Entity
{


    use Notifiable;


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
