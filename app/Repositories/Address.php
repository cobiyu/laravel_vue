<?php
/**
 * Created by PhpStorm.
 * User: cobiyu
 * Date: 2018. 8. 19.
 * Time: PM 10:06
 */

namespace App\Repositories;


class Address
{
    /**
     * street
     * @var string
     */
    private $street;
    /**
     * city
     * @var string
     */
    private $city;

    /**
     * seq
     * @var int
     */
    private $seq;

    /**
     * Address constructor.
     * @param string $street
     * @param string $city
     * @param int $seq
     */
    public function __construct(string $street, string $city, int $seq)
    {
        $this->street = $street;
        $this->city = $city;
        $this->seq = $seq;
    }


}