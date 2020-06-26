<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;

use RigorTalks\Patterns\Decorator\Window\{TextViewGui, Border3DDecorator, PlainBorderDecorator, HorizontalScrollDecorator, VerticalScrollDecorator};

class DecoratorTest extends TestCase
{

    /** @test */
    public function it_can_add_view_into_border_3d()
    {
        $border3d = new Border3DDecorator(new TextViewGui());
        $border3d->draw();
    }

}