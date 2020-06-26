<?php

namespace RigorTalks\Testing\Builder;

class UserBuilder
{
    private $id;
    private $name;
    private $accessLevel;

    public function __construct()
    {
        $this->id          = 'some-id';
        $this->name        = 'some-name';
        $this->accessLevel = 55;
    }

    public function withAccessLevel(int $accessLevel)
    {
        $this->accessLevel = $accessLevel;

        return $this;
    }

    // withId, withName implementations...

    public function build()
    {
        return new User($this->id, $this->name, $this->accessLevel);
    }
}