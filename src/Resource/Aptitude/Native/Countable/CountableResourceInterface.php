<?php

namespace SequoiaLabs\Reversia\Resource\Aptitude\Native\Countable;

interface CountableResourceInterface
{
    /**
     * Get the resource count
     * 
     * @param mixed ...$params
     * 
     * @return int
     */
    public function getCount(...$params);
}
