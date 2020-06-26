<?php

namespace RigorTalks\Patterns\Composite\Html;

class Label extends PairedElement
{
    public function tagName()
    {
        return 'label';
    }
}