<?php

namespace RigorTalks\Patterns\Factory\Products;


class VisualQuickstartBook extends Book
{

    public function createTitle()
    {
        $this->title  = 'PHP for the World Wide Web';
    }

    public function createSubject()
    {
        $this->subject = "PHP Visual Quickstart Book";
    }

    public function createAuthor()
    {
        $this->author = 'Larry Ullman';
    }
}