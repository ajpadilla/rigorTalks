<?php

namespace RigorTalks\Patterns\Adapter\Atm;


interface Product
{
    /**
     * @param float $amount
     * @param string $destinationAccount
     * @return mixed
     */
    public function transfer(float $amount, string $destinationAccount);
}