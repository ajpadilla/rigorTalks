<?php

namespace RigorTalks\Patterns\Decorator\Window;


class PlainBorderDecorator
{
    public function draw()
    {
        parent::draw();
        printf("is drawing a plaid border from: %s", get_class($this));
    }
}