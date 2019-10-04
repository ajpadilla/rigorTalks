<?php

namespace RigorTalks\Patterns\AbstracFactory\Products;

class CreditCard implements ProductInterface
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

    /**
     * @var string
     */
    protected $type;

    /**
     * CreditCard constructor.
     * @param string $number
     * @param string $expiration_date
     * @param int $cvc
     * @param string $type
     */
    public function __construct(string $number, string $expiration_date, int $cvc, string $type)
    {
        $this->number = $number;
        $this->expiration_date = $expiration_date;
        $this->cvc = $cvc;
        $this->type = $type;
    }


    public function getDataOfProduct()
    {
        return "Type => {$this->type}, Number => {$this->number}, Expiration Date => {$this->expiration_date}, CVC => {$this->cvc}";
    }

}