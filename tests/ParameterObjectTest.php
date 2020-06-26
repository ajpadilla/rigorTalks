<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;
use RigorTalks\Testing\CreationMethods\Builders\CustomerBuilder;
use RigorTalks\Testing\CreationMethods\Builders\ProductBuilder;
use RigorTalks\Testing\CreationMethods\ParameterObject\Invoice;
use RigorTalks\Testing\CreationMethods\ParameterObject\Product;

class ParameterObjectTest extends TestCase
{
    public function test_create_a_new_invoice()
    {
        $customer = (new CustomerBuilder())->withName('Paco')->build();
        $product = (new ProductBuilder())->withName('Umbrella')->withPrice(4)->build();

        $invoice = new Invoice($customer, $product, 10);

        $this->assertNotNull($invoice);
    }
}