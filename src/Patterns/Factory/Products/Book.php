<?php

namespace RigorTalks\Patterns\Factory\Products;


abstract class Book
{
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $author;

    public function __construct()
    {
        $this->subject = null;
        $this->title = null;
        $this->author = null;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    abstract public function createTitle();
    abstract public function createSubject();
    abstract public function createAuthor();
}