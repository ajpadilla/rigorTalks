<?php

namespace RigorTalks\Patterns\Decorator\Window;


class HorizontalScrollDecorator extends ScrollDecorator
{
    public function draw()
    {
        parent::draw();
        printf("is drawing a horizontal scroll from: %s", get_class($this));
    }
}