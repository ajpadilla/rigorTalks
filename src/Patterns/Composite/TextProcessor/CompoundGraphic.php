<?php

namespace RigorTalks\Patterns\Composite\TextProcessor;


class CompoundGraphic implements Graphic
{
    /** @var array $children */
    protected $children = [];

    /**
     * @return mixed|void
     */
    public function draw()
    {
        foreach ($this->children as $child){
            $child->draw();
        }
    }

    /**
     * @param float $x
     * @param float $y
     * @return mixed|void
     */
    public function move(float $x, float $y)
    {
        foreach ($this->children as $child){
            $child->move($x, $y);
        }
    }

    /**
     * @param Graphic $graphic
     * @return mixed|void
     */
    public function add(Graphic $graphic)
    {
        $this->children[] = $graphic;
    }

    /**
     * @param Graphic $graphic
     * @return mixed|void
     */
    public function remove(Graphic $graphic)
    {
        $index = array_search($graphic, $this->children, true);

        if (is_int($index)){
            array_splice($this->children, $index, 1);
        }
    }

    /**
     * @param $index
     * @return mixed
     */
    public function getChild($index)
    {
        return $this->children[$index];
    }

    /**
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }
}