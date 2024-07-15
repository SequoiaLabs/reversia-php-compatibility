<?php

namespace PrestaShop\Module\Reversia\Resource;

use SequoiaLabs\Reversia\Exception\NotImplementedErrorException;

trait ResourceSupportTrait
{
    /**
     * @return string
     */
    public static function getType()
    {
        throw new NotImplementedErrorException();
    }

    /**
     * @return string
     */
    public static function getGroup()
    {
        throw new NotImplementedErrorException();
    }

    public static function getResource()
    {
        throw new NotImplementedErrorException();
    }

    public function getInsertionDiff($previousData, $insertedData)
    {
        $changedFields = [];

        if ($previousData === null) {
            return $insertedData;
        }

        foreach ($previousData as $key => $value) {
            if (isset($insertedData[$key]) && $insertedData[$key] !== $value) {
                $changedFields[$key] = $insertedData[$key];
            }
        }

        if (empty($changedFields)) {
            return null;
        }

        return $changedFields;
    }
}
