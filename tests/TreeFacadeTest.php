<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;
use RigorTalks\Patterns\Flyweight\Forests\{Forest, TreeFactory};

class TreeFacadeTest extends TestCase
{
    /** @test */
    public function it_plant_trees()
    {
        $forest = new Forest();

        $forest->plantTree(10, 20,'Bonsai','Green', 'Flat');

        $this->assertCount(1, $forest->getTrees());
    }

    /** @test */
    public function it_draw_trees()
    {
        $forest = new Forest();

        $forest->plantTree(10, 10,'Bonsai','Green', 'Flat');

        $forest->draw('Canvas');

        $this->assertCount(1, $forest->getTrees());
    }

    /** @test */
    public function it_a_bonsai_green_flat_tree()
    {
        $treeType = TreeFactory::getTreeType('Bonsai','Green','Flat');

        $this->assertEquals($treeType->getName(), 'Bonsai');
        $this->assertEquals($treeType->getColor(), 'Green');
        $this->assertEquals($treeType->getTexture(), 'Flat');
    }


    /** @test */
    public function it_a_oak_tree_green_tree()
    {
        $treeType = TreeFactory::getTreeType('Oak-tree','Green','Corrugated');

        $this->assertEquals($treeType->getName(), 'Oak-tree');
        $this->assertEquals($treeType->getColor(), 'Green');
        $this->assertEquals($treeType->getTexture(), 'Corrugated');
    }

    /** @test */
    public function it_can_add_tree_types()
    {
        TreeFactory::getTreeType('Oak-tree','Green','Corrugated');

        TreeFactory::getTreeType('Bonsai','Green','Flat');

        $this->assertCount(2, TreeFactory::getTreeTypes());

        $treeType = TreeFactory::getTreeType('Bonsai','Green','Flat');

        print_r(TreeFactory::getTreeTypes());

        $this->assertCount(2, TreeFactory::getTreeTypes());
    }

}