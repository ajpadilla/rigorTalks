<?php

namespace RigorTalks\Testing\Builder;

final class User
{
    const MIN_LEVEL_TO_EDIT_VIDEOS = 2;
    private $id;
    private $name;
    private $accessLevel;

    public function __construct(string $id, string $name, int $accessLevel)
    {
        $this->id          = $id;
        $this->name        = $name;
        $this->accessLevel = $accessLevel;
    }

    public function canEditVideos(): bool
    {
        return $this->accessLevel() >= self::MIN_LEVEL_TO_EDIT_VIDEOS;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function accessLevel(): int
    {
        return $this->accessLevel;
    }

}