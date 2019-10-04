<?php

namespace RigorTalks\Patterns\Factory\Products;


class SamsBook extends Book
{

    public function createTitle()
    {
        $this->title  = 'Advanced PHP Programming';
    }

    public function createSubject()
    {
        $this->subject = "PHP Sams Book";
    }

    public function createAuthor()
    {
        $this->author = 'George Schlossnagle';
    }
}