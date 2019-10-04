<?php

namespace RigorTalks\Patterns\AbstracFactory;

use RigorTalks\Patterns\AbstracFactory\Factories\YoungFactory;
use RigorTalks\Patterns\AbstracFactory\Factories\StandardFactory;
use RigorTalks\Patterns\AbstracFactory\Factories\GoldFactory;
use RigorTalks\Patterns\AbstracFactory\Factories\Factory10;


class FactoryManager
{
    /**
     * @param Client $client
     * @return null|Factory10|GoldFactory|StandardFactory|YoungFactory
     */
   public static function make(Client $client)
   {
       $accountEntity = null;

        if ($client->isYong())
        {
            $accountEntity = new YoungFactory();
        }elseif ($client->is10()){
            $accountEntity = new Factory10();
        }elseif ($client->isGold()){
            $accountEntity = new GoldFactory();
        }else {
            $accountEntity = new StandardFactory();
        }

        return $accountEntity;
   }
}