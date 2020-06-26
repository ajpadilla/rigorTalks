<?php

namespace RigorTalks\Testing\CreationMethods\ProductCategory;

class Tax
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $country;

    /**
     * Tax constructor.
     * @param float $amount
     * @param string $country
     */
    public function __construct(float $amount, string $country)
    {
        $this->amount = $amount;
        $this->country = $country;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
}