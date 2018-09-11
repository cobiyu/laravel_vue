<?php

namespace App\Dto\GabiaUser;


use App\Dto\common\GabiaDto;

class User implements GabiaDto
{
    /**
     * @var null|string
     */
    private $user_id;
    /**
     * @var null|string
     */
    private $register;
    /**
     * @var null|string
     */
    private $email;

    /**
     * User constructor.
     * @param null|string $user_id
     * @param null|string $register
     * @param null|string $email
     */
    public function __construct(?string $user_id, ?string $register, ?string $email)
    {
        $this->user_id = $user_id;
        $this->register = $register;
        $this->email = $email;
    }

    /**
     * @return null|string
     */
    public function getUserId(): ?string
    {
        return $this->user_id;
    }

    /**
     * @param null|string $user_id
     */
    public function setUserId(?string $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return null|string
     */
    public function getRegister(): ?string
    {
        return $this->register;
    }

    /**
     * @param null|string $register
     */
    public function setRegister(?string $register): void
    {
        $this->register = $register;
    }

    /**
     * @return null|string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }




}