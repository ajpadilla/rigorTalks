<?php

namespace RigorTalks\Patterns\AbstracFactory\Products;

class Gift implements ProductInterface
{
    /**
     * @var string
     */
    protected $type;

    /**
     * Gift constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getDataOfProduct()
    {
        return "Type => {$this->type}";
    }
}
