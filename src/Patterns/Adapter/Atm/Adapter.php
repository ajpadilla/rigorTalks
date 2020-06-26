<?php

namespace RigorTalks\Patterns\Adapter\Atm;


Abstract class Adapter
{
    /**
     * @param string $target
     * @param float $amount
     * @return mixed
     */
    public abstract function order(string $target, float $amount);
}