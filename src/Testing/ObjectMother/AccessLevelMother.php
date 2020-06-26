<?php

namespace RigorTalks\Testing\ObjectMother;

use Faker\Factory;

class AccessLevelMother
{
    public static function create(int $accessLevel)
    {
        return new AccessLevel($accessLevel);
    }

    public static function random()
    {
        return self::create(Factory::create()->numberBetween(1, 10));
    }
}