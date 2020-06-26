<?php

namespace RigorTalks\Testing\ObjectMother;

final class User
{
    const MIN_LEVEL_TO_EDIT_VIDEOS = 3;

    private $id;
    private $name;
    private $accessLevel;

    public function __construct(UserId $id, UserName $name, AccessLevel $accessLevel)
    {
        $this->id          = $id;
        $this->name        = $name;
        $this->accessLevel = $accessLevel;
    }

    public function id(): UserId
    {
        return $this->id;
    }

    public function name(): UserName
    {
        return $this->name;
    }

    public function accessLevel(): AccessLevel
    {
        return $this->accessLevel;
    }

    public function canEditVideos(): bool
    {
        return $this->accessLevel()->value() >= self::MIN_LEVEL_TO_EDIT_VIDEOS;
    }
}