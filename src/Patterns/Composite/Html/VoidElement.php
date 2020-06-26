<?php

namespace RigorTalks\Patterns\Composite\Html;

abstract class VoidElement extends BaseElement
{
    public function getComposite()
    {
        $composite = new Div;

        $composite->add($this);

        return $composite;
    }

    public function render()
    {
        return '<'.$this->tagName().$this->attributes().'>';
    }
}