<?php

namespace RigorTalks\Patterns\Facade\Account\Factories;

use RigorTalks\Patterns\Facade\Account\Client;
use RigorTalks\Patterns\Facade\Account\Products\CreditCards\CreditCard10;
use RigorTalks\Patterns\Facade\Account\Products\CreditCards\GoldCreditCard;

class CreditCardFactory
{
    /**
     * @param Client $client
     * @param string $number
     * @param string $expiration_date
     * @param int $cvc
     * @return null|CreditCard10|GoldCreditCard
     */
    public static function make(Client $client, string $number, string $expiration_date, int $cvc){
        $creditCardEntity = null;

        if ($client->is10()){
            $creditCardEntity = new CreditCard10($number, $expiration_date, $cvc);
        }elseif ($client->isGold()){
            $creditCardEntity = new GoldCreditCard($number, $expiration_date, $cvc);
        }

        return $creditCardEntity;
    }

}