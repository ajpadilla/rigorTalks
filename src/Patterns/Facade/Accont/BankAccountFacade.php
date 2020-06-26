<?php

namespace RigorTalks\Patterns\Facade\Account;

use RigorTalks\Patterns\Facade\Account\Factories\AccountFactory;
use RigorTalks\Patterns\Facade\Account\Factories\CreditCardFactory;
use RigorTalks\Patterns\Facade\Account\Factories\DebitCardFactory;
use RigorTalks\Patterns\Facade\Account\Products\Accounts\Account;
use RigorTalks\Patterns\Facade\Account\Products\CreditCards\CreditCard;
use RigorTalks\Patterns\Facade\Account\Products\DebitCards\DebitCard;

class BankAccountFacade
{
    /**
     * @var Account $account
     */
    private $account;

    /** @var CreditCard $creditCard */
    private $creditCard;

    /** @var DebitCard $debitCard */
    private $debitCard;

    /** @var Client $client */
    private $client;

    /**
     * BankAccountFacade constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $entity
     * @param string $subsidiary
     * @param int $dd
     * @param int $ccc
     * @return null|Account
     */
    public function makeAccount(string $entity, string $subsidiary, int $dd, int $ccc)
    {
        $this->account = AccountFactory::make($this->client, $entity, $subsidiary, $dd, $ccc);
        return $this->account;
    }

    /**
     * @param string $number
     * @param string $expiration_date
     * @param int $cvc
     * @return null|CreditCard
     */
    public function makeCreditCard(string $number, string $expiration_date, int $cvc)
    {
        $this->creditCard = CreditCardFactory::make($this->client,$number, $expiration_date, $cvc);
        return $this->creditCard;
    }

    /**
     * @param string $number
     * @param string $expiration_date
     * @param int $cvc
     * @return null|DebitCard
     */
    public function makeDebitCard(string $number, string $expiration_date, int $cvc)
    {
        $this->debitCard = DebitCardFactory::make($this->client,$number, $expiration_date, $cvc);
        return $this->debitCard;
    }

    public function transfer(float $amount, string $destination_account)
    {
        $this->account->transferFunds($amount, $destination_account);
    }

    public function  takeMoneyOut()
    {
        if ($this->debitCard){
            $this->debitCard->withdraw();
        }

        if ($this->creditCard){
            $this->creditCard->withdraw();
        }

        if ($this->account){
            $this->account->withdraw();
        }
    }

    public function checkBalance(){
        sprintf("Balance credit card %d", $this->creditCard->getBalance());
        sprintf("Balance debit card %d", $this->debitCard->getBalance());
        sprintf("Balance account %d", $this->account->getBalance());
    }
}