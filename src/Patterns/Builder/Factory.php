<?php
namespace RigorTalks\Patterns\Builder;


class Factory
{
    /**
     * @param Client $client
     * @return null|Account10Builder|GoldAccountBuilder|StandardAccountBuilder|YoungAccountBuilder
     */
    public static function createAccount(Client $client)
    {
        $accountEntity = null;

        if ($client->isYong())
        {
            $accountEntity = new YoungAccountBuilder('EntityYoung', 'SubsidiaryYoung', '1111', '11111', 'Young');
        }elseif ($client->is10()){
            $accountEntity = new Account10Builder('Entity10', 'Subsidiary10', '1111', '11111', '10');
        }elseif ($client->isGold()){
            $accountEntity = new GoldAccountBuilder('EntityGold', 'SubsidiaryGold', '1111', '11111', 'Gold');
        }else {
            $accountEntity = new StandardAccountBuilder('EntityStandar', 'SubsidiaryStandar', '1111', '11111', 'Standar');
        }

        return $accountEntity;
    }
}