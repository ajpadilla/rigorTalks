<?php

namespace RigorTalks\Patterns\Composite\Html;

class Textarea extends PairedElement
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function tagName()
    {
        return 'textarea';
    }

    public function attributes()
    {
        return sprintf(' name="%s"', $this->name);
    }
}