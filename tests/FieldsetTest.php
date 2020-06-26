<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;

use RigorTalks\Patterns\Composite\Html\{Fieldset, Input, Legend};

class FieldsetTest extends TestCase
{
    /** @test */
    function it_can_add_and_get_elements()
    {
        $fieldset = new Fieldset();

        $legend = new Legend('Text');
        $fieldset->add($legend);

        $this->assertSame($legend, $fieldset->getChild(0));
    }

    /** @test */
    function it_can_render_elements_as_plain_html()
    {
        $fieldset = new Fieldset();

        $this->assertSame('<fieldset></fieldset>', $fieldset->render());
    }

    /** @test */
    function it_can_remove_elements()
    {
        $fieldset = new Fieldset();

        $input = new Input('name');
        $fieldset->add($input);

        $this->assertCount(1, $fieldset->getChildren());

        $fieldset->remove($input);

        $this->assertCount(0, $fieldset->getChildren());

    }
}