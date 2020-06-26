<?php

namespace RigorTalks\Patterns\Composite\Html;

abstract class BaseElement implements Element
{
    abstract public function tagName();

    public function attributes()
    {
        return '';
    }
}