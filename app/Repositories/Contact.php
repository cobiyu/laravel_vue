<?php


namespace App\Repositories;


class Contact extends GabiaDto
{
    /**
     * Full name
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * Contact constructor.
     * @param string $name
     * @param string $address
     */
    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }



}