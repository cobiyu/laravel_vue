<?php

namespace App\Dto\common;


abstract class GabiaArrayObject extends \ArrayObject
{

    /**
     * GabiaArrayObject constructor.
     */
    public function __construct(array $arr=null)
    {
        parent::__construct($arr);
    }
}