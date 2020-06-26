<?php

namespace RigorTalks\Testing\CreationMethods\ProductCategory;

use RigorTalks\Testing\CreationMethods\ObjectMothers\CategoryMother;
use RigorTalks\Testing\CreationMethods\ObjectMothers\TaxMother;

class Product
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $category;

    /**
     * @var float
     */
    private $tax;

    /**
     * Product constructor.
     * @param string $name
     * @param string $category
     * @param float $tax
     */
    public function __construct(string $name,string $category)
    {
        $this->name = $name;
        $this->category = CategoryMother::create($category);
        $this->tax = TaxMother::random();
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function getCategoryName()
    {
        return $this->category ? $this->category->getName() : null;
    }
}