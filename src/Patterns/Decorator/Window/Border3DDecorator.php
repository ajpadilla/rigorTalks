<?php

namespace RigorTalks\Patterns\Decorator\Window;


class Border3DDecorator extends BorderDecorator
{
    public function draw()
    {
        parent::draw();
        printf("is drawing a border 3D from: %s \n", get_class($this));
    }
}