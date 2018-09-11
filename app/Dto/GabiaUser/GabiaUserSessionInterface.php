<?php

namespace App\Dto\GabiaUser;


use App\Dto\GabiaUser\User;


interface GabiaUserSessionInterface
{
    /**
     * @return boolean
     */
    public function isLogin();

    /**
     * @return User
     */
    public function getUser();
}