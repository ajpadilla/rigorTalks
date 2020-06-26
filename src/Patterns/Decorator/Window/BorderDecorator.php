<?php

namespace RigorTalks\Patterns\Decorator\Window;


abstract class BorderDecorator extends TextViewDecorator
{
    public function draw()
    {
        parent::draw();
        printf("is drawing a border from: %s \n", get_class($this));
    }
}