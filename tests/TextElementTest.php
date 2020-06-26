<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;
use RigorTalks\Patterns\Composite\Html\{Label, TextElement};

class TextElementTest extends TestCase
{
    /** @test */
    function it_renders_plain_text()
    {
        $textElement = new TextElement('Plain text');

        $this->assertSame('Plain text', $textElement->render());
    }

    /** @test */
    function it_renders_plain_text_inside_other_elements()
    {
        $label = new Label;

        $label->add(new TextElement('Label text'));

        $this->assertSame('<label>Label text</label>', $label->render());
    }
}