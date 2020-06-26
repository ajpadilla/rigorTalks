<?php

namespace RigorTalks\Patterns\Composite\Html;


interface Element
{
    public function getComposite();

    public function render();
}