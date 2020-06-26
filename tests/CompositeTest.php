<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;

use RigorTalks\Patterns\Composite\Html\{Fieldset, Form, Input, Label, Legend, Textarea, TextElement};

class CompositeTest extends TestCase
{

    /** @test */
    function it_generates_nested_html()
    {
        $form = new Form();

        $contentFieldset = new Fieldset();

        $legend = new Legend('Contenido');
        $contentFieldset->add($legend);

        $input = new Input('title');
        $contentFieldset->add($input);

        $textArea = new Textarea('content');
        $contentFieldset->add($textArea);

        $form->add($contentFieldset);

        $expected = <<<HTML
<form>
    <fieldset>
        <legend>Contenido</legend>
        <input name="title">
        <textarea name="content"></textarea>
    </fieldset>
</form>
HTML;

        $this->assertSame($this->removeIndentation($expected), $form->render());
    }


    private function removeIndentation($expected)
    {
        return str_replace([PHP_EOL, '    '], '', $expected);
    }

}