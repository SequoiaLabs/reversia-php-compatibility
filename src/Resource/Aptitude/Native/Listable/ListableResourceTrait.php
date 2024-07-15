<?php

namespace SequoiaLabs\Reversia\Resource\Aptitude\Native\Listable;

use SequoiaLabs\Reversia\Exception\NotImplementedErrorException;

trait ListableResourceTrait
{
    public function getList()
    {
        throw new NotImplementedErrorException();
    }

    public function getOne()
    {
        throw new NotImplementedErrorException();
    }

    public function insert()
    {
        throw new NotImplementedErrorException();
    }
}
