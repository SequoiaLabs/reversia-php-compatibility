<?php

namespace SequoiaLabs\Reversia\Resource\Aptitude\Native\Countable;

use SequoiaLabs\Reversia\Exception\NotImplementedErrorException;

trait CountableResourceTrait
{
    public function getCount()
    {
        throw new NotImplementedErrorException();
    }
}
