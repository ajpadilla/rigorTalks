<?php

declare(strict_types = 1);

namespace RigorTalks;

use phpDocumentor\Reflection\Types\Self_;

class TemperatureNegativeException extends \Exception
{
    public static function fromMeasure(int $measure): self
    {
        return new static(sprintf('Measured %d must be positive', $measure));
    }
}

/**
 * Class Temperature
 * @package RigorTalk
 */
class Temperature
{
    /**
     * @var int
     */
    private $measure;

    /**
     * @param int $measure
     * @return Temperature
     * @throws TemperatureNegativeException
     */
    public static function take(int $measure): self
    {
        //Named Constructors
        return new static($measure);
    }


    /**
     * Temperature constructor.
     * @param int $measure
     * @throws TemperatureNegativeException
     */
    private function __construct(int $measure)
    {
        $this->setMeasure($measure);
    }

    /**
     * @param int $measure
     * @throws TemperatureNegativeException
     */
    private function setMeasure(int $measure)
    {
        // Self-Encapsulation
        $this->checkMeasureIsPositive($measure);
        $this->measure = $measure;
    }

    /**
     * @param int $measure
     * @throws TemperatureNegativeException
     */
    public function checkMeasureIsPositive(int $measure)
    {
        //Guard Clauses
        if ($measure < 0) {
            throw  TemperatureNegativeException::fromMeasure($measure);
        }
    }

    /**
     * @return int
     */
    public function measure(): int
    {
        return $this->measure;
    }

    /**
     * @return bool
     */
    public function isSuperHot(): bool
    {
        $threshold = $this->getThreshold();
        return $this->measure() > $threshold;
    }


    protected function getThreshold()
    {
        // returns implementation detail for connection to the database  (Self-Shunt)
        return null;
    }

    // Self-Shunt pattern
    public function isSuperCold(ColdThreshouldSource $coldThreshouldSource)
    {
        $threshold = $coldThreshouldSource->getThresould();

        return $this->measure() < $threshold;
    }

    public static function fromStation($station): self
    {
        // Self-Shunt III
        return new static(
            $station->sensor()->temperature()->measure()
        );
    }

    public function add(self $anotherTemperature)
    {
        //$this->setMeasure($this->measure + $anotherTemperature->measure());
        //Immutability
        return new self($this->measure + $anotherTemperature->measure());
    }
}