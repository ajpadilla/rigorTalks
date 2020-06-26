<?php

namespace RigorTalks\Patterns\Facade\Account\Factories;

use RigorTalks\Patterns\Facade\Account\Client;
use RigorTalks\Patterns\Facade\Account\Products\DebitCards\DebitCard10;
use RigorTalks\Patterns\Facade\Account\Products\DebitCards\GoldDebitCard;
use RigorTalks\Patterns\Facade\Account\Products\DebitCards\StandardDebitCard;
use RigorTalks\Patterns\Facade\Account\Products\DebitCards\YoungDebitCard;

class DebitCardFactory
{

    /**
     * @param Client $client
     * @param string $number
     * @param string $expiration_date
     * @param int $cvc
     * @return null|DebitCard10|GoldDebitCard|StandardDebitCard|YoungDebitCard
     */
    public static function make(Client $client, string $number, string $expiration_date, int $cvc){

        $debitCardEntity = null;

        if ($client->isYong()) {
            $debitCardEntity = new YoungDebitCard($number, $expiration_date, $cvc);
        }elseif ($client->is10()){
            $debitCardEntity = new DebitCard10($number, $expiration_date, $cvc);
        }elseif ($client->isGold()){
            $debitCardEntity = new GoldDebitCard($number, $expiration_date, $cvc);
        }else {
            $debitCardEntity = new StandardDebitCard($number, $expiration_date, $cvc);
        }

        return $debitCardEntity;
    }

}