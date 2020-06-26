<?php

namespace RigorTalks\Patterns\Composite\Html;

class TextElement implements Element
{
    public $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getComposite()
    {
        return null;
    }

    public function render()
    {
        return $this->text;
    }
}