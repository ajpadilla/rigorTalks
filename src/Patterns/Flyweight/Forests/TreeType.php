<?php

namespace RigorTalks\Patterns\Flyweight\Forests;

class TreeType
{
    /** @var string $name */
    private $name;

    /** @var string  $color*/
    private $color;

    /** @var string  $texture*/
    private $texture;

    /**
     * TreeType constructor.
     * @param string $name
     * @param string $color
     * @param string $texture
     */
    public function __construct(string $name, string $color, string $texture)
    {
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
    }

    /**
     * @param string $canvas
     * @param float $x
     * @param float $y
     */
    public function  draw(string $canvas, float $x, float $y)
    {
        print_r("Drawing canvas {$canvas} from {TreeType::class} class in position X: {$x} AND Y: {$y}");
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
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getTexture(): string
    {
        return $this->texture;
    }

}