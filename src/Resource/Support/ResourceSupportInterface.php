<?php

namespace SequoiaLabs\Reversia\Resource\Support;

interface ResourceSupportInterface
{
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
     * Enumerate relationships
     * 
     * @return null|array
     */
    public function enumerateRelationships();

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
