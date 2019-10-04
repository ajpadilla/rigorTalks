<?php

namespace RigorTalks\tests;

use RigorTalks\Temperature;
use RigorTalks\TemperatureTestClass;
use RigorTalks\ColdThreshouldSource;
use PHPUnit\Framework\TestCase;

/**
 * Class TemperatureTest
 * @package RigorTalks\tests
 */
class TemperatureTest extends TestCase implements ColdThreshouldSource
{
    /**
     * @test
     * @throws \RigorTalks\TemperatureNegativeException
     */
    /*function tryToCreateANonValidTemperature()
    {
        new Temperature(2);
    }*/

    /**
     * @test
     */
    public function tryToCreateAValidTemperature()
    {
        $measure = 18;
        $this->assertSame($measure, (Temperature::take($measure))->measure());
    }

    /**
     * @test
     */
    public function tryToCheckIfAColdTemperatureIsSuperHot()
    {
        //$this->markTestSkipped();
        $this->assertFalse(TemperatureTestClass::take(10)->isSuperHot());
    }

    /**
     * @test
     */
    public function tryToCheckIfASuperHotTemperatureIsSuperHot()
    {
        //$this->markTestSkipped();
        $this->assertTrue(TemperatureTestClass::take(100)->isSuperHot());
    }

    /**
     * @test
     */
    public function tryToCheckIfASuperCouldTemperatureIsSuperCold()
    {
        //$this->markTestSkipped();

        $this->assertTrue( Temperature::take(10)->isSuperCold($this));
    }

    /**
     * @test
     */
    public function tryToCheckIfASuperCouldTemperatureIsSuperColdWithAnomClass()
    {
        //$this->markTestSkipped();

        $this->assertTrue( Temperature::take(10)->isSuperCold(
            new class implements ColdThreshouldSource {
                public function getThresould(): int
                {
                    return 50;
                }
            }
        ));
    }

    /**
     * @test
     */
    public function tryToCheckIfATemperatureFromStation()
    {
        //$this->markTestSkipped();

        $this->assertSame(50, Temperature::fromStation($this)->measure());
    }

    public function sensor()
    {
        return $this;
    }

    public function temperature()
    {
        return $this;
    }

    public function measure()
    {
        return 50;
    }

    public function getThresould(): int
    {
        return 50;
    }

    /**
     * @test
     */
    public function tryToSumTwoMeasure()
    {
        $a = Temperature::take(50);
        $b = Temperature::take(50);

        $c = $a->add($b);

        $this->assertSame(
          100, $c->measure()
        );
        $this->assertNotSame($c, $a);
        $this->assertNotSame($c, $b);
    }
}