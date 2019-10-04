<?php

namespace RigorTalks\Patterns\AbstracFactory\Factories;

use RigorTalks\Patterns\AbstracFactory\Products\Accounts\GoldAccount;
use RigorTalks\Patterns\AbstracFactory\Products\CreditCards\GoldCreditCard;
use RigorTalks\Patterns\AbstracFactory\Products\DebitCards\GoldDebitCard;
use RigorTalks\Patterns\AbstracFactory\Products\Gifts\GoldGift;

class GoldFactory implements AbstractFactory
{

    /**
     * @var GoldAccount
     */
    private $account;

    /**
     * @var GoldDebitCard
     */
    private $debitCard;

    /**
     * @var GoldCreditCard
     */
    private $creditCard;

    /**
     * @var GoldGift
     */
    private $gift;

    public function makeProducts()
    {
        $this->createAccount();
        $this->createDebitCard();
        $this->createCreditCard();
        $this->createGift();
    }


    public function createAccount()
    {
        $this->account = new GoldAccount('Entidad Bancaria 1', 'Sucursal 1', 1111, 111,'GoldAccount');
    }

    public function createDebitCard()
    {
        $this->debitCard = new GoldDebitCard('123-456-789', 'GoldDebitCard');
    }

    public function createCreditCard()
    {
        $this->creditCard = new GoldCreditCard('123-456-789-000','2021/09' ,123,'GoldCreditCard');
    }

    public function createGift()
    {
        $this->gift = new GoldGift('GoldGift');
    }

    /**
     * @return GoldAccount
     */
    public function getAccount(): GoldAccount
    {
        return $this->account;
    }

    /**
     * @return GoldDebitCard
     */
    public function getDebitCard(): GoldDebitCard
    {
        return $this->debitCard;
    }

    /**
     * @return GoldCreditCard
     */
    public function getCreditCard(): GoldCreditCard
    {
        return $this->creditCard;
    }

    /**
     * @return GoldGift
     */
    public function getGift(): GoldGift
    {
        return $this->gift;
    }
}