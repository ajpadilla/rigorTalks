<?php

namespace RigorTalks\Patterns\Bridge;

class RemoteControl
{
    protected  $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if ($this->device->isEnabled())
        {
            echo "Device on, off.\n";
            $this->device->disable();
        }else{
            echo "Device off, on.\n";
            $this->device->enable();
        }
    }

    public function volumeDown()
    {
        $this->device->setVolume($this->device->getVolume() -10);
    }

    public function volumeUp()
    {
        $this->device->setVolume($this->device->getVolume() + 10);
    }

    public function channelDown()
    {
        $this->device->setChannel($this->device->getChannel() - 1);
    }

    public function channelUp()
    {
        $this->device->setChannel($this->device->getChannel() + 1);
    }
}