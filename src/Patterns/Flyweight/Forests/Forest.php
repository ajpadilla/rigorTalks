<?php

namespace RigorTalks\Patterns\Flyweight\Forests;

class Forest
{
    /** @var array $trees */
    private $trees = [];

    /**
     * @param float $x
     * @param float $y
     * @param string $name
     * @param string $color
     * @param string $texture
     */
    public function plantTree(float $x, float $y, string $name, string $color, string $texture)
    {
        $treeType = TreeFactory::getTreeType($name,$color,$texture);
        $tree = new Tree($x, $y, $treeType);
        $this->trees[] = $tree;
    }

    /**
     * @param string $canvas
     */
    public function draw(string $canvas)
    {
        foreach ($this->trees as $tree){
            $tree->draw($canvas);
        }
    }

    /**
     * @return array
     */
    public function getTrees(): array
    {
        return $this->trees;
    }

}