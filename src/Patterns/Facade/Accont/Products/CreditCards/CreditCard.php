<?php

namespace RigorTalks\Patterns\Facade\Account\Products\CreditCards;

use RigorTalks\Patterns\Facade\Account\Products\ProductInterface;

Abstract class CreditCard implements ProductInterface
{
    /**
     * @var string
     */
    protected $number;

    /**
     * @var string
     */
    protected $expiration_date;

    /**
     * @var int
     */
    protected $cvc;

    /** @var int $balance */
    protected $balance = 100;

    /**
     * CreditCard constructor.
     * @param string $number
     * @param string $expiration_date
     * @param int $cvc
     */
    public function __construct(string $number, string $expiration_date, int $cvc)
    {
        $this->number = $number;
        $this->expiration_date = $expiration_date;
        $this->cvc = $cvc;
    }

    /**
     * @return mixed|void
     */
    public function withdraw()
    {
        sprintf("withdraw money in credit card type %s", $this->getType());
        $this->balance--;
    }

    /**
     * @return mixed|void
     */
    public function deposit()
    {
        sprintf("deposit money in credit card type %s", $this->getType());
        $this->balance++;
    }

    /**
     * @return mixed|void
     */
    public function pay()
    {
        sprintf("make payment with a type credit card %s", $this->getType());
    }

    /**
     * @return mixed
     */
    public function printData()
    {
        sprintf("Type %s Number %s Expiration Date %s CVC %s",$this->getType(),$this->number,$this->expiration_date,$this->cvc);
    }

    /**
     * @return mixed
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