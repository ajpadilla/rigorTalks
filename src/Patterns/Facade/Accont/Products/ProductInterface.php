<?php

namespace RigorTalks\Patterns\Facade\Account\Products;

interface ProductInterface
{
    /**
     * @return mixed
     */
    public function printData();

    /**
     * @return mixed
     */
    public function getType();
}