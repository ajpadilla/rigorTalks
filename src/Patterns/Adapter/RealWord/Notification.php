<?php

namespace RigorTalks\Patterns\Adapter\RealWord;

interface Notification
{
    /**
     * @param string $title
     * @param string $message
     * @return mixed
     */
    public function send(string $title, string $message);
}