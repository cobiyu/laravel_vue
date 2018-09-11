<?php

namespace App\Dto\GabiaUser;


use App\Dto\common\GabiaArrayObject;
use App\Dto\common\GabiaDto;

class UserArray extends GabiaArrayObject implements GabiaDto
{
    /**
     * @var null|User
     */
    private $user;

    /**
     * UserArray constructor.
     * @param User|null $user
     */
    public function __construct(?User $user=null)
    {

    }
}