<?php

namespace RigorTalks\Patterns\Factory\Factories;

use RigorTalks\Patterns\Factory\Products\Book;
use RigorTalks\Patterns\Factory\Products\OReillyBook;
use RigorTalks\Patterns\Factory\Products\SamsBook;
use RigorTalks\Patterns\Factory\Products\VisualQuickstartBook;

class SamsFactoryMethod extends AbstractFactoryMethod
{
    /**
     * SamsFactoryMethod constructor.
     * @param string $context
     */
    public function __construct(string $context)
    {
        parent::__construct($context);
    }

    /**
     * @param string $param
     * @return Book
     */
    public function makeBook(string $param): Book
    {
        switch ($param) {
            case "us":
                $book = new SamsBook;
                break;
            case "other":
                $book = new OReillyBook;
                break;
            case "otherother":
                $book = new VisualQuickstartBook;
                break;
            default:
                $book = new SamsBook;
                break;
        }
        return $book;
    }
}