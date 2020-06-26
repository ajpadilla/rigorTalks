<?php

namespace RigorTalks\Testing\Students;

use Faker\Factory;


class StudentMother
{

    public static function create(string $id, string $name, int $totalPendingVideos): Student
    {
        return new Student($id, $name, $totalPendingVideos);
    }

    public static function withId(string $id): Student
    {
        return self::create($id, Factory::create()->name, Factory::create()->numberBetween(1,100));
    }

    public static function withValues(string $id, string $name, int $totalPendingVideos): Student
    {
        return self::create(
            $id,
            $name,
            $totalPendingVideos
        );
    }

    public static function random(): Student
    {
        return self::create(
            Factory::create()->uuid,
            Factory::create()->name,
            Factory::create()->numberBetween(1,100)
        );
    }

}