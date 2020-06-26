<?php

namespace RigorTalks\Patterns\Prototype\RealWorld;

class Author
{
    private $name;

    /**
     * @var Page[]
     */
    private $pages = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Page $page)
    {
        $this->pages[] = $page;
    }
}