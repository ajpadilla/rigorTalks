<?php

namespace RigorTalks\Patterns\Bridge;

interface Device
{
    public function isEnabled();
    public function enable();
    public function disable();
    public function getVolume();
    public function setVolume(int $percent);
    public function getChannel();
    public function setChannel(int $channel);
}