<?php

namespace RigorTalks\Patterns\Composite\TextProcessor;


abstract class Dot implements Graphic
{

    /** @var float $x */
    protected $x;

    /** @var float $y */
    protected $y;

    /** @var Graphic $graphic */
    protected $graphic;

    /**
     * @param float $x
     * @param float $y
     * @return mixed|void
     */
    public function move(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
        printf("the figure was placed in the position X: %f and Y: %f", $this->x, $this->y);
    }

    public function add(Graphic $graphic)
    {
        $this->graphic = $graphic;
    }

    /**
     * @param Graphic $graphic
     * @return int|mixed
     */
    public function remove(Graphic $graphic)
    {
       if ($graphic !== $this->graphic){
           return  printf("you cannot delete the figure, they are different instances");
       }
       unset($this->graphic);
    }

    /**
     * @return Graphic
     */
    public function getGraphic()
    {
        return $this->graphic;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

}
