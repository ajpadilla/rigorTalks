<?php

namespace RigorTalks\Testing\NamedArguments;

class Invoice
{
    private $customer;
    private $customerDiscount;
    private $product;
    private $quantity;
    private $price;
    private $shippingCost;

    public function __construct(string $customer = "", float $customerDiscount = 0, string $product = "",  float $quantity = 1, float $price = 1, float $shippingCost = 0)
    {
        $this->customer =$customer;
        $this->customerDiscount = $customerDiscount;
        $this->product = $product;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->shippingCost = $shippingCost;
    }
}