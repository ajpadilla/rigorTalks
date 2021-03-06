<?php

namespace RigorTalks\Patterns\Adapter\Atm;

class Account implements Product
{
    /**
     * @param float $amount
     * @param string $destinationAccount
     */
    public function transfer(float $amount, string $destinationAccount)
    {
        echo "Transfer money {$amount} into destination account: {$destinationAccount} from account.\n";
    }
}