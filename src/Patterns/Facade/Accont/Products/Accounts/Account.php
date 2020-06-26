<?php

namespace RigorTalks\Patterns\Facade\Account\Products\Accounts;

use RigorTalks\Patterns\Facade\Account\Products\ProductInterface;

Abstract class Account implements ProductInterface
{
    /**
     * @var string
     */
    protected $entity;

    /**
     * @var string
     */
    protected $subsidiary;

    /**
     * @var int
     */
    protected $dd;

    /**
     * @var int
     */
    protected $ccc;

    /**
     * @var string
     */
    protected $type;

    /** @var int $balance */
    protected $balance = 100;

    /**
     * Account constructor.
     * @param string $entity
     * @param string $subsidiary
     * @param int $dd
     * @param int $ccc
     */
    public function __construct(string $entity, string $subsidiary, int $dd, int $ccc)
    {
        $this->entity = $entity;
        $this->subsidiary = $subsidiary;
        $this->dd = $dd;
        $this->ccc = $ccc;
    }

    /**
     * @return mixed|void
     */
    public function open()
    {
        sprintf("opening type account %s",$this->getType());
    }

    /**
     * @return mixed|void
     */
    public function receiptArrives()
    {
        sprintf("receipt arrives in account type %s", $this->getType());
    }

    /**
     * @return mixed|void
     */
    public function deposit()
    {
        sprintf("deposit money in account type %s", $this->getType());
        $this->balance++;
    }

    /**
     * @return mixed|void
     */
    public function withdraw()
    {
        sprintf("withdraw money in account type %s", $this->getType());
        $this->balance --;
    }

    /**
     * @param float $amount
     * @param string $destination_account
     */
    public function transferFunds(float $amount, string $destination_account)
    {
        sprintf("transfer money to destination account %s from account type %s for amount %f",$destination_account,$this->getType(),$amount);
        $this->balance -= $amount;
    }

    /**
     * @return mixed|void
     */
    public function printData()
    {
        sprintf("Account Type %s Banking Entity %s Subsidiary %s DD %s CCC %s",$this->type,$this->entity,$this->subsidiary,$this->dd);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return get_class($this);
    }

    /**
     * @return int
     */
    public function getBalance(): int
    {
        return $this->balance;
    }
}