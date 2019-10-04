<?php

namespace RigorTalks\Patterns\AbstracFactory\Factories;

use RigorTalks\Patterns\AbstracFactory\Factories\AbstractFactory;
use RigorTalks\Patterns\AbstracFactory\Products\Accounts\StandardAccount;
use RigorTalks\Patterns\AbstracFactory\Products\DebitCards\StandardDebitCard;

class StandardFactory implements AbstractFactory
{

    /**
     * @var StandardAccount
     */
    private $account;

    /**
     * @var StandardDebitCard
     */
    private $debitCard;

    public function makeProducts()
    {
        $this->createAccount();
        $this->createDebitCard();
    }

    public function createAccount()
    {
        $this->account = new StandardAccount('Entidad Bancaria 1', 'Sucursal 1', 1111, 111,'StandardAccount');
    }

    public function createDebitCard()
    {
        $this->debitCard = new StandardDebitCard('123-456-789', 'StandardDebitCard');
    }

    /**
     * @return StandardAccount
     */
    public function getAccount(): StandardAccount
    {
        return $this->account;
    }

    /**
     * @return StandardDebitCard
     */
    public function getDebitCard(): StandardDebitCard
    {
        return $this->debitCard;
    }
}