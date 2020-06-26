<?php

namespace RigorTalks\Patterns\Facade\ComplexVideo;

class VideoFile
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var bool|string
     */
    private $codecType;

    /**
     * VideoFile constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->codecType = substr($name,strpos($this->name, '.') + 1);
    }

    /**
     * @return bool|string
     */
    public function getCodecType()
    {
        return $this->codecType;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}