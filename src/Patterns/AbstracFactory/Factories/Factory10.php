<?php

namespace RigorTalks\Patterns\AbstracFactory\Factories;

use RigorTalks\Patterns\AbstracFactory\Products\Accounts\Account10;
use RigorTalks\Patterns\AbstracFactory\Products\CreditCards\CreditCard10;
use RigorTalks\Patterns\AbstracFactory\Products\DebitCards\DebitCard10;
use RigorTalks\Patterns\AbstracFactory\Products\Gifts\Gift10;


class Factory10 implements AbstractFactory
{

    /**
     * @var Account10
     */
    private $account;

    /**
     * @var DebitCard10
     */
    private $debitCard;

    /**
     * @var CreditCard10
     */
    private $creditCard;

    /**
     * @var Gift10
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
        $this->account = new Account10('Entidad Bancaria 1', 'Sucursal 1', 1111, 111,'Account10Builder');
    }

    public function createDebitCard()
    {
        $this->debitCard = new DebitCard10('123-456-789', 'DebitCard10');
    }

    public function createCreditCard()
    {
        $this->creditCard = new CreditCard10('123-456-789-000','2021/09' ,'DebitCard10','CreditCard10');
    }

    public function createGift()
    {
        $this->gift = new Gift10('Gift10');
    }

    /**
     * @return Account10
     */
    public function getAccount(): Account10
    {
        return $this->account;
    }

    /**
     * @return DebitCard10
     */
    public function getDebitCard(): DebitCard10
    {
        return $this->debitCard;
    }

    /**
     * @return CreditCard10
     */
    public function getCreditCard(): CreditCard10
    {
        return $this->creditCard;
    }

    /**
     * @return Gift10
     */
    public function getGift(): Gift10
    {
        return $this->gift;
    }


}