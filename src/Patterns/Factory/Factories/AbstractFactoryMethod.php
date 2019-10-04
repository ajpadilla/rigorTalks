<?php
namespace RigorTalks\Patterns\Factory\Factories;

use RigorTalks\Patterns\Factory\Products\Book;

abstract class AbstractFactoryMethod
{
    /**
     * @var string
     */
    private $context;

    /**
     * AbstractFactoryMethod constructor.
     */
    public function __construct(string $context)
    {
        $this->context = $context;
    }

    /**
     * @param string $param
     * @return Book
     */
    public function make(string $param)
    {
        $book = $this->makeBook($param);
        $book->createTitle();
        $book->createAuthor();
        $book->createSubject();
        return $book;
    }

    /**
     * @param string $param
     * @return Book
     */
    abstract public function makeBook(string $param): Book;

    /**
     * @return string
     */
    public function getContext(): string
    {
        return $this->context;
    }
}