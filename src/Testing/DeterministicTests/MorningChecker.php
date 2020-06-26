<?php

namespace RigorTalks\Testing\DeterministicTests;

class MorningChecker
{
    const MORNING_START_AT = 8;
    const MORNING_END_AT = 12;

    private $clock;

    public function __construct(Clock $clock)
    {
        $this->clock = $clock;
    }
    public function check(): bool
    {
        $currentHour = ($this->clock->now())->format('H');

        print_r("current hour {$currentHour}");

        return $currentHour >= self::MORNING_START_AT
            && $currentHour <= self::MORNING_END_AT;
    }
}