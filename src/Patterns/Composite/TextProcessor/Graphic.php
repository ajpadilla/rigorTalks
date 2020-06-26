<?php

namespace RigorTalks\Patterns\Composite\TextProcessor;

interface Graphic
{
    /**
     * @return mixed
     */
    public function draw();

    /**
     * @param float $x
     * @param float $y
     * @return mixed
     */
    public function move(float $x, float $y);

    /**
     * @param Graphic $graphic
     * @return mixed
     */
    public function add(Graphic $graphic);

    /**
     * @param Graphic $graphic
     * @return mixed
     */
    public function remove(Graphic $graphic);
}