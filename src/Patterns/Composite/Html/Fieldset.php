<?php

namespace RigorTalks\Patterns\Composite\Html;

class Fieldset extends PairedElement
{
    public function tagName()
    {
        return 'fieldset';
    }
}