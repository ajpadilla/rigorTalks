<?php

namespace RigorTalks\Testing\ObjectMother;

use Faker\Factory;

class UserNameMother
{
    public static function create(string $name)
    {
        return new UserName($name);
    }

    public static function random()
    {
        return self::create(Factory::create()->name);
    }
}