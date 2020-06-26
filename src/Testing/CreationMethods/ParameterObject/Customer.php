<?php

namespace RigorTalks\Testing\CreationMethods\ParameterObject;

class Customer
{
    /**
     * @var string
     */
    private $name;

    /**
     * Customer constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}