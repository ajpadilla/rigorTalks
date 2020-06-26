<?php

namespace RigorTalks\Testing\CreationMethods\Builders;

use RigorTalks\Testing\CreationMethods\ParameterObject\Customer;

class CustomerBuilder
{
    /**
     * @var string
     */
    private $name;

    /**
     * CustomerBuilder constructor.
     */
    public function __construct()
    {
        $this->name = 'some-name';
    }


    /**
     * @param string $name
     * @return $this
     */
    public function withName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Customer
     */
    public function build()
    {
        return new Customer($this->name);
    }
}