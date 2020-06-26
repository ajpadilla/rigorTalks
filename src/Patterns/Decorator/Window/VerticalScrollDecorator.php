<?php

namespace RigorTalks\Patterns\Decorator\Window;

class VerticalScrollDecorator extends ScrollDecorator
{
    public function draw()
    {
        parent::draw();
        printf("is drawing a vertical scroll from: %s", get_class($this));
    }
}