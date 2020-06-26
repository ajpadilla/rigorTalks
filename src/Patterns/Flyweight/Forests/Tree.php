<?php

namespace RigorTalks\Patterns\Flyweight\Forests;

class Tree
{
    /** @var string $x */
    private $x;

    /** @var string $y */
    private $y;

    /** @var TreeType $treeType */
    private $treeType;

    /**
     * Tree constructor.
     * @param string $x
     * @param string $y
     * @param TreeType $treeType
     */
    public function __construct(string $x, string $y, TreeType $treeType)
    {
        $this->x = $x;
        $this->y = $y;
        $this->treeType = $treeType;
    }

    /**
     * @param string $canvas
     */
    public function draw(string $canvas)
    {
        $this->treeType->draw($canvas, $this->x, $this->y);
    }

    /**
     * @return string
     */
    public function getX(): string
    {
        return $this->x;
    }

    /**
     * @return string
     */
    public function getY(): string
    {
        return $this->y;
    }

    /**
     * @return TreeType
     */
    public function getTreeType(): TreeType
    {
        return $this->treeType;
    }

}