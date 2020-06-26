<?php

namespace RigorTalks\Patterns\Composite\TextProcessor;

class Rectangle extends Dot
{

    /** @var float $area */
    private $area;

    /**
     * Rectangle constructor.
     * @param float $x
     * @param float $y
     * @param float $area
     */
    public function __construct(float $x, float $y, float $area)
    {
        $this->x = $x;
        $this->y = $y;
        $this->area = $area;
    }

    /**
     * @return mixed|void
     */
    public function draw()
    {
        printf("Draw a rectangle at X: %f and Y: %f with area A: %f for class: %s",$this->x, $this->y, $this->area, get_class($this));
    }
}