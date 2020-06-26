<?php

namespace RigorTalks\Testing\CreationMethods\Builders;

use RigorTalks\Testing\CreationMethods\ParameterObject\Product;

class ProductBuilder
{
    /**
     * @var string
     */
    private $name;

    /** @var float  */
    private $price;

    /**
     * ProductBuilder constructor.
     */
    public function __construct()
    {
        $this->name = 'some-name';
        $this->price = 0.0;
    }

    /**
     * @param float $price
     * @return $this
     */
    public function withPrice(float $price)
    {
        $this->price = $price;
        return $this;
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
     * @return Product
     */
    public function build()
    {
        return new Product($this->name,$this->price);
    }
}