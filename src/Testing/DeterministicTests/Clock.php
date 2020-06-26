<?php

namespace RigorTalks\Testing\DeterministicTests;

use DateTime;

interface Clock
{
    public function now(): DateTime;

}