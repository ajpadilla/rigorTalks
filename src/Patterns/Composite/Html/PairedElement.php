<?php

namespace RigorTalks\Patterns\Composite\Html;

abstract class PairedElement extends BaseElement
{
    protected $children = [];

    public function add(Element $element)
    {
        if (is_string($element)){
            $element = new TextElement($element);
        }
        $this->children[] = $element;
    }

    public function getChild($index)
    {
        return $this->children[$index];
    }

    public function remove($element)
    {
        $index = array_search($element, $this->children, true);

        if (is_int($index)){
            array_splice($this->children, $index, 1);
        }
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function getComposite()
    {
        return $this;
    }

    public function render()
    {
        $html = '<'.$this->tagName().$this->attributes().'>';

        foreach ($this->children as $child){
            $html .= $child->render();
        }

        $html .= '</'.$this->tagName().'>';

        return $html;
    }
}