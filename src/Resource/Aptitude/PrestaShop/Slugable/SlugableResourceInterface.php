<?php

namespace SequoiaLabs\Reversia\Resource\Aptitude\PrestaShop\Slugable;

interface SlugableResourceInterface
{
    /**
     * Get the resource slugable fields
     * 
     * @return string[]
     */
    public function getSlugableFields();
}
