<?php

namespace RigorTalks\Testing\CreationMethods\ProductCategory;

class Category
{
    /**
     * @var string
     */
    private $name;

    /**
     * Category constructor.
     * @param string $name
     */
    public function __construct(string $name)
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