<?php

namespace RigorTalks\Patterns\Prototype\Game;

class Prince extends Personage
{
    /**
     * Prince constructor.
     * @param string $name
     * @param string $image
     * @param float $height
     * @param float $weight
     * @param float $width
     * @param float $intelligence_level
     * @param float $skills
     */
    public function __construct(string $name, string $image, float $height, float $weight, float $width, float $intelligence_level, string $skills)
    {
        parent::__construct($name, $image, $height, $weight, $width, $intelligence_level, $skills);
    }



    /**
     * @return mixed
     */
    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}