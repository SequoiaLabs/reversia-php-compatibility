<?php

namespace SequoiaLabs\Reversia\Resource\Aptitude\Native\Listable;

interface ListableResourceInterface
{
    /**
     * Get the resource list
     * 
     * @param string|null $offset
     * @param string|null $limit
     * @param array|null $identifiers
     * @param mixed ...$params
     * 
     * @return \Generator
     */
    public function getList($offset = null, $limit = null, $identifiers = null, ...$params);

    /**
     * Get a resource
     * 
     * @param string $identifier
     * @param mixed ...$params
     * 
     * @return null|array
     */
    public function getOne($identifier, ...$params);

    /**
     * Insert a resource
     * 
     * @param string $identifier
     * @param array $data
     * @param mixed ...$params
     *
     * @return array
     */
    public function insert($identifier, $data, ...$params);
}
