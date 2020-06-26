<?php

namespace RigorTalks\Testing\CreationMethods\ParameterObject;

class Invoice
{
    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var float
     */
    private $amount;

    /**
     * Invoice constructor.
     * @param Customer $customer
     * @param Product $product
     * @param float $amount
     */
    public function __construct(Customer $customer, Product $product, float $amount)
    {
        $this->customer = $customer;
        $this->product = $product;
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }
}