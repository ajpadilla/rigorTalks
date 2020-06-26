<?php

namespace RigorTalks\Patterns\Facade\Account\Factories;

use RigorTalks\Patterns\Facade\Account\Client;
use RigorTalks\Patterns\Facade\Account\Products\Accounts\Account10;
use RigorTalks\Patterns\Facade\Account\Products\Accounts\GoldAccount;
use RigorTalks\Patterns\Facade\Account\Products\Accounts\StandardAccount;
use RigorTalks\Patterns\Facade\Account\Products\Accounts\YoungAccount;

class AccountFactory
{

    /**
     * @param Client $client
     * @param string $entity
     * @param string $subsidiary
     * @param int $dd
     * @param int $ccc
     * @return null|Account10|GoldAccount|StandardAccount|YoungAccount
     */
    public static function make(Client $client, string $entity, string $subsidiary, int $dd,int $ccc)
    {
        $accountEntity = null;

        if ($client->isYong()) {
            $accountEntity = new YoungAccount($entity, $subsidiary, $dd, $ccc);
        }elseif ($client->is10()){
            $accountEntity = new Account10($entity, $subsidiary, $dd, $ccc);
        }elseif ($client->isGold()){
            $accountEntity = new GoldAccount($entity, $subsidiary, $dd, $ccc);
        }else {
            $accountEntity = new StandardAccount($entity, $subsidiary, $dd, $ccc);
        }

        return $accountEntity;
    }
}