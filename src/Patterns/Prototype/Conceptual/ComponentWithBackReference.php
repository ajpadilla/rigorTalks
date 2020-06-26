<?php

namespace RigorTalks\Patterns\Prototype\Conceptual;


class ComponentWithBackReference
{
    public $prototype;

    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;
    }
}