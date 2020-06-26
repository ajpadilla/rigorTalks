<?php

namespace RigorTalks\Testing\ObjectMother;

use Faker\Factory;

class UserIdMother
{
    public static function create(string $id)
    {
        return new UserId($id);
    }

    public static function random()
    {
        return self::create(Factory::create()->uuid);
    }
}