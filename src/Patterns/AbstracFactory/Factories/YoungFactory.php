<?php

namespace RigorTalks\Patterns\AbstracFactory\Factories;

use RigorTalks\Patterns\AbstracFactory\Products\Accounts\YoungAccount;
use RigorTalks\Patterns\AbstracFactory\Products\DebitCards\YoungDebitCard;
use RigorTalks\Patterns\AbstracFactory\Products\Gifts\YoungGift;

class YoungFactory implements AbstractFactory
{
    /**
     * @var YoungAccount
     */
    private $account;

    /**
     * @var YoungDebitCard
     */
    private $debitCard;

    /**
     * @var YoungGift
     */
    private $gift;


    public function makeProducts()
    {
        $this->createAccount();
        $this->createDebitCard();
        $this->createGift();
    }

    public function createAccount()
    {
        $this->account = new YoungAccount('Entidad Bancaria 1', 'Sucursal 1', 1111, 111,'YoungAccount');
    }

    public function createDebitCard()
    {
        $this->debitCard = new YoungDebitCard('123-456-789', 'YoungDebitCard');
    }

    public function createGift()
    {
       $this->gift = new YoungGift('YoungGift');
    }

    /**
     * @return YoungAccount
     */
    public function getAccount(): YoungAccount
    {
        return $this->account;
    }

    /**
     * @return YoungDebitCard
     */
    public function getDebitCard(): YoungDebitCard
    {
        return $this->debitCard;
    }

    /**
     * @return YoungGift
     */
    public function getGift(): YoungGift
    {
        return $this->gift;
    }


}