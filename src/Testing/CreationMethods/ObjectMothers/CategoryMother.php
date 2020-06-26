<?php

namespace RigorTalks\Testing\CreationMethods\ObjectMothers;

use Faker\Factory;
use RigorTalks\Testing\CreationMethods\ProductCategory\Category;

class CategoryMother
{

    public static function create(string $name)
    {
        return new Category($name);
    }

    public function random()
    {
        return self::create(Factory::create()->name);
    }
}