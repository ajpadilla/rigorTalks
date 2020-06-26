<?php

namespace RigorTalks\Patterns\Prototype\RealWorld;

class Page
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @var Author
     */
    private $author;

    /**
     * @var array
     */
    private $comments = [];

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * Page constructor.
     * @param string $title
     * @param string $body
     * @param Author $author
     * @param array $comments
     * @param \DateTime $date
     */
    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = new \DateTime;
    }

    /**
     * @param string $comment
     */
    public function addComment(string $comment)
    {
        $this->comments[] = $comment;
    }


    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = new \DateTime;
    }

}