<?php
/**
 * Created by PhpStorm.
 * User: gm1702848
 * Date: 2018-09-09
 * Time: 오후 6:46
 */

namespace App\Dto\GabiaUser;


use App\Dto\common\GabiaDto;

class Test implements GabiaDto
{
    /**
     * @var null|string
     */
    private $cobi;

    /**
     * Test constructor.
     * @param null|string $cobi
     */
    public function __construct(?string $cobi)
    {
        $this->cobi = $cobi;
    }

    /**
     * @return null|string
     */
    public function getCobi(): ?string
    {
        return $this->cobi;
    }

    /**
     * @param null|string $cobi
     */
    public function setCobi(?string $cobi): void
    {
        $this->cobi = $cobi;
    }


}