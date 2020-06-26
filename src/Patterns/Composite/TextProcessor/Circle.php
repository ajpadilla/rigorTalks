<?php

namespace RigorTalks\Patterns\Composite\TextProcessor;

class Circle extends Dot
{
    /** @var float $radius */
    private $radius;

    /**
     * Circle constructor.
     * @param float $x
     * @param float $y
     * @param float $radius
     */
    public function __construct(float $x, float $y, float $radius)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    /**
     * @return mixed|void
     */
    public function draw()
    {
        printf("Draw a circle at X: %f and Y: %f with radius R: %f for class: %s",$this->x,$this->y, $this->radius,get_class($this));
        if ($this->graphic)
            $this->getGraphic()->draw();
    }
}