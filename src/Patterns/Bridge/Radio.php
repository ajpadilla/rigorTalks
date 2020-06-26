<?php

namespace RigorTalks\Patterns\Bridge;

class Radio implements Device
{

    protected $enabled = true;
    protected $disable = false;
    protected $volume = null;
    protected $chanel = null;

    public function isEnabled()
    {
        return $this->enabled ? true : false;
    }

    public function enable()
    {
        $this->enabled = true;
        $this->disable = false;
    }

    public function disable()
    {
        $this->disable = true;
        $this->enabled = false;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume(int $percent)
    {
        return $this->volume += $percent;
    }

    public function getChannel()
    {
        return $this->chanel;
    }

    public function setChannel(int $channel)
    {
        $this->chanel += $channel;
    }
}