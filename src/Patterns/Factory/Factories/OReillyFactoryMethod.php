<?php

namespace RigorTalks\Patterns\Factory\Factories;

use RigorTalks\Patterns\Factory\Products\Book;
use RigorTalks\Patterns\Factory\Products\OReillyBook;
use RigorTalks\Patterns\Factory\Products\SamsBook;
use RigorTalks\Patterns\Factory\Products\VisualQuickstartBook;

class OReillyFactoryMethod extends AbstractFactoryMethod
{

    /**
     * OReillyFactoryMethod constructor.
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
                $book = new OReillyBook();
                break;
            case "other":
                $book = new SamsBook();
                break;
            default:
                $book = new OReillyBook();
                break;
        }
        return $book;
    }
}