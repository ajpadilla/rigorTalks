<?php

namespace RigorTalks\Testing\CreationMethods\ObjectMothers;

use RigorTalks\Testing\CreationMethods\ProductCategory\Tax;

use Faker\Factory;

class TaxMother
{

    public static function create(float $amount, string $country)
    {
        return new Tax($amount, $country);
    }

    public static function random()
    {
        return self::create(Factory::create()->numberBetween(1,100), Factory::create()->country);
    }

}