<?php

namespace RigorTalks\Patterns\Flyweight\Forests;

use phpDocumentor\Reflection\Types\Self_;

class TreeFactory
{
    /** @var array  */
    private static $treeTypes = [];

    /**
     * @param string $name
     * @param string $color
     * @param string $texture
     * @return array|null|TreeType
     */
    public static function getTreeType(string $name, string $color, string $texture)
    {
        $type = null;

        $type = array_filter(self::$treeTypes, function (TreeType $treeType) use ($name, $color, $texture){
            return ($treeType->getName() == $name && $treeType->getColor() == $color && $treeType->getTexture() == $texture);
        });

        if ($type == null){
            $type = new TreeType($name, $color, $texture);
            self::$treeTypes[] = $type;
        }

        return $type;
    }

    /**
     * @return array
     */
    public static function getTreeTypes(): array
    {
        return self::$treeTypes;
    }
}