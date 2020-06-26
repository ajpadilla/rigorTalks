<?php

namespace RigorTalks\Patterns\Decorator\Window;


class ScrollDecorator extends TextViewDecorator
{
    public function draw()
    {
        parent::draw();
        printf("is drawing a scroll from: %s", get_class($this));
    }
}