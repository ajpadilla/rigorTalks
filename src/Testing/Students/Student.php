<?php

namespace RigorTalks\Testing\Students;


class Student
{
    private $id;
    private $name;
    private $totalVideosCreated;

    /**
     * Student constructor.
     * @param string $id
     * @param string $name
     * @param int $totalVideosCreated
     */
    public function __construct( string $id, string $name, int $totalVideosCreated)
    {
        $this->id = $id;
        $this->name = $name;
        $this->totalVideosCreated = $totalVideosCreated;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getTotalVideosCreated(): int
    {
        return $this->totalVideosCreated;
    }


}