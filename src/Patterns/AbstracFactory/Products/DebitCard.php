<?php

namespace RigorTalks\Patterns\AbstracFactory\Products;

class DebitCard implements ProductInterface
{
    /**
     * @var string
     */
    protected $number;

    /**
     * @var string
     */
    protected $type;

    /**
     * DebitCard constructor.
     * @param string $number
     * @param string $type
     */
    public function __construct(string $number, string $type)
    {
        $this->number = $number;
        $this->type = $type;
    }

    public function getDataOfProduct()
    {
        return "Type => {$this->type}, AbstractAccountBuilder Number => {$this->number}";
    }
}