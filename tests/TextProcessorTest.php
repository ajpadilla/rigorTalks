<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;

use RigorTalks\Patterns\Composite\TextProcessor\{Circle, CompoundGraphic, Rectangle};

class TextProcessorTest extends TestCase
{
    /** @test */
    public function it_can_add_graphic_into_circle() {
        $circle = new Circle(10, 10, 5);

        $rectangle = new Rectangle(5,5,4);

        $circle->add($rectangle);

        $this->assertSame($rectangle, $circle->getGraphic());
    }

    /** @test */
    public function it_can_remove_graphic_to_circle(){
        $circle = new Circle(10, 10, 5);

        $rectangle = new Rectangle(5,5,4);

        $circle->add($rectangle);

        $this->assertNotEmpty($circle->getGraphic());

        $circle->remove($rectangle);

        $this->assertEmpty($circle->getGraphic());
    }

    /** @test */
    public function it_can_draw_graphic_to_circle()
    {
        $circle = new Circle(10, 10, 5);

        $circle->add(new Rectangle(5,5,4));

        $this->assertNotEmpty($circle->draw());
    }

    /** @test */
    public function it_can_add_graphic_into_compound_graphic()
    {
        $circle = new Circle(10, 10, 5);

        $rectangle = new Rectangle(5,5,4);

        $circle->add($rectangle);

        $compoundGraphic = new CompoundGraphic();

        $compoundGraphic->add($circle);

        $this->assertSame($circle, $compoundGraphic->getChild(0));
    }

    /** @test */
    public function it_can_draw_graphic_into_compound_graphic()
    {
        $circle = new Circle(10, 10, 5);

        $rectangle = new Rectangle(5,5,4);

        $compoundGraphic = new CompoundGraphic();

        $compoundGraphic->add($circle);

        $compoundGraphic->add($rectangle);

        $compoundGraphic->draw();
    }

    /** @test */
    public function it_can_move_graphic_into_compound_graphic()
    {
        $circle = new Circle(10, 10, 5);

        $rectangle = new Rectangle(5,5,4);

        $compoundGraphic = new CompoundGraphic();

        $compoundGraphic->add($circle);

        $compoundGraphic->add($rectangle);

        $compoundGraphic->move(10, 10);

        $this->assertEquals($compoundGraphic->getChild(0)->getX(), 10);
    }


    /** @test */
    public function it_can_remove_graphic_into_compound_graphic()
    {
        $circle = new Circle(10, 10, 5);

        $rectangle = new Rectangle(5,5,4);

        $compoundGraphic = new CompoundGraphic();

        $compoundGraphic->add($circle);

        $compoundGraphic->add($rectangle);

        $this->assertCount(2, $compoundGraphic->getChildren());

        $compoundGraphic->remove($rectangle);

        $this->assertCount(1, $compoundGraphic->getChildren());
    }

}