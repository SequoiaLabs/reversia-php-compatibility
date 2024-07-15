<?php

namespace SequoiaLabs\Reversia\Resource\Aptitude\PrestaShop\Slugable;

trait LinkableResourceTrait
{
    /**
     * Get the resource slugable fields
     * 
     * @return false|string[]
     */
    public function getSlugableFields()
    {
        return false;
    }

    /**
     * Generates a friendly URL based on properties
     * 
     * @param array $fields
     * @param callable $slugFunction
     * 
     * @return false|string
     */
    public function generateFriendlyUrl(&$fields, $slugFunction)
    {
        $slugableFields = $this->getSlugableFields();

        if ($slugableFields === false || empty($slugableFields)) {
            return false;
        }

        $intersection = array_intersect(array_values($slugableFields), array_keys($fields));

        if (empty($intersection)) {
            return false;
        }

        return $slugFunction($fields[current($intersection)]);
    }
}
