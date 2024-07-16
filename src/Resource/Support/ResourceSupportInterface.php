<?php

namespace SequoiaLabs\Reversia\Resource\Support;

interface ResourceSupportInterface
{
    /**
     * Is resource supported
     * 
     * @return bool
     */
    public function isSupported();

    /**
     * Get the resource label
     * 
     * @param string $locale
     * 
     * @return string
     */
    public static function getLabel($locale);

    /**
     * Get the resource type
     * 
     * @return string
     */
    public static function getType();

    /**
     * Get the resource group
     * 
     * @return string
     */
    public static function getGroup();

    /**
     * Get the resource
     * 
     * @return mixed
     */
    public function getResource(...$args);

    /**
     * Get diff between two resources
     * 
     * @param array $insertedData
     * @param array $previousData
     *
     * @return true|array
     */
    public function getInsertionDiff($insertedData, $previousData);
}
