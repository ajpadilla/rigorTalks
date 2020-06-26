<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;

use DateTime;
use Mockery;
use Carbon\Carbon;
use RigorTalks\Testing\DeterministicTests\{Clock, MorningChecker};

class MorningCheckerTest extends TestCase
{
    public function test_it_should_return_true_when_its_morning()
    {
        $clock =  Mockery::mock(Clock::class);

        $clock->shouldReceive('now')
            ->once()
            //->andReturn(new DateTime('2019-05-20 09:00:00'));
            ->andReturn(Carbon::create('2019-05-20 09:00:00'));

        $checker = new MorningChecker($clock);

        $this->assertTrue($checker->check());

        Mockery::close();
    }
}