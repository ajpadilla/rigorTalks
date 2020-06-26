<?php

namespace RigorTalks\Patterns\Prototype\Game;


abstract class Personage
{
    /** @var string */
    private $name;

    /** @var string */
    private $image;

    /** @var float */
    private $height;

    /** @var float */
    private $weight;

    /** @var float */
    private $width;

    /** @var float */
    private $intelligence_level;

    /** @var string */
    private $skills;

    /**
     * Personage constructor.
     * @param string $name
     * @param string $image
     * @param float $height
     * @param float $weight
     * @param float $width
     * @param float $intelligence_level
     * @param string $skills
     */
    public function __construct(string $name, string $image, float $height, float $weight, float $width, float $intelligence_level, string $skills)
    {
        $this->name = $name;
        $this->image = $image;
        $this->height = $height;
        $this->weight = $weight;
        $this->width = $width;
        $this->intelligence_level = $intelligence_level;
        $this->skills = $skills;
    }

    /**
     * @return mixed
     */
    abstract function __clone();

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image)
    {
        $this->image = $image;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height)
    {
        $this->height = $height;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width)
    {
        $this->width = $width;
    }

    /**
     * @param float $intelligence_level
     */
    public function setIntelligenceLevel(float $intelligence_level)
    {
        $this->intelligence_level = $intelligence_level;
    }

    /**
     * @param string $skills
     */
    public function setSkills(string $skills)
    {
        $this->skills = $skills;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getIntelligenceLevel(): float
    {
        return $this->intelligence_level;
    }

    /**
     * @return string
     */
    public function getSkills(): string
    {
        return $this->skills;
    }
}