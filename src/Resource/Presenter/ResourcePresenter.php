<?php

namespace SequoiaLabs\Reversia\Resource\Presenter;

class ResourcePresenter
{
    /**
     * @var string|int|null
     */
    private $identifier = null;

    /**
     * @var string|null
     */
    private $type = null;

    /**
     * @var string|null
     */
    private $label = null;

    /**
     * @var array|null
     */
    private $relationships = null;

    /**
     * @var string|null
     */
    private $context = null;

    /**
     * @var array|null
     */
    private $properties = null;

    /**
     * @var array
     */
    private $content;

    /**
     * @param array $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * @param string|int|null $identifier
     * 
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * @param string|null $type
     * 
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string|null $label
     * 
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @param array|null $relationships
     * 
     * @return self
     */
    public function setRelationships($relationships)
    {
        $this->relationships = $relationships;

        return $this;
    }

    /**
     * @param string $type
     * @param array $data
     * 
     * @return self
     */
    public function addRelationship($type, $data)
    {
        if ($this->relationships === null) {
            $this->relationships = [];
        }

        $this->relationships[$type] = $data;

        return $this;
    }

    /**
     * @param string $name
     * 
     * @return self
     */
    public function removeRelationship($name)
    {
        if ($this->relationships !== null) {
            unset($this->relationships[$name]);
        }

        return $this;
    }

    /**
     * @param string|null $context
     * 
     * @return self
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * @param string|null $url
     * 
     * @return self
     */
    public function setUrl($url)
    {
        if ($this->properties === null) {
            $this->properties = [];
        }

        $this->properties['url'] = $url;

        return $this;
    }

    /**
     * @param bool $active
     * 
     * @return self
     */
    public function setActive($active)
    {
        if ($this->properties === null) {
            $this->properties = [];
        }

        $this->properties['active'] = $active;

        return $this;
    }

    /**
     * @return array
     */
    public function build()
    {
        $data = [
            'content' => $this->content
        ];

        if ($this->identifier !== null) {
            $data['id'] = $this->identifier;
        }

        if ($this->type !== null) {
            $data['type'] = $this->type;
        }

        if ($this->label !== null) {
            $data['label'] = $this->label;
        }

        if ($this->properties !== null) {
            $data['properties'] = $this->properties;
        }

        if ($this->relationships !== null) {
            $data['relationships'] = $this->relationships;
        }

        if ($this->context !== null) {
            $data['context'] = $this->context;
        }

        return $data;
    }
}
