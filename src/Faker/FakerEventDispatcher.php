<?php

namespace RigorTalks\Faker;


class FakerEventDispatcher
{

    private $called = false;

    public function dispatch($eventName, $event)
    {
        $this->called = true;
    }

    public function dispatchWasCalled()
    {
        return $this->called;
    }
}