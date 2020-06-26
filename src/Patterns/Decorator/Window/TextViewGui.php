<?php

namespace RigorTalks\Patterns\Decorator\Window;


class TextViewGui implements ComponentGui
{

    public function draw()
    {
        return  printf("is drawing a text view window \n");
    }

    public function getTypeGui()
    {
        return printf("Gui:", get_class($this));
    }
}