<?php

namespace RigorTalks\Patterns\Decorator\Window;

 abstract class TextViewDecorator implements ComponentGui
{
    /** @var ComponentGui $componentGui */
    private $componentGui;

    /**
     * TextViewDecorator constructor.
     * @param ComponentGui $componentGui
     */
    public function __construct(ComponentGui $componentGui)
    {
        $this->componentGui = $componentGui;
    }

    public function draw()
    {
        printf("is drawing a text window from: %s \n", get_class($this));
        $this->componentGui->draw();
    }

     public function getTypeGui()
     {
         $this->componentGui->getTypeGui();
     }
 }