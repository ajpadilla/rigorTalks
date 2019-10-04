<?php

namespace RigorTalks\Patterns\Builder;

class BuilderManager
{
    private $accountBuilder;

    public function setAccountBuilder(AbstractAccountBuilder $account)
    {
        $this->accountBuilder = $account;
    }

    public function build()
    {
        $this->accountBuilder->open();
    }


    public function getAccountBuilder()
    {
        return $this->accountBuilder;
    }
}